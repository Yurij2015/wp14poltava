<?php
/**
 * Created by PhpStorm.
 * User: Yurij
 * Date: 16.02.2017
 * Time: 6:32
 */

namespace includes\controllers\admin\menu;


class ShParserUserMenu extends ShParserBaseAdminMenu
{
    public function action()
    {
        // TODO: Implement action() method.
        $plaginPage = add_users_page(
            __('Sub users by ShParser', SHPARSER_PLUGIN_TEXTDOMAIN),
            __('Sub users by ShParser', SHPARSER_PLUGIN_TEXTDOMAIN),
            'read',
            'sh_parser_sub_users_menu',
            array(&$this, 'render')
        );
    }

    public function render()
    {
        _e("Hello this page Users", SHPARSER_PLUGIN_TEXTDOMAIN);
    }

    public static function newInstance()
    {
        // TODO: Implement newInstance() method.
        $instance = new self;
        return $instance;
    }

}