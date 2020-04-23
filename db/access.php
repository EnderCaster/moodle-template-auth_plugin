<?php
/**
 * Set rights here
 *
 * @package    auth_{{plugin_name}}
 * @copyright  EnderCaster
 */

$capabilities = [
    'auth/{{plugin_name}}:managedeskey' => array(
        'captype' => 'write',
        'contextlevel' => CONTEXT_USER,
        'archetypes' => array(
            'user' => CAP_ALLOW
        )
    ),
];
