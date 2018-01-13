<?php
namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

use RedBeanPHP\R;

class DataverseApp extends Controller
{
    public function __construct(LoggerInterface $logger, SessionInterface $session)
    {

            // parent::__construct();

        $this->logger = $logger;
        $this->session = $session;

        $base_path = dirname(dirname(dirname(__FILE__))).'/';

        global $bv;
        include_once($base_path.'custom/secrets.php');
        // include_once($this->conf->base_path.'src/misc.php');

        $this->conf = $bv->config;

        if (!$this->conf->base_path) {
            $this->conf->base_path = $base_path;
        }

        if ($this->conf->db_type=='mysql') {
            R::setup('mysql:host='.$this->conf->dbcreds['host'].';dbname='.$this->conf->db_name, $this->conf->dbcreds['user'], $this->conf->dbcreds['pass']);
        } elseif ($this->conf->db_type=='postgres') { //postgresql
            R::setup('pgsql:host='.$this->conf->dbcreds['host'].';dbname='.$this->conf->db_name, $this->conf->dbcreds['user'], $this->conf->dbcreds['pass']);
        } else { // fallback to sqlite
            if (!$this->conf->db_path) {
                $this->conf->db_path = 'custom/db.txt';
            }
            R::setup('sqlite:'.$this->conf->base_path.$this->conf->db_path, $this->conf->dbcreds['user'], $this->conf->dbcreds['pass']);
        } //sqlite


        $this->db_tables = new class {
        };
        $this->db_tables->respondent = 'respondent';
        $this->db_tables->response = 'response';
        $this->db_tables->answer = 'answer';
    }


    public function get_include($file)
    {
        ob_start();
        include($this->conf->base_path.$file);
        return ob_get_clean();
    }


    /**
     * Sanitizes a username, stripping out unsafe characters.
     *
     * Removes tags, octets, entities, and if strict is enabled, will only keep
     * alphanumeric, _, space, ., -, @. After sanitizing, it passes the username,
     * raw username (the username in the parameter), and the value of $strict as
     * parameters for the 'sanitize_user' filter.
     *
     * @since 2.0.0
     *
     * @param string $username The username to be sanitized.
     * @param bool $strict If set limits $username to specific characters. Default false.
     * @return string The sanitized username
     */
    public function sanitize_user($username, $no_spaces = true, $lower=false)
    {
        $username = strip_tags($username);
        if ($lower) {
            $username = strtolower($username);
        }
        // Kill octets
        $username = preg_replace('|%([a-fA-F0-9][a-fA-F0-9])|', '', $username);
        $username = preg_replace('/&.+?;/', '', $username); // Kill entities

        $username = str_replace('-', '_', $username);

        // reduce to ASCII subset for max portability.
        $username = preg_replace('|[^a-z0-9 _]|i', '', $username);

        // Consolidate contiguous whitespace
        $username = preg_replace('|\s+|', ($no_spaces? '_': ' '), $username);
        if ($no_spaces) {
            $username = str_replace(' ', '_', $username);
        }

        $username = trim($username, ' _');
        //echo $username;

        return $username;
    }

    public function admin_auth($blocking = true, $token_type='admin_token')
    {
        $this->user_token = $_GET['token'] ? $_GET['token'] : $this->session->get('user_token'); // get from session

        if ($this->user_token !=$this->conf->{$token_type}) {
            if ($blocking) {
                exit("Unauthorized!");
            } // no good
            else {
                return false;
            }
        }

        $this->session->set('user_token', $this->user_token); // OK, save as session

        return true; // OK
    }

    public function member_auth($blocking = true)
    {
        return $this->admin_auth($blocking, 'members_token');
    }
}
