<?php
/**
 * real auth class
 *
 * @package    auth_{{plugin_name}}
 * @copyright  EnderCaster
 * @see \auth_plugin_base
 */

namespace auth_{{plugin_name}};

use moodle_url;

require_once($CFG->libdir . '/authlib.php');
require_once($CFG->dirroot . '/user/lib.php');
require_once($CFG->dirroot . '/user/profile/lib.php');

class auth extends \auth_plugin_base
{
    /**
     * @var stdClass $userinfo The set of user info returned from the oauth handshake
     */
    private static $userinfo;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->authtype = '{{plugin_name}}';
        $this->config = get_config('auth_{{plugin_name}}');
    }

    /**
     * Returns true if the username and password work or don't exist and false
     * if the user exists and the password is wrong.
     *
     * @param string $username The username
     * @param string $password The password
     * @return bool Authentication success or failure.
     */
    public function user_login($username, $password)
    {
        $cached = $this->get_static_user_info();
        if (empty($cached)) {
            // This means we were called as part of a normal login flow - without using oauth.
            return false;
        }
        //implement your own login way
    }

    /**
     * Get the static cached user info
     * @return stdClass
     */
    private function get_static_user_info()
    {
        return self::$userinfo;
    }

    public function get_from_session($key)
    {
        global $SESSION;
        if (isset($SESSION->auth_{{plugin_name}}) && is_array($SESSION->auth_{{plugin_name}})) {
            return array_key_exists($key, $SESSION->auth_{{plugin_name}}) ? $SESSION->auth_{{plugin_name}}[$key] : "";
        }
        return "";
    }

    public function set_into_session($key, $value)
    {
        global $SESSION;
        $SESSION->auth_{{plugin_name}}[$key] = $value;
    }

    public function clear_cache()
    {
        global $SESSION;
        if (isset($SESSION->auth_{{plugin_name}})) {
            unset($SESSION->auth_{{plugin_name}});
        }
    }

    /**
     * user function, you can add parameters if necessary, after function, system user will login
     */
    public function complete_login(){
        global $DB;
        //TODO change the 
        $user = $DB->get_record_sql("select u.* from {user} as u limit 1");
        if(empty($user)){
            return false;
        }
        complete_user_login($user);
        return true;
    }

    /**
     * this hook will called after authenticated
     * @param object $user
     * @param string $username
     * @param string $password
     * @see /lib/moodlelib.php
     */
    public function user_authenticated_hook(&$user, $username, $password)
    {
    }

    public function obj_to_array($obj)
    {
        return json_decode(json_encode($obj), true);
    }
}