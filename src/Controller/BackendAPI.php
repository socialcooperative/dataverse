<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class BackendAPI extends Backend
{
    /**
    * @Route("/admin/api/members", name="api_members")
    */
    public function members(Request $request)
    {
        $this->admin_auth();

        $status = $_REQUEST['status'] ? $_REQUEST['status'] : 'invite';
        $ret = new class {};

        $this->respondent = $this->a_respondent_by_status($status);

        if (!$this->respondent) {
            $ret->error = "No member found with status: ".$status;
        } else {
            $ret[0] = $this->member_get($this->respondent);
        }

        return $this->json($ret);
    }

    /**
    * @Route("/admin/api/member", methods={"GET"}, name="api_member")
    */
    public function member(Request $request)
    {
        $this->admin_auth();

        $email = $_REQUEST['email'];
        $ret = new class {};

        if ($email) {
            $this->respondent = $this->respondent_find($email);
        }

        if (!$this->respondent) {
            $ret->error = "No such member found";
        } else {
            $ret = $this->member_get($this->respondent);
        }

        return $this->json($ret);
    }

    /**
    * @Route("/admin/api/member", methods={"POST","PUT"}, name="api_member_edit")
    */
    public function member_edit(Request $request)
    {
        $this->admin_auth();

        $ret = $this->member_update();

        return $this->json($ret);
    }
}
