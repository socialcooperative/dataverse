<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Forms;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\Form\Extension\Validator\ValidatorExtension;
use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationExtension;

// $app['my.formFactory'] = Forms::createFormFactoryBuilder()
//     ->addExtension(new ValidatorExtension(Validation::createValidator()))
//     ->addExtension(new HttpFoundationExtension())
//     ->getFormFactory()
// ;



class Build extends Backend
{

    /**
    * @Route("/admin/", name="build_admin")
    */
    public function build_admin()
    {
        return $this->list();
    }

    /**
    * @Route("/build", name="build_list")
    */
    public function list()
    {
        $this->admin_auth();

        $this->page_title = "Questionnaires Dashboard";

        $data = $this->questionnaires();

        return $this->render('build/dash-list.html.twig', array(
          'title' => $this->page_title,
          'questionnaires_list' => $data
      ));
    }



    /**
    * @Route("/build/questionnaire", name="build_questionnaire")
    */
    public function questionnaire(Request $request)
    {
        $this->admin_auth();

        global $sortable;


        if (!isset($_GET['new'])) {
            $this->page_title = "Edit Questionnaire";

            $this->questionnaire_id = $_GET['id'] ? $_GET['id'] : $this->session->get('questionnaire'); // get from session

            if ($this->questionnaire_id) {
                $this->questionnaire = $this->questionnaire_get($this->questionnaire_id);
            }
        }

        if (!$this->questionnaire->id) {
            $this->page_title = "New Questionnaire";

            $form_builder = $this->createFormBuilder();
        } else {
            $this->session->set('questionnaire', $this->questionnaire->id);

            $popup = '<script type="text/javascript" src="'.$this->config->home_url.'/embed.js.php?id='.$this->questionnaire->id.'"></script><button onclick="return dataverse_open_form()" type="button">Open Questionnaire</button>';
            $embed .= '<iframe style="height:500px; width:100%; border: none;" src="'.$this->config->home_url.'/q/'.$this->questionnaire->id.'?embedded&amp;step=1"></iframe>';

            $this->logger->info('.....questionnaire', [$this->questionnaire]);

            $form_builder = $this->createFormBuilder($this->questionnaire);
        }


        $form_builder->add('questionnaire_title', TextType::class, [
                'label' => 'Title',
                'attr'=>['placeholder' => 'User Survey'],

            ])
            ->add('questionnaire_name', TextType::class, [
                'label' => 'Short name',
                'attr'=>['placeholder' => 'survey'],

            ])
            ->add('do_not_review', ChoiceType::class, [
                'label' => 'When respondent visits the form again...',
                'choices' => array(
                    'Review previous answers' => null,
                    'Start fresh' => 1
                ),
                'expanded'  => true,
                'multiple'  => false,
            ])
            ->add('continue_label', TextType::class, [
                'label' => "Default text for 'Continue' buttons",
                'attr'=>['placeholder' => 'Continue'],
                                'required' => false,

            ]);

        if ($this->questionnaire->id) {
            $form_builder->add('embed', TextareaType::class, [
                    'label' => "Code for embeding",
                    'data'=> $embed,
                    'disabled'=> true,

                ])
                ->add('popup', TextareaType::class, [
                    'label' => "Code for popup button (assumes you have jQuery loaded on your page)",
                    'data'=> $popup,
                    'disabled'=> true,

                ]);

            $output_code .= '
			<p>
			<a href="/build/question" id="skip" class="btn-sm btn btn-info float-right">Add Question</a>
			<label class="font-weight-bold">Questions</label>
			';

            $sortable->links = $sortable = new class {
            };
            $sortable->links->step = '/q/'.$this->questionnaire->id.'?step=';
            $sortable->links->edit = '/build/question?id=';
            $sortable->links->delete = '/build/question?id=';

            $sortable->choices = [];
            $questions = $this->questionnaire_steps($this->questionnaire->id);
            if (!$questions) {
                $questions = $this->questionnaire_questions($this->questionnaire->id);
            }

            foreach ($questions as $s) {
                // print_r($s);
                // if(!$s->step) $s->step = $prev_step+99;
                $q = new class {
                };
                $q->label = $s->question->question_text ? $s->question->question_text : $s->question_text;
                $q->type = $s->question->answer_type;
                $sortable->choices[$s->step][$s->question->id ? $s->question->id : $s->id] = $q;
                $prev_step = $s->step;
            }

            // var_dump($sortable->choices);
            $sortable->is_tree = true;
            // if(count($sortable->choices)>1) $sortable->is_tree = true;
            // else $sortable->choices

            if ($sortable->choices) {
                $attr['style'] .= 'display:none;';

                $output_code .= $this->get_include('templates/form/sortable.html');

                if ($this->questionnaire->id) {
                    $output_code .= '
				<a href="/build/question" id="skip" class="btn-sm btn btn-info float-right">Add Question</a>
				';
                }

                $this->session->set('num_steps', count($choices));
            }
        }


        $form = $form_builder->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted()) { //  && $form->isValid()
            $data = $form->getData();
        } else { // sorting
            $data = (array) json_decode(file_get_contents("php://input"));
        }

        if ($data) {
            $this->logger->info('got form data', $data);

            if ($data['sortable']) { // user is sorting the questions

                $this->steps_reset($this->questionnaire->id); // wipe

                $i_step=1;
                foreach ($data['sortable'] as $so) {
                    $this->question_order_save($so->id, $i_step, 1);

                    if (count($so->children[0])) { // has sub-questions
                        $i_step_child=2;
                        foreach ($so->children[0] as $so_child) {
                            // error_log(print_r($so_child, true));
                            $this->question_order_save($so_child->id, $i_step, $i_step_child);
                            $i_step_child++;
                        }
                    }

                    $i_step++;
                }
                exit("OK sorted $i_step / $i_step_child");
            }

            // do something with the data
            $this->item =& $this->questionnaire;
            $id = $this->item_save('questionnaire', $data);
            //print_r($id);

            $this->session->set('questionnaire', $id);

            // redirect somewhere
            return $this->redirectToRoute('build_question');
        }

