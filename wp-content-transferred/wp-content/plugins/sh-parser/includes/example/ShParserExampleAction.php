<?php

namespace includes\example;

class ShParserExampleAction
{
    public function __construct()
    {

        add_action('my_action', array(&$this, 'myActionFunction'));

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

    public function myActionFunctionAdditionalParameter($data1 = "", $data2 = "", $data3 = "")
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