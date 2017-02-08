<?php

define("SHPARSER_PLUGIN_DIR", plugin_dir_path(__FILE__));
define("SHPARSER_PLUGIN_URL", plugin_dir_url(__FILE__));
define("SHPARSER_PLUGIN_SLUG", preg_replace('/[^\da-zA-Z]/i', '_', basename(SHPARSER_PLUGIN_DIR)));
define("SHPARSER_PLUGIN_TEXTDOMAIN", str_replace('_', '-', SHPARSER_PLUGIN_SLUG));
define("SHPARSER_PLUGIN_OPTION_VERSION", SHPARSER_PLUGIN_SLUG . '_version');
define("SHPARSER_PLUGIN_OPTION_NAME", SHPARSER_PLUGIN_SLUG . '_options');
define("SHPARSER_PLUGIN_AJAX_URL", admin_url('admin-ajax.php'));

if (!function_exists('get_plugins')) {
    require_once ABSPATH . 'wp-admin/includes/plugin.php';
}

$TPOPLUGINS = get_plugin_data(SHPARSER_PLUGIN_DIR.'/'.basename(SHPARSER_PLUGIN_DIR).'.php', false, false);

define("SHPARSER_PLUGIN_VERSION", $TPOPLUGINS['Version']);
define("SHPARSER_PLUGIN_NAME", $TPOPLUGINS['Name']);

define("SHPARSER_DIR_LOCALIZATION", plugin_basename(SHPARSER_PLUGIN_DIR.'languages/'));



