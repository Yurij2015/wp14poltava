<?php
/**
 * Created by PhpStorm.
 * User: Yurij
 * Date: 16.02.2017
 * Time: 13:22
 */

namespace includes\common;

class ShParserLoaderScript
{
    private static $instance = null;

    private function __construct()
    {
        if (is_admin()) {
            add_action('admin_enqueue_scripts', array(&$this, 'loadScriptAdmin'));
            add_action('admin_head', array(&$this, 'loadHeadScriptAdmin'));
        } else {
            add_action('wp_enqueue_scripts', array(&$this, 'loadScriptSite'));
            add_action('wp_head', array(&$this, 'loadHeadScriptSite'));
            add_action('wp_footer', array(&$this, 'loadFooterScriptSite'));
        }
    }

    public static function getinstance()
    {
        self::$instance = new self;
        return self::$instance;
    }

    public function loadScriptAdmin($hook)
    {
        wp_register_script(
            SHPARSER_PLUGIN_SLUG . '-AdminMain',//$handle
            SHPARSER_PLUGIN_URL . 'assets/admin/js/ShParserAdminMain.js', // $src
            array(
                'jquery'
            ), //$deds
            SHPARSER_PLUGIN_VERSION, //$ver
            true //$$in_footer
        );
        //wp_enqueue_script(SHPARSER_PLUGIN_SLUG . '-AdminMain');


        wp_register_style(
            SHPARSER_PLUGIN_SLUG . '-AdminMain',//$handle
            SHPARSER_PLUGIN_URL . 'assets/admin/css/ShParserAdminMain.css', // $src
            array(), //$deps
            SHPARSER_PLUGIN_VERSION //$ver
        );
        //wp_enqueue_style(SHPARSER_PLUGIN_SLUG . '-AdminMain');


    }

    public function loadHeadScriptAdmin()
    {
    }

    public function loadScriptSite()
    {
    }

    public function loadHeadScriptSite()
    {
    }

    public function loadFooterScriptSite()
    {
    }

}