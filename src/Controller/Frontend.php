<?php
namespace App\Controller;

use RedBeanPHP\R;

class Frontend extends App
{

    public function field_params($params=[])
    {
        return array_merge($this->field_params, ['label' => $this->field_label, 'attr' => $this->attr, 'data' => $this->field_value], $params);
    }

    public function respondent_questions_responses_save($data)
    { // save object in DB, with support for many to many for items with array of data

        //$this->response = R::dispense( $this->db_tables->response ); // init response

        $this->logger->info('respondent_questions_responses_save()', [$data, $this->questions_by_field]);

        foreach ($data as $key => $value) {
            // var_dump($key , $value, $this->questions_by_field[$key]->question_text);

            if ($this->questions_by_field[$key]) { // to handle multiple questions on one screen
                $this->question = $this->questions_by_field[$key];
            }

            $this->respondent_question_responses_save($key, $value, $data);
        }
        // exit();
    }

    public function respondent_question_responses_save($key, $value, $data)
    { // save object in DB, with support for many to many for items with array of data


        $this->field_name = ($this->question->question_name ? $this->question->question_name : $this->question->id);
        $this->answer_type = ($this->question->answer_type);

        if ($this->answer_type=='Sortable') { // special case when dealing with an ajax list-sorting
            $ord=0;

            if (is_array($value)) {
                foreach ($value as $so) {
                    //print_r($so);
                    if ($so->id) {
                        $answer = answer_prepare($so->id, true);

                        if ($answer) {
                            if ($ord>0) {
                                unset($this->response);
                            }  // create an additional response row

                            $respond[$this->col_prefix.'Num'] = $ord;

                            $response_ids[] = answer_response_save($answer, $respond);

                            $ord++;
                        }
                    }
                }
                exit('sorted '.$ord);
            } else {
                return true;
            }
        } elseif ($key == $this->field_name) { // dealing with the response to current question

            // defaults:
            $try_by_id=false;
            unset($col_name);

            if ($value) {
                if (in_array($this->answer_type, ['UploadImage','UploadDoc','UploadFile'])) {
                    $dir = $this->conf->base_path.'custom/uploads';
                    $file = $value;

                    // compute a random name and try to guess the extension (more secure)
                    $extension = $file->guessExtension();
                    if (!$extension) {
                        // extension cannot be guessed
                        $extension = 'bin';
                    }

                    $filename = $this->respondent->id.'_'.rand(1, 99999).'.'.$extension;

                    $file->move($dir, $filename);

                    $value = $filename;
                    $col_name = 'Var';
                } elseif ($this->answer_type=='Email') { // save email in main 'respondent' table
                    $this->respondent->email = $value;
                    R::store($this->respondent);
                    $col_name = 'Var';
                } elseif ($this->answer_type=='MapLocation') {
                    $col_name = 'Point';
                    $geo_col = $this->db_tables->response.'.'.$this->col_prefix.'_'.'point';
                    // R::bindFunc('read', $geo_col, 'asText'); // TODO
                    R::bindFunc('write', $geo_col, 'GeomFromText');
                    $point_num = str_replace(',', ' ', $value);
                    $value = "POINT($point_num)";
                } elseif ($this->answer_type=='Currency') {
                    $this->currency_set($value); // save selected currency in session
                } elseif (in_array($this->answer_type, ['MultipleChoices','Choice','Dropdown'])) { // form can submit IDs of answers rather than contents
                    $try_by_id=true;
                } elseif ($value instanceof DateTime || is_a($value, 'DateTime')) { // Date, DateTime, or Time
                    $date = $value->format('Y-m-d');
                    $time = $value->format('H:i:s');
                    if ($date=='1970-01-01') {
                        $col_name = 'Time';
                        $value = $time;
                    } elseif ($time=='00:00:00') {
                        $col_name = 'Date';
                        $value = $date;
                    } else {
                        $col_name = 'DateTime';
                        $value = $value->format('Y-m-d H:i:s');
                    }
                } elseif (in_array($this->answer_type, ['Phone','LongText'])) {
                    $col_name = 'Var';
                } elseif ($this->answer_type=='Password') {
                    $col_name = 'Var';
                    // TODO
                } elseif (is_numeric($value)) {
                    $col_name = 'Num';
                }

                if ($col_name && $this->col_prefix) {
                    $col_name = $this->col_prefix.$col_name;
                }

                // var_dump("<p>", $col_name, $this->answer_type, $try_by_id);

                if ($this->answer_type=='Price') { // both number & currency

                    $this->currency_get(); // load existing cookie
                    if ($data['currency']) {
                        $this->currency_set($data['currency']);
                    } // set new cookie if selected

                    $respond[$col_name] = $value; // Price amount

                    $answer = $this->answer_prepare($this->currency); // get currency ID

                    $response_ids[] = $this->answer_response_save($answer, $respond); // save Price & currency ID

                    $this->response_save_custom($value); // amount

                    $this->response_save_custom($this->currency, 'currency'); // currency code
                } elseif ($col_name && !$try_by_id) { // simply store in appropriate column of response table

                    $respond[$col_name] = $value; // store

                    $response_ids[] = $this->response_save($respond);

                    $this->response_save_custom($value);
                } elseif (is_array($value)) { // store (multiple answers) in answer table

                    $try_by_id=true;
                    $multii=0;

                    foreach ($value as $linked_value) {
                        if ($linked_value) {
                            $answer = $this->answer_prepare($linked_value, $try_by_id);

                            if ($answer) {
                                if ($multii>0) {
                                    unset($this->response);
                                }  // so an additional response row gets created

                                $response_ids[] = $this->answer_response_save($answer);

                                $answers[] = $answer;

                                $multii++;
                            }
                        }
                    }

                    $this->response_save_custom($answers);
                } else { // store (single answer) in answer table

                    if ($value) {
                        $answer = $this->answer_prepare($value, $try_by_id);
                    }

                    if ($answer) {
                        $response_ids[] = $this->answer_response_save($answer);
                        $this->response_save_custom($answer);
                    }
                }
            } // end if value
        } elseif ($this->answer_type=='Price' && $key=='currency') {

            // already dealt with above
        } elseif ($value) { // other regular field

            $respond[$key] = $value; // store
            $response_ids[] = $this->response_save($respond);
            //response_save_custom($value);
        }

        // exit();
        return $response_ids;
    }


