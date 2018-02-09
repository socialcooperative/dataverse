<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class API extends Admin
{
    /**
    * @Route("/api/respondents", name="api_respondents")
    */
    public function api_respondents()
    {
        $this->admin_auth();

        $status = $_REQUEST['status'] ? $_REQUEST['status'] : 'invite';
        $ret = new class {
        };

        $respondents = $this->respondents_by_status($status);

        if (!$respondents) {
            $ret->error = "No respondents found with status: ".$status;
        } else {
            $ret->api_description = "Respondents with status: ".$status;
            foreach ($respondents as $respondent) {
                $ret->members[] = $this->member_get($respondent);
            }
        }

        return $this->json($ret);
    }


    public function respondent_lookup($lookup)
    {

        $ret = new class {
        };

        if (strpos($lookup, '@')) { // find by email

            $this->respondent = $this->respondent_find($lookup);
        } elseif (is_numeric($lookup)) { // find by respondent ID

            $this->respondent = $this->respondent_get($lookup);
        }
        // elseif($this->conf->question_id_username) { // TODO find by username
        // }

        if (!$this->respondent) {
            $ret->error = "No such member found";
        } else {
            $ret->member = $this->member_get($this->respondent);
        }

        return $ret;
    }
    /**
    * @Route("/api/respondent/{lookup}", methods={"GET"}, name="api_respondent")
    */
    public function api_respondent($lookup, Request $request)
    {
        $this->admin_auth();

        return $this->json($this->respondent_lookup($lookup));
    }

    /**
    * @Route("/api/respondent/{lookup}", methods={"POST","PUT"}, name="api_respondent_edit")
    */
    public function api_respondent_edit($lookup)
    {
        $this->admin_auth();

        $this->respondent = $this->respondent_lookup($lookup);

        $ret = $this->member_update($this->respondent);

        return $this->json($ret);
    }
}
