<?php
/**
 * Created by PhpStorm.
 * User: Yurij
 * Date: 15.02.2017
 * Time: 16:50
 */

namespace includes\controllers\admin\menu;


class ShParserMyPages extends ShParserBaseAdminMenu
{
    public function action()
    {
        // TODO: Implement action() method.
        $plaginPage = add_pages_page(
            __('Sub pages ShParser', SHPARSER_PLUGIN_TEXTDOMAIN),
            __('Sub pages ShParser', SHPARSER_PLUGIN_TEXTDOMAIN),
            'read',
            'sh_parser_sub_pages_menu',
            array(&$this, 'render')
        );
    }

    public function render()
    {
        _e("Hello this page pages", SHPARSER_PLUGIN_TEXTDOMAIN);
    }

    public static function newInstance()
    {
        // TODO: Implement newInstance() method.
        $instance = new self;
        return $instance;
    }

}