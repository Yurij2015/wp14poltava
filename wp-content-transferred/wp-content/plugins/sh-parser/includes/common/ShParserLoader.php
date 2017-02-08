<?php

namespace includes\common;

use includes\example\ShParserExampleAction;
use includes\example\ShParserExampleFilter;

class ShParserLoader
{
    private static $instance = null;

    private function __construct()
    {
        if (is_admin()) {
            $this->admin();
        } else {
            $this->site();
        }
        $this->all();
    }

    public static function getInstance()
    {
        if (null == self::$instance) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function admin()
    {

    }

    public function site()
    {

    }

    public function all()
    {
        ShParserLocalization::getInstance();
        $shParserExampleAction = ShParserExampleAction::newInstance();
    }

}