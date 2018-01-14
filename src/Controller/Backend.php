<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
// use Symfony\Component\HttpFoundation\Request;
use RedBeanPHP\R;

class Backend extends Frontend
{

  /**
  * @Route("/admin/members/{page}/{sort_by}/{sorting}", name="admin_members")
  */
    public function admin_members($page, $sort_by, $sorting)
    {
        global $paginator;

        $this->admin_auth();

        $people = $this->respondents_browse($page, $sort_by, $sorting);

        // if ($people) {
        //     $pagination = new Pagination($paginator, $app['url_generator'], 'admin/members', $sort_by, $sorting);
        // }

        return $this->render('admin/table-admin.html.twig', array(
    'items' => $people,
    'pagination' => $pagination
));
    }

    /**
    * @Route("/browse/{page}/{sort_by}/{sorting}", name="browse_members")
    */
    public function browse_members($page, $sort_by, $sorting)
    {
      global $paginator;

        if (!$this->member_auth(false)) {
            $this->admin_auth(true);
        }

        $people = $this->respondents_browse($page, $sort_by, $sorting);

        // if ($people) {
        //     $pagination = new Pagination($paginator, $app['url_generator'], 'browse', $sort_by, $sorting);
        // }

        return $this->render('admin/table-members.html.twig', array(
      'items' => $people,
      'pagination' => $pagination
  ));
    }

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
            $step->order = $step_order ? $step_order : $previous_step->step_order+1;

            R::store($step);
        }
    }

    public function member_get($u)
    {
        $u = new class {
        };

        $custom_member_inc = $this->conf->base_path."custom/config_invite.php";

        if (file_exists($custom_member_inc)) {
            include_once($custom_member_inc);
            if (function_exists('username_by_respondent_id')) {
                $u->username = username_by_respondent_id($u->id);
            }
        }

        if (!$u->username) {
            $u->error .= "Could not find the username. ";
        }

        // $u->username = $username;
        // $u->email = $this->respondent->email;
        // $u->status = $this->respondent->status;

        if ($u->status=="invite") {
            $pw = bin2hex(openssl_random_pseudo_bytes(4));
            $u->password_random = $pw;
        }

        return $u;
    }

    public function member_update()
    {
        $email = $_REQUEST['email'];
        $status = $_REQUEST['status'];
        $ret = new class {
        };

        if ($email) {
            $this->respondent = $this->respondent_find($email);
        }

        $ret = $this->respondent;

        if (!$this->respondent) {
            $ret->error = "No such member found. ";
        } elseif ($status) { // update status

            if ($status=='created') {
                $ret->account_email_sent = false;

                $pw = $_REQUEST['password'];

                $custom_member_inc = $this->conf->base_path."custom/config_invite.php";

                if (file_exists($custom_member_inc)) {
                    include_once($custom_member_inc);
                    if (function_exists('username_by_respondent_id')) {
                        $username = username_by_respondent_id($this->respondent->id);
                    }
                }

                if (!$username) {
                    $ret->error .= "Could not find the username. ";
                }

                if ($pw && $username) {
                    if (function_exists('send_mastodon_account_email') && send_mastodon_account_email($email, $username, $pw)) {
                        $ret->account_email_sent = true;
                    } else {
                        $ret->error .= "Error trying to send confirmation email. ";
                    }
                } else {
                    $ret->error .= "The confirmation email could not be sent. (Make sure you include the new account's password in the request). ";
                }
            }

            $this->respondent->status = $status;
            $ret->updated = R::store($this->respondent);
        }

        return $ret;
    }

    public function respondents_browse($page, $sort_by, $sorting)
    {
        global $paginator;

        $this->questionnaire_id = $_GET['questionnaire'] ? $_GET['questionnaire'] : $this->session->get('questionnaire'); // get from session

        if (!$this->questionnaire_id) {
            $this->questionnaire_id = 2;
        }

        // R::debug();

        $count = (int) R::count('respondent', ' questionnaire_id = ? AND email IS NOT NULL ', [ $this->questionnaire_id ]);


        if ($count <1) {
            return [];
        }

        $this->session->set('questionnaire', $this->questionnaire_id); // save as session

        // $paginator =  $app['paginator']($count, $page);

        $limits = ($this->conf->db_type == 'postgres' ? ' LIMIT ? OFFSET ? ' : ' LIMIT ? , ? ');

        $params = [ $this->questionnaire_id, 0, 100 ];
        // if ($this->conf->db_type == 'postgres') { // TODO
        //     $params = [ $this->questionnaire_id, $paginator->getPerPage(), $paginator->getStartIndex() ];
        // } else {
        //     $params = [ $this->questionnaire_id, $paginator->getStartIndex(), $paginator->getPerPage() ];
        // }

        if ($count) {
            $people = R::find('respondent', " questionnaire_id = ? AND email IS NOT NULL
  ORDER BY $sort_by $sorting ".$limits, $params);
        }

        foreach ($people as $p) {
            $responses = R::find('response', ' respondent_id = ?
		ORDER BY response_ts ASC', [ $p->id ]);

            foreach ($responses as $r) {
                echo '<p>';
                $c = $r->the_var ? $r->the_var : $r->answer->answer;

                $f = $r->question->question_name;

                if ($f) {
                    if ($f !='username' && $p->{$f} && $p->{$f} !=$c) {
                        $p->{$f} .= ' ;<br> '  . $c;
                    } else {
                        $p->{$f} = $c;
                    }
                }

                unset($f, $c, $q_ok, $qid);
            }

            if ($p->mastodon_id==1) {
                $p->status = 'probation';
            }

            if ($p->status=='probation') {
                $p->status_class = 'info';
            } elseif ($p->status=='invite') {
                $p->status_class = 'warning';
            } elseif ($p->status=='full') {
                $p->status_class = 'success';
            }
        }
        return $people;
    }
}
