<?php
/**
 * Created by PhpStorm.
 * User: Yurij
 * Date: 16.02.2017
 * Time: 10:28
 */

namespace includes\controllers\admin\menu;


class ShParserMyToolsMenu extends ShParserBaseAdminMenu
{
    public function action()
    {
        // TODO: Implement action() method.
        $plaginPage = add_management_page(
            __('Sub tools by ShParser', SHPARSER_PLUGIN_TEXTDOMAIN),
            __('Sub tools by ShParser', SHPARSER_PLUGIN_TEXTDOMAIN),
            'read',
            'sh_parser_sub_tools_menu',
            array(&$this, 'render')
        );
    }

    public function render()
    {
        _e("Hello this page Tools", SHPARSER_PLUGIN_TEXTDOMAIN);
    }

    public static function newInstance()
    {
        // TODO: Implement newInstance() method.
        $instance = new self;
        return $instance;
    }
}