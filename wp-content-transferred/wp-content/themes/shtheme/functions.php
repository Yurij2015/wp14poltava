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
        'font-awesome.min',
        get_template_directory_uri() . '/css/font-awesome.min.css',
        array(),
        $version
    );

    wp_register_style(
        'ie8',
        get_template_directory_uri() . '/css/ie8.css',
        array(),
        $version
    );

    wp_register_style(
        'ie9',
        get_template_directory_uri() . '/css/ie9.css',
        array(),
        $version
    );

    wp_register_style(
        'main',
        get_template_directory_uri() . '/css/main.css',
        array(),
        $version
    );

    wp_enqueue_style('font-awesome.min');
    wp_enqueue_style('ie8');
    wp_enqueue_style('ie9');
    wp_enqueue_style('main');

    wp_register_script(
        'jquery.min',
        get_template_directory_uri() . '/js/jquery.min.js',
        array(
            'jquery'
        ),
        $version,
        true
    );

    wp_register_script(
        'main',
        get_template_directory_uri() . '/js/main.js',
        array(
            'jquery'
        ),
        $version,
        true
    );

    wp_register_script(
        'skel.min',
        get_template_directory_uri() . '/js/skel.min.js',
        array(
            'jquery'
        ),
        $version,
        true
    );

    wp_register_script(
        'util',
        get_template_directory_uri() . '/js/util.js',
        array(
            'jquery'
        ),
        $version,
        true
    );
    wp_enqueue_script('jquery.min');
    wp_enqueue_script('main');
    wp_enqueue_script('skel.min');
    wp_enqueue_script('util');
}
add_action('wp_enqueue_scripts', 'loadScriptSite');





