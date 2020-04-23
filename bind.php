<?php
/**
 * A page to show confirm dialog
 *
 * @package    auth_{{plugin_name}}
 * @copyright  EnderCaster
 */
require_once('../../config.php');

global $USER;
$context = context_system::instance();
$PAGE->set_url(new moodle_url('/auth/{{plugin_name}}/bind.php'));
$PAGE->set_context($context);
$PAGE->set_pagelayout('login');
echo $OUTPUT->header();
echo $OUTPUT->box_start();
$cancel = new single_button(new moodle_url('/auth/{{plugin_name}}/login.php'), get_string('cancel', 'auth_{{plugin_name}}'), 'get');
$continue = new single_button(new moodle_url('/auth/{{plugin_name}}/login.php'), get_string('confirm', 'auth_{{plugin_name}}'), 'get');
echo $OUTPUT->confirm(get_string('bind_hint', 'auth_{{plugin_name}}'), $continue, $cancel);
echo $OUTPUT->box_end();
// footer have login button, comment it if you don't need it
// echo $OUTPUT->footer();