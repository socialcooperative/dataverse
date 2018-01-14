<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Forms;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\Form\Extension\Core\Type\TimezoneType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\CurrencyType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PercentType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
//use Symfony\Component\Form\Extension\Core\Type\LanguageType;

use Symfony\Component\Form\Extension\Validator\ValidatorExtension;
use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationExtension;

use Symfony\Component\Intl\Intl;

$app['my.formFactory'] = Forms::createFormFactoryBuilder()
    ->addExtension(new ValidatorExtension(Validation::createValidator()))
    ->addExtension(new HttpFoundationExtension())
    ->getFormFactory()
;

//use AdamQuaile\Bundle\FieldsetBundle\AdamQuaileFieldsetBundle;
//use Mayel\FormExtrasBundle\Form\Type\FieldsetType;

// use Mayel\FormExtrasBundle\Form\Type\CustomcodeType;

class Form extends Frontend
{

  /**
  * @Route("/thankyou", name="thankyou")
  */
  public function thankyou(Request $request)
  {
    return $this->render('form/thankyou.html.twig', []);
  }

  /**
  * @Route("/question", name="question")
  */
    public function question(Request $request)
    {
        global $field_params;

        // some default data for when the form is displayed the first time
        $data = array(
        'ts_latest' => $this->DateTime(),
            );
        $step_skip_allowed = true;

        $this->questionnaire_id = $_GET['questionnaire'] ? $_GET['questionnaire'] : $this->session->get('questionnaire'); // get from session

        if ($this->questionnaire_id) {
            $this->questionnaire = $this->questionnaire_get($this->questionnaire_id);
        }

        if (!$this->questionnaire->id && !$_GET['id']) {
            exit('which questionnaire are you trying to answer?');
        }


        $this->respondent_id = $this->session->get('respondent');

        if ($this->respondent_id) {
            $this->respondent = $this->data_by_id($this->db_tables->respondent, $this->respondent_id); // load existing respondent
            $this->respondent_id = $this->respondent->id;
        }

        if (!$this->respondent_id) {
            $data_respondent['ts_started'] = $this->DateTime();

            $data_respondent['questionnaire'] = $this->questionnaire;

            $data_respondent['ip'] = $request->server->get('REMOTE_ADDR');
            $data_respondent['browser'] = $_SERVER['HTTP_USER_AGENT'];

            $this->respondent_id = $this->item_save($this->db_tables->respondent, $data_respondent); // init in DB
            if ($this->respondent_id) {
                $this->respondent =& $this->item;
            } // the respondent RB object
        }

        if (!$this->respondent_id) {
            exit('could not initialise respondent');
        } else {
            $this->session->set('respondent', $this->respondent_id); // save as session
        }

        //	if(!$this->response) {
        //		$this->response = $this->data_by_id( $this->db_tables->response, $this->respondent_id ); // load existing responses
        //	}


        //$this->response = R::dispense( $this->db_tables->response );


        // $this->question_id = ($_GET['id'] ? $_GET['id'] : $this->session->get('current_question')); // get from session
        $this->question_id = $_GET['id'];

        if ($this->question_id) {
            $this->questions[0] = $this->data_by_id('question', intval($this->question_id));
        } else { // forward

            if (is_numeric($_GET['after'])) {
                $this->current_step = $_GET['after']+1;
            } elseif (is_numeric($_GET['before'])) {
                $this->current_step = $_GET['before']-1;
            } else {
                $this->current_step = is_numeric($_GET['step']) ? $_GET['step'] : $this->session->get('current_step');
            } // get from URL or session

            if (!$this->current_step) {
                $this->current_step = 1;
            } // default to 1st step

            // $this->questions = R::findAll( 'question', ' questionnaire_id = ? AND step = ? ORDER BY step_order ASC ', [$this->questionnaire->id, $this->current_step] );
            // R::fancyDebug( TRUE );

            $steps = $this->questionnaire_step($this->current_step);

            foreach ($steps as $s) {
                // var_dump($s, $s->question);
                $s->question->step = $s->step;
                $this->questions[] = $s->question;
            }
        }

        if (!count($this->questions)) {
            return $this->redirect('/thankyou');
            // $this->questions = $this->questionnaire_questions($this->questionnaire->id); // fallback to load all questions
        }

        // if(isset($_GET['after']) || !$this->question_id){ // forward
        //
        // 	$this->from_step = isset($_GET['after']) ? $_GET['after'] : $this->session->get('current_step'); // get from session
        //   if(!$this->from_step) $this->from_step = 0; // default to 1st question
        //
        // 	$this->question = R::findOne( 'question', ' questionnaire_id = ? AND step > ? ORDER BY step ASC LIMIT 1 ', [$this->questionnaire->id, $this->from_step] );
        //
        // } elseif(isset($_GET['before'])){ // backward
        //
        // 	$this->from_step = isset($_GET['before']) ? $_GET['before'] : $this->session->get('current_step'); // get from session
        //
        // 	$this->question = R::findOne( 'question', ' questionnaire_id = ? AND step < ? ORDER BY step DESC LIMIT 1 ', [intval($this->questionnaire->id), intval($this->from_step)] );
        //
        // }


        // var_dump($this->questionnaire->id, $this->respondent_id, $this->question_id, $this->questions, $this->question, $data, $this->response);

        //$list_questions = R::findAll( 'question', ' ORDER BY id DESC LIMIT 10 ' );
        //R::preload($list_questions, array('answer')); // eager loading of answers

        //print_r($list_questions);

        $form_builder = $this->createFormBuilder();
        // [
        // 	'allow_extra_fields' => true,
        // 	'extra_fields_message' => 'This form should not contain extra fields!'
        // ]

        //var_dump($form_builder);
        // var_dump($this->questions);

        // var_dump($this->questions);
        foreach ($this->questions as $this->question) {
            // print_r($this->question);

            if (!$this->questionnaire) {
                $this->questionnaire = $this->question->questionnaire;
            } // get from table

            $this->question_id = $this->question->id;
            $this->current_step = $this->question->step;

            $this->session->set('questionnaire', $this->questionnaire->id); // save as session
        $this->session->set('current_question', $this->question_id); // save as session
        $this->session->set('current_step', $this->current_step); // save as session

        $this->field_label = $this->question->question_text ? $this->question->question_text : $this->question->question_name;
            $this->field_name = ($this->question->question_name ? $this->question->question_name : $this->question->id);
            //$this->field_name .= '-'. $this->question->answer_type;

            $this->questions_by_field[$this->field_name] = $this->question;

            if ($this->question->continue_label) {
                $this->questionnaire->continue_label = $this->question->continue_label;
            } // custom per-question button

            $attr = array('class' => ' fieldtype-'.$this->question->answer_type. ' field-'.$this->field_name);

            $attr['data-help'] = $help = $this->question->question_note;

            if ($this->respondent_id) {
                $r = $this->response_by_question_id($this->question_id, $this->respondent_id);
            } // laod previous response
            $prev_response = $r->the_var;
            if (!$prev_response) {
                $prev_response = $r->the_num;
            }
            if (!$prev_response) {
                $prev_response = $r->the_date;
            }
            if (!$prev_response) {
                $prev_response = $r->the_point;
            }
            if (!$prev_response && $r->answer) {
                $prev_response = $r->answer->answer;
            }

            if ($r->answer) {
                $prev_answer_id = $r->answer->id;
            }

            $attr['value'] = $prev_response ? $prev_response : $this->question->question_default_answer;

            $field_params = [];

            $field_params['required'] = !$this->question->skip_allowed;
            if (!$this->question->skip_allowed) {
                $step_skip_allowed = false;
            }

            switch ($this->question->answer_type) {
            case "LongText":

                $attr['rows'] = '4';

                $form_builder->add($this->field_name, TextareaType::class, $this->field_params([
                    'label' => $this->field_label,
                    'attr'	  => $attr
                ]));

                break;
            case "Email":

                $form_builder->add($this->field_name, EmailType::class, $this->field_params([
                    'label' => $this->field_label,
                    'attr'	  => $attr,
                    'constraints' => array(new Assert\Email(array(
                        'message' => 'The email {{ value }} is not a valid email.',
                        'checkMX' => true,
                    )))
                ]));

                break;
            case "Date":

                $attr['style'] = 'max-width:240px';

                $form_builder->add($this->field_name, DateType::class, $this->field_params([
                    'label' => $this->field_label,
                    'attr'	  => $attr,
                    'widget' => 'single_text',
                ]));

                break;
            case "Time":

                $attr['style'] = 'max-width:140px';

                $form_builder->add($this->field_name, TimeType::class, $this->field_params([
                    'label' => $this->field_label,
                    'attr'	  => $attr,
                    'widget' => 'single_text',
                ]));

                break;
            case "DateTime":

                //$attr['style'] = 'width:50%';

                $form_builder->add($this->field_name, DateTimeType::class, $this->field_params([
                    'label' => $this->field_label,
                    'attr'	  => $attr,
                    'date_widget' => 'single_text',
                    'time_widget' => 'single_text',
                ]));

                break;
            case "Birthday":

                $attr['style'] = 'max-width:240px';

                $form_builder->add($this->field_name, BirthdayType::class, $this->field_params([
                    'label' => $this->field_label,
                    'attr'	  => $attr,
                    'widget' => 'single_text',
                ]));

                break;
            case "NumberInteger":

                $attr['style'] = 'max-width:200px';

                $form_builder->add($this->field_name, IntegerType::class, $this->field_params([
                    'label' => $this->field_label,
                    'scale' => 0,
                    // 'help'	  => $help,
                    'attr'	  => $attr
                ]));

                break;
            case "Number":

                $attr['style'] = 'max-width:200px';

                $form_builder->add($this->field_name, NumberType::class, $this->field_params([
                    'label' => $this->field_label,
                    //'scale' => 0,
                    'attr'	  => $attr
                ]));

                break;
            case "Percentage":

                $attr['style'] = 'max-width:100px';

                $form_builder->add($this->field_name, PercentType::class, $this->field_params([
                    'label' => $this->field_label,
                    //'scale' => 0,
                    'attr'	  => $attr
                ]));

                break;
            case "Phone":

                $output_after .= '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/9.0.14/css/intlTelInput.css" />
				<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/9.0.14/js/intlTelInput.min.js"></script>';

                //$attr['class'] .= ' ';

                $form_builder->add($this->field_name, TextType::class, $this->field_params([
                    'label' => $this->field_label,
                    //'choice_value' => '',
                    //'placeholder' => '+1 555 123 4567',
                    'attr'	  => $attr
                ]));

                break;
            case "Currency":

                currency_get();

                $attr['class'] .= ' select2';

                \Locale::setDefault('en');

                $choices = [];
                foreach ($this->question->sharedAnswerList as $s) {
                    //print_r($s);
                    $cname = Intl::getCurrencyBundle()->getCurrencyName($s->answer);
                    $choices[$cname ? $cname : $s->answer] = $s->answer;
                }

                if ($attr['value']) {
                    $this->currency = $attr['value'];
                }

                $form_builder->add($this->field_name, CurrencyType::class, $this->field_params([
                    'label' => $this->field_label,
                    'placeholder' => 'Select a currency',
                    'attr'	  => $attr,
                    'data'	  => $this->currency,
                    'choices'	  => $choices,
            ]));

                break;
            case "Price":

                currency_get();

                $param = array(
                    'label' => $this->field_label,
                    'attr'	  => $attr
                );

                //if($currency) $param['currency'] = $this->currency;
                //$form_builder->add($this->field_name, MoneyType::class, $param);

                $form_builder->add($this->field_name, NumberType::class, $this->field_params([$param]));

                $attr['class'] .= ' select2';

                $form_builder->add('currency', CurrencyType::class, $this->field_params([
                    'label' => 'In what currency?',
                    'placeholder' => 'Select a currency',
                    'attr'	  => $attr,
                    'data'	  => $this->currency,
                ]));

                break;
            case "Country":

                $attr['class'] .= ' select2';

                $form_builder->add($this->field_name, CountryType::class, $this->field_params([
                    'label' => $this->field_label,
                    //'choice_value' => '',
                    'placeholder' => 'Select a country',
                    'attr'	  => $attr
                ]));

                break;
            case "Timezone":

                $attr['class'] .= ' select2';

                $form_builder->add($this->field_name, TimezoneType::class, $this->field_params([
                    'label' => $this->field_label,
                    //'choice_value' => '',
                    'placeholder' => 'Select a timezone',
                    'attr'	  => $attr
                ]));

                break;
            case "Password":

                $output_after .= '<script src="https://cdnjs.cloudflare.com/ajax/libs/hideshowpassword/2.0.10/hideShowPassword.min.js"></script><link rel="stylesheet" href="/css/pw.wink.css">';

                $form_builder->add($this->field_name, PasswordType::class, $this->field_params([
                    'label' => $this->field_label,
                    //'placeholder' => 'Choose a password',
                    'attr'	  => $attr
                ]));

//				$form_builder->add($this->field_name.'-check', PasswordType::class, $this->field_params([
//					'label' => 'Type it again',
//					//'placeholder' => 'Choose a password',
//					'attr'	  => $attr
//				]));

                break;
            case "Dropdown":
                $dropdown=true;

                // no break
            case "Choice":

                //$answers = R::findAll( 'answer', $this->question);
                //print_r($answers);

                $choices = [];
                foreach ($this->question->sharedAnswerList as $s) {
                    //print_r($s);
                    $choices[$s->answer] = $s->id;
                }

                if ($dropdown) {
                    $attr['class'] .= ' select2';
                }

                $data = $prev_answer_id;

                $form_builder->add($this->field_name, ChoiceType::class, $this->field_params([
                    'label' => $this->field_label,
                    'choices' => $choices,
                    'expanded' => !$dropdown,
                    'multiple' => false,
                    'attr'	  => $attr,
                    'data'	  => $data,
                    //'label_attr'	  => ['class'=>'btn btn-primary'],
                    //'choice_attr'	  => ['class'=>'xyz']
                ]));
                unset($dropdown);

                break;
            case "MultipleChoices":

                //$answers = R::findAll( 'answer', $this->question);
                //print_r($answers);

                $choices = [];
                foreach ($this->question->sharedAnswerList as $s) {
                    //print_r($s);
                    $choices[$s->answer] = $s->id;
                }

                $form_builder->add($this->field_name, ChoiceType::class, $this->field_params([
                    'label' => $this->field_label,
                    'choices' => $choices,
                    'expanded' => true,
                    'multiple' => true,
                    'attr'	  => $attr
                ]));

                break;
            case "UploadImage":
            case "UploadDoc":
            case "UploadFile":

                $form_builder->add($this->field_name, FileType::class, $this->field_params([
                    'label' => $this->field_label,
                    'attr'	  => $attr
                ]));

                break;
            case "URL":

                $form_builder->add($this->field_name, URLType::class, $this->field_params([
                    'label' => $this->field_label,
                    'attr'	  => $attr,
                    'data'	  => 'http://'
                ]));

                break;
            case "MapLocation":

                $attr['style'] .= 'display:none;';

                $output_after .= "<script>
				var loc_field = '#form_$this->field_name';
				</script>";

                $output_before .= file_get_contents($this->conf->base_path.'/templates/map.html');

                $form_builder->add($this->field_name, TextType::class, $this->field_params([
                    'label' => $this->field_label,
                    'attr'	  => $attr,
                ]));

                break;
            case "Sortable":


                global $sortable;
                $sortable->choices = [];
                foreach ($this->question->sharedAnswerList as $s) {
                    //print_r($s);
                    $sortable->choices[$s->step][$s->id] = $s->answer;
                }

                $attr['style'] .= 'display:none;';

                $output_after .= "<script>
				var field_name = '$this->field_name';
				</script>";

                $output_before .= get_include('templates/sortable.html');

                $form_builder->add($this->field_name, TextType::class, $this->field_params([
                    'label' => $this->field_label,
                    'attr'	  => $attr,
                    'data'	  => 'sorted',
                ]));

                break;
            case "Notice":

                $html = '<p class="'.$attr['class'].'">'.nl2br($this->question->question_note).'</p>';
                // $html = '<div class="form-group" id="'.$this->field_name.'"><label class="form-control-label required">'.$this->field_label.'</label>'.$html.'</div>';
                $attr['html'] = $html;

                $form_builder->add($this->sanitize_string($this->field_name), FormCustomCode::class, $this->field_params([
                    // 'label' => $this->field_label,
                    // 'data' => $this->field_label,
                    'attr'	  => $attr,
                    // 'html'	  => $output_after
                ]));

                break;
            case "Include":

                $html = '<div class="form-group" id="'.$this->field_name.'"><label class="form-control-label required">'.$this->field_label.'</label>
				' . $this->get_include('custom/'.$this->field_name).'</div>';
                $attr['html'] = $html;

                $form_builder->add($this->sanitize_string($this->field_name), FormCustomCode::class, $this->field_params([
                    // 'label' => $this->field_label,
                    // 'data' => $this->field_label,
                    'attr'	  => $attr,
                    // 'html'	  => $output_after
                ]));

                break;
            default:

                if ($this->field_name) {
                    $form_builder->add($this->field_name, TextType::class, $this->field_params([
                    'label' => $this->field_label,
                    'attr'	  => $attr
                ]));
                }

                break;
        }

            //		$form_builder->add("answer_type", HiddenType::class, $this->field_params([
//		    'data' => $this->question->answer_type,
//		));
        }

        //	$form_builder->add('save', SubmitType::class, [
        //			'label' => 'Continue',
        //		]);

        if (isset($_GET['embedded'])) {
            $output_after .= '<script src="https://cdnjs.cloudflare.com/ajax/libs/iframe-resizer/3.5.15/iframeResizer.contentWindow.min.js"></script>';
        }

        $form = $form_builder->getForm();
        // error_log(print_r($form, true));

        $form->handleRequest($request);


        if ($form->isSubmitted()) { //  && $form->isValid()
            $data = $form->getData();
        } else { // sorting
            $data = (array) json_decode(file_get_contents("php://input"));
        }

        // error_log(print_r($data, true));

        if ($data) {

        //$data['ts_latest'] = R::isoDateTime();

            // do something with the data

            $response_ids = $this->respondent_questions_responses_save($data);

            return $this->redirect('?after='.$this->current_step);

            //print_r($id);

        //$show = $app['twig']->render('data.html.twig', array('data' => $data) ); // preview


        //email_send($show);

        //return $show;

        // redirect somewhere
        //return $app->redirect('/');
        } // end data


        $next_step = $this->questionnaire_next_step($this->current_step);
        if ($next_step->id !=$this->current_step) {
            $this->has_more_questions = true;
        }

        // display the form
        return $this->render('form/question.html.twig', array('form' => $form->createView(), 'output_before' => $output_before, 'output_after' => $output_after, 'current_step' => $this->current_step, 'has_more_questions' => $this->has_more_questions , 'title' => $this->questionnaire->questionnaire_title , 'continue_label' => ($this->questionnaire->continue_label ? $this->questionnaire->continue_label : 'Continue'), 'skip_allowed'=>$step_skip_allowed));
    }
}