    public function answer_prepare($value, $try_by_id=false)
    {
        if ($try_by_id) {
            $answer = $this->answer_get($value);
        } // find pre-existing answer by ID

        if (!$answer->id) {
            $answer = $this->answer_find($value); // find pre-existing answer by content

            //print_r($value, $answer);

            if (!$answer->id) { // create new answer

                $answer = R::dispense('answer');

                $answer->answer = $value;
                $answer->ts_added = R::isoDateTime();
                if ($this->respondent) {
                    $answer->by_respondent = $this->respondent;
                }

                R::store($answer);
            }
        }

        return $answer;
    }

    public function answer_response_save($answer, $respond=[])
    {
        $respond['answer'] = $answer; // store relation

        return $this->response_save($respond);
    }

    public function response_save($respond)
    {
        try {
            if ($respond['answer']) {
                $this->logger->info('modify past answer:', [$respond]);

                $find = [ 'respondent_id' => $this->respondent->id, 'question_id' => $this->question->id, 'answer_id' => $respond['answer']->id ];
                $this->response = R::findOrCreate($this->db_tables->response, $find);
            } else {
                $this->logger->info('prepare for new response:', [$respond]);
                $this->response = R::dispense($this->db_tables->response);
            }

            $this->response->respondent = $this->respondent; // ownership
            $this->response->question = $this->question; // link to question

            $this->response->response_ts = R::isoDateTime();

            $this->response->import($respond);

            //$this->response->setMeta("buildcommand.unique", array(array('respondent', 'question', 'answer')));

            $id = R::store($this->response); // save

            unset($this->response);
            //exit($id);
            return $id;
        } catch (Exception $e) {
            $this->logger->error('Could not save a response (probably duplicate', [$e]);
            // TODO
        }
    }

