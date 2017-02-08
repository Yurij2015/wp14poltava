<?php
namespace includes\example;

class ShParserExampleFilter
{
    public function __construct()
    {
        // Add function to filter
        add_filter('my_filter', array(&$this, 'myFilterFunction'));

        add_filter('my_filter', array(&$this, 'myFilterFunctionAdditionalParameter'), 10, 3); // 3 - count or param
    }

    /*
     * Fisters's function
     * @param $str
     * @param $data1
     * @param $data2
     * @return string
     */

    public function myFilterFunctionAdditionalParameter($str, $data1 = "", $data2 = "")
    {
        $str = "Hello {$str} {$data1} {$data2}";
        return $str;
    }

    public function callMyFilterAdditionalParameter($name, $data1, $data2)
    {
        $name = apply_filters('my_filter', $name, $data1, $data2);
        // in debug.log
        error_log($name);
    }
}