<?php
/**
 * Created by PhpStorm.
 * User: Yurij
 * Date: 15.02.2017
 * Time: 17:40
 */

namespace includes\controllers\admin\menu;


class ShParserMyPluginsMenu extends ShParserBaseAdminMenu
{
    public function action()
    {
        // TODO: Implement action() method.
        $plaginPage = add_plugins_page(
            __('Sub plugins by ShParser', SHPARSER_PLUGIN_TEXTDOMAIN),
            __('Sub plugins by ShParser', SHPARSER_PLUGIN_TEXTDOMAIN),
            'read',
            'sh_parser_sub_plugins_menu',
            array(&$this, 'render')
        );
    }

    public function render()
    {
        _e("Hello this page Plugins", SHPARSER_PLUGIN_TEXTDOMAIN);
    }

    public static function newInstance()
    {
        // TODO: Implement newInstance() method.
        $instance = new self;
        return $instance;
    }
}