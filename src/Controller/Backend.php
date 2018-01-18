<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
// use Symfony\Component\HttpFoundation\Request;
use RedBeanPHP\R;

class Backend extends Frontend
{
    public function question_delete($id)
    {
        if ($id && ($item = $this->data_by_id('question', $id))) {
            $items = $this->steps_by_question_id($id);
            R::trash($item);
            if ($items) {
                return R::trashAll($items);
            }
        }
    }

    public function steps_reset($questionnaire_id)
    {
        $steps= R::find('step', ' questionnaire_id = ?', [ $questionnaire_id ]);
        R::trashAll($steps);
    }


    public function question_order_save($question_id, $step_num=1, $step_order=null)
    {
        if ($question_id && $this->questionnaire->id) {
            $step = R::dispense('step');
            // error_log($step);

            if (!$step_num) {
                $previous_step = $this->questionnaire_last_step();
            }

            $step->question_id = $question_id;
            $step->questionnaire_id = $this->questionnaire->id;

            $step->step = $step_num ? $step_num : $previous_step->step_num+1;
            $step->step_order = $step_order ? $step_order : $previous_step->step_order+1;

            R::store($step);
        }
    }
}
