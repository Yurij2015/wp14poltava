<?php

namespace includes;
class ShParserPlugin
{
    private static $istance = null;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (null == self::$istance) {
            self::$istance = new self;
        }
        return self::$istance;
    }

    static public function activation()
    {
        // debug.log
        error_log('plugin ' . SHPARSER_PLUGIN_NAME . ' activation');
    }

    static public function deactivation()
    {
        // debug.log
        error_log('plugin ' . SHPARSER_PLUGIN_NAME . ' deactivation');
    }
}

ShParserPlugin::getInstance();