    public function response_save_custom($data, $custom_field_name=false)
    {
        try {
            return; // TODO! need to figure out respondent as unique ID

            if ($data && $this->questionnaire->questionnaire_name && ($custom_field_name || $this->field_name)) { // also save to dedicated table for current questionnaire

                $this->item = $this->data_by_respondent($this->questionnaire->questionnaire_name, $this->respondent->id);
                //var_dump($this->item);

                //			$find_t = [ 'respondent' => $this->respondent ];
                //			$this->item = R::findOrCreate($this->questionnaire->questionnaire_name, $find_t);

                $data_a[($custom_field_name ? $custom_field_name : $this->field_name)] = $data;
                $data_a['respondent'] = $this->respondent;
                $data_a['updated_ts'] = $this->response->response_ts;

                return $this->item_save($this->questionnaire->questionnaire_name, $data_a, 'answer');
            }

            //exit($id);
            return $id;
        } catch (Exception $e) {
            $this->logger->error('Could not save a response (probably duplicate', [$e]);
            // TODO
        }
    }

    public function currency_get()
    {
        $this->currency = $this->session->get('currency');
        return $this->currency;
    }

    public function currency_set($currency)
    {
        if ($currency) {
            $this->currency = $currency;
            $this->session->set('currency', $currency); // save
        }
    }

    public function questionnaires()
    {
        return R::find('questionnaire');
    }

    public function questionnaire_get($id)
    {
        return $this->data_by_id('questionnaire', $id);
    }

    public function questionnaire_questions($id)
    {
        return R::find('question', ' questionnaire_id = ? ORDER BY id ASC ', [ $id ]);
    }

    public function question_get($id)
    {
        return $this->data_by_id('question', $id);
    }

    public function respondent_get($id)
    {
        return $this->data_by_id($this->db_tables->respondent, $id);
    }

    public function respondent_find($val, $field='email')
    {
        return R::findOne($this->db_tables->respondent, $field.' = ? ', [ $val ]);
    }

    public function answer_get($id)
    {
        return $this->data_by_id('answer', $id);
    }

    public function answer_find($value)
    {
        return R::findOne('answer', ' answer LIKE ? ', [ $value ]);
    }

    public function data_by_respondent($table, $respondent_id)
    {
        return R::findOne($table, ' respondent_id = ? ORDER BY response_ts DESC ', [ $respondent_id ]);
    }

    public function response_by_question_id($question_id, $respondent_id)
    {
        $geo_col = $this->db_tables->response.'.'.$this->col_prefix.'_'.'point';
        // R::bindFunc('read', $geo_col, 'asText'); // TODO
        return R::findOne($this->db_tables->response, ' question_id = ? AND respondent_id = ? ORDER BY response_ts DESC ', [ $question_id, $respondent_id ]);
    }

    public function respondents_by_status($status)
    {
        return R::find($this->db_tables->respondent, ' status = ? ', [ $status ]);
    }

    public function a_respondent_by_status($status)
    {
        return R::findOne($this->db_tables->respondent, ' status = ? ', [ $status ]);
    }

    public function questionnaire_steps($id)
    {
        return R::find('step', 'questionnaire_id = ? ORDER BY step ASC, step_order ASC ', [ $id ]);
    }

    public function questionnaire_step($step)
    {
        return R::find('step', 'questionnaire_id = ? AND step = ? ORDER BY step_order ASC', [$this->questionnaire->id, $step]);
    }

    public function questionnaire_next_step($step)
    {
        return R::findOne('step', 'questionnaire_id = ? AND step > ? LIMIT 1 ', [$this->questionnaire->id, $step]);
    }

    public function questionnaire_last_step()
    {
        return R::findOne('step', 'questionnaire_id = ? ORDER BY step DESC, step_order DESC LIMIT 1 ', [$this->questionnaire->id]);
    }

    public function step_get($id)
    {
        return $this->data_by_id('step', $id);
    }

    public function steps_by_question_id($id)
    {
        return R::find('step', ' question_id = ? ', [ $id ]);
    }

    public function username_by_respondent_id($respondent_id)
    { // get username
        $r = $this->response_by_question_id($this->conf->question_id_username, $respondent_id);
        // var_dump($this->conf->question_id_username, $respondent_id, $r);
        return $r->the_var ? $r->the_var : $r->answer->answer;
    }
}
