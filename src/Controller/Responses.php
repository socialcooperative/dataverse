<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use RedBeanPHP\R;

class Responses extends Admin
{
    public function response_value($r)
    { // get responses from DB, with support for many to many for items with array of data

        $the_response = $r->the_var;

        if (!$the_response) {
            $the_response = $r->the_num;
        }
        if (!$the_response) {
            $the_response = $r->the_date;
        }
        if (!$the_response) {
            $the_response = $r->the_date_time;
        }
        if (!$the_response) {
            $the_response = $r->the_time;
        }

        $the_answer_id = $r->answer_id;

        if (!$the_response && $r->answer && $r->answer->id) {
            $the_response = $r->answer->answer;
            $the_answer_id = $r->answer->id;
        }

        if (!$the_response) {
            // R::bindFunc('read', 'response.the_point', 'asText');
            $the_response = $r->the_point;

            if ($the_response) {
                list($lat, $long) = $this->geo_point_to_array($the_response);

                if ($lat) {
                    $the_response = "<a href='https://www.openstreetmap.org/?mlat=$lat&mlon=$long&zoom=12#layers=M' target='_blank'>$lat, $long</a>";
                }
            }
        }

        // var_dump($the_answer_id, $the_response, $r->question);

        if (is_numeric($the_response) && $r->question && $r->question->answer_type=='TaxonomyTag') { // taxonomy tag

            $this->the_response_tag_id = $the_response;

            $tx = $this->get('Taxonomy');
            $the_tag = $tx->tag_name_with_ancestors($this->the_response_tag_id, $seperator=' ≫ ');

            if ($the_tag) {
                $the_response = "<a class='question-".$r->question->question_name."' href='/needs?tag_id=$this->the_response_tag_id' target='_blank'>$the_tag</a>";
            }
        }

        if ($this->the_response_tag_id) {
            if ($r->question->question_name=='tag_new_label') { // new tag
                $the_response .= $this->response_action_button("/taxonomy/tag/". $this->the_response_tag_id ."/new?format=redirect&label=". urlencode($the_response));
            }

            if ($this->questionnaire->questionnaire_name=='tag_move') { // delete tag

                if ($this->move_from_tag) {
                    $the_response .= $this->response_action_button("/taxonomy/tag/". $this->move_from_tag ."/edit?parent_tag=". $this->the_response_tag_id ."&format=redirect", 'warning');
                } else {
                    $this->move_from_tag = $this->the_response_tag_id;
                }
            }

            if ($r->question->question_name=='tag_label_new') { // rename tag
                $the_response .= $this->response_action_button("/taxonomy/tag/". $this->the_response_tag_id ."/edit?format=redirect&label=". urlencode($the_response), 'danger');
            }

            if ($this->questionnaire->questionnaire_name=='tag_delete') { // delete tag
                $the_response .= $this->response_action_button("/taxonomy/tag/". $this->the_response_tag_id ."/delete?format=redirect", 'danger');
            }
        }

        // $the_response .= " // A: ".$this->the_response_tag_id." T: ".$r->question->answer_type." N: ".$this->questionnaire->questionnaire_name." ID: ".$this->the_response_tag_id." Q: ".$r->question->question_name;


        return [$the_answer_id, $the_response];
    }

    public function response_action_button($link, $class='success')
    {
        $this->the_response_tag_id = false;
        return "<a href='$link' class='btn btn-sm btn-$class pull-right'>Confirm</a>";
    }

