<?php
// v4.3.1

global $bv;

error_reporting(0);

function adminer_object()
{
    global $bv;

    // required to run any plugin
    include_once $bv->adminer_path."adminer-plugins/plugin.php";

    // autoloader
    foreach (glob($bv->adminer_path."adminer-plugins/*.php") as $filename) {
        include_once "$filename";
    }

    $plugins = array(
    // specify enabled plugins here
    //new AdminerNiceEditor,
    new AdminerFrames,
    new AdminerSlugify
);

    class AdminerSoftware extends AdminerPlugin
    {
        public function name()
        {
            // custom name in title and heading
            return 'App';
        }

        public function login($login, $password)
        {
            // validate user submitted credentials

            return true;
        }

        public function loginForm()
        {
            global $drivers; ?>
<table cellspacing="0">
<tr><th><?php echo lang('System'); ?><td><?php echo html_select("auth[driver]", ['pgsql','mysql'], DRIVER); ?>
<tr><th><?php echo lang('Password'); ?><td><input type="password" name="auth[password]">
</table>
<?php
    echo "<p><input type='submit' value='" . lang('Login') . "'>\n";
            echo checkbox("auth[permanent]", 1, $_COOKIE["adminer_permanent"], lang('Permanent login')) . "\n";
        }

        public function database()
        {
            // database name, will be escaped by Adminer
            global $bv;
            return $_REQUEST['db'] ? $_REQUEST['db'] : $bv->config->db_name;
        }

        public function credentials()
        {
            global $bv;
            // server, username and password for connecting to database
            return array($bv->config->dbcreds['host'], $bv->config->dbcreds['user'], $bv->config->dbcreds['pass']);
        }

        public function tableName($tableStatus)
        {
            return h($tableStatus["Comment"] ? $tableStatus["Comment"] : $tableStatus["Name"]);
        }

        public function tablesPrint($tables)
        {
            echo "<ul id='tables'>\n";
            //print_r($tables);
            foreach ($tables as $table => $tableStatus) {
                $tables_new[$table] = ($tableStatus["Comment"] ? $tableStatus["Comment"] : $table);
            }

            asort($tables_new);

            foreach ($tables_new as $table => $name) {
                echo '<li>';
                //echo '<a href="' . h(ME) . 'select=' . urlencode($table) . '"' . bold($_GET["select"] == $table || $_GET["edit"] == $table, "select") . ">" . lang('select') . "</a> ";
                echo($table==$_GET["select"] ? '<strong>':'');
                echo(support("table") || support("indexes")
                    ? '<a href="' . h(ME)
                    . 'select=' . urlencode($table)
                    . "\">$name</a>"
                    : "<span>$name</span>"
                ) . "\n";
                echo($table==$_GET["select"] ? '</strong>':'');
            }
            echo "</ul>\n";
        }

        public function fieldName($field, $order = 0)
        {
            return h($field["comment"] ? $field["comment"] : $field["field"]);
        }

        public function navigation($missing)
        {

        //if(current_user_is('admin'))

            Adminer::navigation($missing);
        }
    }

    return new AdminerSoftware($plugins);
}

// include_once($bv->adminer_path."editor-en.php");
