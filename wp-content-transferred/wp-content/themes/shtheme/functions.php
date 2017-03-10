<?php
/**
 * Created by PhpStorm.
 * User: Yurij
 * Date: 03.03.2017
 * Time: 1:35
 */
function loadScriptSite()
{

    $version = null;

    wp_register_style(
        'bootstrap',
        get_template_directory_uri() . '/assets/css/bootstrap.css',
        array(),
        $version
    );

    wp_register_style(
        'modern-business',
        get_template_directory_uri() . '/assets/css/modern-business.css',
        array(),
        $version
    );

    wp_register_style(
        'font-awesome',
        get_template_directory_uri() . '/assets/font-awesome/css/font-awesome.css',
        array(),
        $version
    );

    wp_enqueue_style('bootstrap');
    wp_enqueue_style('modern-business');
    wp_enqueue_style('font-awesome');


    wp_deregister_script('jquery');

    wp_register_script(
        'jquery',
        get_template_directory_uri() . '/assets/js/jquery.js',
        array(// 'jquery'
        ),
        $version,
        true
    );

    wp_register_script(
        'bootstrap',
        get_template_directory_uri() . '/assets/js/bootstrap.js',
        array(
            'jquery'
        ),
        $version,
        true
    );

    wp_register_script(
        'contact_me',
        get_template_directory_uri() . '/assets/js/contact_me.js',
        array(
            'jquery'
        ),
        $version,
        true
    );

    wp_register_script(
        'jqBootstrapValidation',
        get_template_directory_uri() . '/assets/js/jqBootstrapValidation.js',
        array(
            'jquery'
        ),
        $version,
        true
    );

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('contact_me');
    wp_enqueue_script('jqBootstrapValidation');

}

add_action('wp_enqueue_scripts', 'loadScriptSite');

function registerNavMenu()
{
    register_nav_menu('footermenu', __('In footer menu', SH_THEME_TEXTDOMAIN));
}

add_action('after_setup_theme', 'registerNavMenu', 100);

define("SH_THEME_TEXTDOMAIN", "shtheme");

function themeLocalization()
{
    load_theme_textdomain(SH_THEME_TEXTDOMAIN, get_template_directory() . '/languages/');
}

add_action('after_setup_theme', 'themeLocalization');

