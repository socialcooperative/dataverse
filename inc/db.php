<?php

global $bv;

error_reporting(0);

function adminer_object()
{
    class AdminerSoftware extends Adminer
    {
        public function name()
        {
            // custom name in title and heading
            return 'App';
        }

        public function database()
        {
            // database name, will be escaped by Adminer
            global $bv;
            return $bv->config->db_name;
        }

        public function login($login, $password)
        {
            // validate user submitted credentials

            return true;
        }

        public function credentials()
        {
            global $bv;
            // server, username and password for connecting to database
            return array($bv->config->dbcreds['host'], $bv->config->dbcreds['user'], $bv->config->dbcreds['pass']);
        }

        public function loginForm()
        {
            global $drivers; ?>
<table cellspacing="0">
<tr><th><?php echo lang('System'); ?><td><?php echo html_select("auth[driver]", ['pgsql','mysql','sqlite'], DRIVER); ?>
<tr><th><?php echo lang('Password'); ?><td><input type="password" name="auth[password]">
</table>
<?php
    echo "<p><input type='submit' value='" . lang('Login') . "'>\n";
            echo checkbox("auth[permanent]", 1, $_COOKIE["adminer_permanent"], lang('Permanent login')) . "\n";
        }

        public function databases($flush = true)
        {
            global $bv;
            if (isset($_GET['sqlite'])) {
                return [$bv->base_path.$bv->config->db_path];
            }
            return get_databases($flush);
        }
    }


    return new AdminerSoftware;
}

// include_once($bv->adminer_path."adminer-en.php");