        // display the form
        return $this->render('form.html.twig', array('form' => $form->createView(), 'output_code' => $output_code, 'title' => $this->page_title));
    }


    /**
    * @Route("/build/question", methods={"DELETE"}, name="build_question_delete")
    */
    public function delete()
    {
        $this->admin_auth();

        if ($_REQUEST['id'] && $this->question_delete($_REQUEST['id'])) {
            exit("OK");
        } else {
            exit("Error");
        }
    }

    /**
    * @Route("/build/question", name="build_question")
    */
    public function question(Request $request)
    {
        $this->admin_auth();


        if ($_GET['id']) {
            $this->question = $this->data_by_id('question', $_GET['id']);
        }

        if ($this->question && $this->question->questionnaire_id) { // edit

            $this->questionnaire_id = $this->question->questionnaire_id;
        } else { // new question

            $this->questionnaire_id = $_GET['questionnaire'] ? $_GET['questionnaire'] : $this->session->get('questionnaire'); // get from session
        }

        if ($this->questionnaire_id) {
            $this->questionnaire = $this->questionnaire_get($this->questionnaire_id);
        }

        $this->session->set('questionnaire', $this->questionnaire->id);

        if (!$this->questionnaire->id) {
            return $this->redirectToRoute('build_list');
        }

        // $this->answer_examples = [
        //     'NumberInteger'=>1,
        //     'LongText'=>2,
        //     'Country'=>3,
        //     'Choice'=>4,
        //     'MultipleChoices'=>5,
        //     'Email'=>6,
        //     'Timezone'=>7,
        //     'Phone'=>8,
        //     'URL'=>9,
        //     'Date'=>10,
        //     'DateTime'=>11,
        //     'Time'=>12,
        //     'Currency'=>13,
        //     'Price'=>14,
        //     'Password'=>15,
        //     'Number'=>16,
        //     'Percentage'=>17,
        //     'Birthday'=>18,
        //     'UploadImage'=>19,
        //     'MapLocation'=>20,
        //     'Sortable'=>21,
        //
        //     'ShortText'=>23,
        //     'Language'=>24
        //     ];

        //$types = array_combine($types, $types);
        $types = array_flip($this->answer_types);

        // $form_data =  $this->question;
        // $this->logger->info('.....question', [$form_data]);


        $form = $this->createFormBuilder() // TODO: allow editing existing question
                ->add('answer_type', ChoiceType::class, array(
                    'label' => 'What kind of information do you need?',
                    'choices' => $types,
                    'expanded' => true,
                    'choice_label' => function ($value, $key, $index) {

                        //var_dump($this->answer_examples, $value);
                        if ($this->answer_examples[$value]) {
                            return $key.'<a href="/question?id='.$this->answer_examples[$value].'" target="_blank" class="btn btn-sm float-right"><i class="fa fa-eye" aria-hidden="true"></i></a>';
                        }
                        return $key;
                    },
                ))
                ->add('question_text', null, [
                    'label' => 'Ask the question',
                    'attr'=>['placeholder' => 'How old are you?'],
                ])
                ->add('question_name', null, [
                    'label' => 'Field name',
                    'attr'=>['placeholder' => 'age'],
                    'required'	  => false,
                ])
                ->add('question_default_answer', null, [
                    'label' => 'Default value (if any)',
                    'required'	  => false,
                ])
                ->add('question_note', TextareaType::class, [
                    'label' => 'Note (optional)',
                    'attr'=>['placeholder' => 'All ages welcome!'],
                    'required'	  => false,
                ])
                ->add('continue_label', null, [
                    'label' => "Custom text for 'Continue' button",
                    'attr'=>['placeholder' => 'Continue'],
                    'required'	  => false,
                ])
                ->add('skip_allowed', CheckboxType::class, [
                    'label' => "This question should not be skipped",
                    'required'	  => false,
                    'data' => false
                ])
               ->add('answer', CollectionType::class, array(
                   // each entry in the array will be an "email" field
                    'label' => 'For multiple choice answers, add options:',
                   'entry_type'   => TextType::class,
                   'allow_add'	=> true,
                   // these options are passed to each "email" type
                   'entry_options'  => array(
                       'label'	  => false,
                       'required'	  => false,
                       'attr'	  => array('class' => ' extra-input')
                   ),
               ))
        //		->add('save', SubmitType::class, [
        //			'label' => 'Save',
        //		])
                ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted()) { //$form->isValid()
            $data = $form->getData();

            $this->logger->info('.....save question', [$data]);

            if (is_array($data)) { // new question

                if (!$data['question_name']) {
                    $data['question_name'] = $data['question_text'];
                }
                $data['question_name'] = $this->sanitize_string($data['question_name'], true, true); // cleanup fieldname

                $data['questionnaire'] = $this->questionnaire;
            } else { // edit question (TODO)
                $data = $data->export();
            }


            // do something with the data
            $this->item =& $this->question;

            $id = $this->item_save('question', $data);

            $this->question_order_save($id, null);

            // redirect somewhere
            return $this->redirectToRoute('build_questionnaire', ['id'=>$this->questionnaire->id]);
        }

        // display the form
        return $this->render('build/question.html.twig', array('form' => $form->createView(), 'title' => $this->questionnaire->questionnaire_title ));
    }


    /**
    * @Route("/build/action", name="build_action")
    */
    public function action()
    {
        $this->admin_auth();

        exit("TODO");
    }
}
