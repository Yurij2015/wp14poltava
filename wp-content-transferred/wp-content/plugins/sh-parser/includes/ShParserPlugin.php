<?php

namespace includes;

use includes\common\ShParserDefaultOption;
use includes\common\ShParserLoader;


class ShParserPlugin
{
    private static $istance = null;

    private function __construct()
    {
        ShParserLoader::getInstance();
    }

    public static function getInstance()
    {
        if (null == self::$istance) {
            self::$istance = new self;
        }
        return self::$istance;
    }

    /**
     * Если не созданные настройки установить по умолчанию
     */
    public function setDefaultOptions()
    {
        if (!get_option(SHPARSER_PLUGIN_OPTION_NAME)) {
            update_option(SHPARSER_PLUGIN_OPTION_NAME, ShParserDefaultOption::getDefaultOptions());
        }
        if (!get_option(SHPARSER_PLUGIN_OPTION_VERSION)) {
            update_option(SHPARSER_PLUGIN_OPTION_VERSION, SHPARSER_PLUGIN_VERSION);
        }
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
        delete_option(SHPARSER_PLUGIN_OPTION_NAME);
        delete_option(SHPARSER_PLUGIN_OPTION_VERSION);
    }
}

ShParserPlugin::getInstance();
