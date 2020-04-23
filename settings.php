<?php
/**
 * A seting config template
 *
 * @package    auth_{{plugin_name}}
 * @copyright  EnderCaster
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
    // add your plugin settings here
    $settings->add(new admin_setting_heading('auth_{{plugin_name}}/pluginname', ''));
    // Example for add a setting field
    $settings->add(new admin_setting_configtext('auth_{{plugin_name}}/encrypt_key', "Encrypt Key", "Encrypt key using to encrypt/decrypt", ""), PARAM_TEXT);
}