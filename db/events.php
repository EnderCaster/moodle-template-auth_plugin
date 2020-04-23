<?php
/**
 * Version information
 *
 * @package    auth_{{plugin_name}}
 * @copyright  2020 Shinetech
 */
$observers = [
    [
        'eventname' => '\core\event\user_deleted',
        'callback' => '\auth_{{plugin_name}}\api::user_deleted',
    ],// you can delete records when moodle user deleted
];