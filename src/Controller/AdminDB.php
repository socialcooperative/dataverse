<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

class AdminDB extends DataverseApp
{
    /**
    * @Route("/admin/data", name="admin_data")
    */
    public function data()
    {
        global $bv;

        $this->admin_auth();
        error_reporting(0);

        $bv->base_path = $this->conf->base_path;
        $bv->adminer_path = $this->conf->base_path.'public/admin/';

        require_once($this->conf->base_path.'inc/data.php');
        require_once($bv->adminer_path."editor-en.php");

        exit();
    }

    /**
    * @Route("/admin/db", name="admin_db")
    */
    public function db()
    {
        global $bv;

        $this->admin_auth();

        $bv->base_path = $this->conf->base_path;
        $bv->adminer_path = $this->conf->base_path.'public/admin/';

        require_once($this->conf->base_path.'inc/db.php');
        require_once($bv->adminer_path."adminer-en.php");

        exit();
    }
}
