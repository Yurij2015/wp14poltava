<?php

namespace includes\example;

class ShParserExampleAction
{
    public function __construct()
    {
        // Add function to action 'my action'
        add_action('my_action', array(&$this, 'myActionFunction'));
        // Add function to action 'my_hook'
        add_action('my_hook', function () {
            error_log(1);
        });
        add_action('my_hook', function () {
            error_log(2);
        });
        add_action('my_hook', function () {
            error_log(3);
        });
        add_action('my_hook', function () {
            error_log(4);
        }, 15);
        add_action('my_hook', function () {
            error_log(5);
        }, 10);
        add_action('my_hook', function () {
            error_log(6);
        }, 5);

        do_action('my_hook');

        add_action('my_action', array(&$this, 'myActionFunctionAdditionalParameter'), 10, 3);

        add_action('plugins_loaded', function () {
            error_log(__('Hello', SHPARSER_PLUGIN_TEXTDOMAIN));
        }, 100);
    }

    public static function newInstance()
    {
        $instance = new self;
        return $instance;
    }

    /*
     * Action`s function my_action
     */

    public function myActionFunction()
    {
        // in debug.log
        error_log("my_action call");
    }

    public function callMyAction()
    {
        // call action
        do_action('my_action');
    }

    /*
     * Action's function my_action
    */

    public function myActionFunctionAdditionalParametre($data1 = "", $data2 = "", $data3 = "")
    {
        // debug.log
        error_log("my_action call {$data1} {$data2} {$data3}");
    }

    public function callMyActionAdditionalParameter($data1, $data2, $data3)
    {
        // call action
        do_action('my_action', $data1, $data2, $data3);
    }
}