    public function responses_browse($questionnaire_id, $page, $sort_by, $sorting, $has_email_field=false, $include_personal_info=true)
    {
        global $bv;

        $this->questionnaire_id = $questionnaire_id ? $questionnaire_id : $this->session->get('questionnaire'); // get from session

        // R::debug();

        if ($has_email_field) {
            $count = R::count('respondent', ' questionnaire_id = ? AND email IS NOT NULL ', [ $this->questionnaire_id ]);
        } else {
            $count = R::count('respondent', ' questionnaire_id = ? ', [ $this->questionnaire_id ]);
        }

        if (!$count) {
            return [];
        }

        $this->session->set('questionnaire', $this->questionnaire_id); // save as session

        $limits = ($this->conf->db_type == 'postgres' ? ' LIMIT ? OFFSET ? ' : ' LIMIT ? , ? ');

        $per_page = 50;

        if ($has_email_field) {
            $people = R::find('respondent', " questionnaire_id = ? AND email IS NOT NULL ORDER BY $sort_by $sorting ", [ $this->questionnaire_id ]);
        } // list all with email
        else {
            $people = R::find('respondent', " questionnaire_id = ? ORDER BY $sort_by $sorting ", [ $this->questionnaire_id ]);
        } // list all

        if ($people) {
            foreach ($people as $p) {
                R::bindFunc('read', 'response.the_point', 'asText');
                $resp_data = R::find('response', ' respondent_id = ?
              ORDER BY response_ts ASC', [ $p->id ]);

                $pr = [];
                foreach ($resp_data as $r) {
                    list($key, $c) = $this->response_value($r);

                    if ($r->question_id) {
                        if ($c && $this->questions[$r->question_id] && $this->questions[$r->question_id]->question_name && $bv->preload_choices[$this->questions[$r->question_id]->question_name] && $bv->preload_choices[$this->questions[$r->question_id]->question_name][$c]) {
                            $c = $bv->preload_choices[$this->questions[$r->question_id]->question_name][$c];
                        }

                        if ($pr[$r->question_id] && !is_array($pr[$r->question_id])) { // first of multiple answers
                            $first_a = $pr[$r->question_id];
                            $pr[$r->question_id] = [];
                            $pr[$r->question_id][] = $first_a;
                            $pr[$r->question_id][] = $c;
                        } elseif ($pr[$r->question_id]) { // next multiple answers
                            $pr[$r->question_id][] = $c;
                        } else {
                            $pr[$r->question_id] = $c;
                        }
                    }
                }

                $responses[] = $pr;
            }

            $paginator  = $this->get('knp_paginator');
            $responses = $paginator->paginate(
              $responses, /* ideally query NOT result */
              $page/*page number*/,
              $per_page/*limit per page*/
          );


            return $responses;
        }
    }

    /**
    * @Route("/responses/{questionnaire_id}/{page}/{sort_by}/{sorting}", name="list_responses", requirements={"questionnaire_id"="\d+", "page"="\d+", "sort_by": "[a-zA-Z0-9_]+", "sorting": "asc|desc"})
    */
    public function list_responses($questionnaire_id = 1, $page = 1, $sort_by = 'ts_started', $sorting = 'desc', $include_personal_info=false)
    {
        if (!$this->member_auth(false) && !$this->admin_auth(false)) {
            $this->questionnaire_auth($questionnaire_id, true);
        }

        $this->questionnaire = $this->questionnaire_get($questionnaire_id);

        $questions = $this->questionnaire_questions($questionnaire_id); // load all questions

        foreach ($questions as $q) {
            if ($q->answer_type=='Email') {
                $has_email_field = true;
            }

            if ($q->answer_type=='Include') {
                @include_once($this->conf->base_path.'public_pages/'.$q->question_name);
            }

            if (in_array($q->answer_type, ['Notice','Include','Password'])) {
                continue;
            }
            if (!$include_personal_info && in_array($q->answer_type, ['Email','Phone'])) {
                continue;
            }

            $this->questions[$q->id] = $q;
        }

        $responses = $this->responses_browse($questionnaire_id, $page, $sort_by, $sorting, $has_email_field, $include_personal_info);

        $questionnaires_list = $this->questionnaires();

        return $this->render('admin/table-responses.html.twig', array(
      'cols' => $this->questions,
      'items' => $responses,
      'pagination' => $this->pagination,
      'questionnaire_id' => $questionnaire_id,
      'questionnaire_tile' => $this->questionnaire->questionnaire_title,
      'questionnaires_list' => $questionnaires_list
      ));
    }

    /**
    * @Route("/admin/responses/{questionnaire_id}/{page}/{sort_by}/{sorting}", name="admin_responses", requirements={"questionnaire_id"="\d+", "page"="\d+", "sort_by": "[a-zA-Z0-9_]+", "sorting": "asc|desc"})
    */
    public function admin_responses($questionnaire_id = 1, $page = 1, $sort_by = 'ts_started', $sorting = 'desc')
    {
        return $this->list_responses($questionnaire_id, $page, $sort_by, $sorting, true);
    }
}
