<?php
/**
 * Created by PhpStorm.
 * User: Yurij
 * Date: 16.02.2017
 * Time: 11:02
 */

namespace includes\controllers\admin\menu;


class ShParserMyOptionsMenu extends ShParserBaseAdminMenu
{
    public function action()
    {
        // TODO: Implement action() method.
        $plaginPage = add_options_page(
            __('Sub options by ShParser', SHPARSER_PLUGIN_TEXTDOMAIN),
            __('Sub options by ShParser', SHPARSER_PLUGIN_TEXTDOMAIN),
            'read',
            'sh_parser_sub_options_menu',
            array(&$this, 'render')
        );
    }

    public function render()
    {
        _e("Hello this page Options", SHPARSER_PLUGIN_TEXTDOMAIN);
    }

    public static function newInstance()
    {
        // TODO: Implement newInstance() method.
        $instance = new self;
        return $instance;
    }
}