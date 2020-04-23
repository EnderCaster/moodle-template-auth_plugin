<?php
/**
 * A template for login entrance, you can implement your login logic here
 *
 * @package    auth_{{plugin_name}}
 * @copyright  EnderCaster
 */

require_once('../../config.php');

// That means maybe wo have a key1 in request parameters
$optional_p = optional_param("key1", false, PARAM_BOOL);
// That means wo must have a key2 in request parameters, if not there will be a Exception
$required_p = required_param("key2", PARAM_TEXT);
global $USER, $SESSION;
// Example to judge if a logged in user
if($USER->id){
    // user logged in
}else{
    // no user logged in
}

