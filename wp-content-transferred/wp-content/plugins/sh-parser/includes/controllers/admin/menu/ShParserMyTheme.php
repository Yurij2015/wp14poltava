<?php
/**
 * Created by PhpStorm.
 * User: Yurij
 * Date: 15.02.2017
 * Time: 17:24
 */

namespace includes\controllers\admin\menu;


class ShParserMyTheme extends ShParserBaseAdminMenu
{

    public function action()
    {
        // TODO: Implement action() method.
        $plaginPage = add_theme_page(
            __('Sub theme by ShParser', SHPARSER_PLUGIN_TEXTDOMAIN),
            __('Sub theme by ShParser', SHPARSER_PLUGIN_TEXTDOMAIN),
            'read',
            'sh_parser_sub_comments_menu',
            array(&$this, 'render')
        );
    }

    public function render()
    {
        _e("Hello this page comments", SHPARSER_PLUGIN_TEXTDOMAIN);
    }

    public static function newInstance()
    {
        // TODO: Implement newInstance() method.
        $instance = new self;
        return $instance;
    }

}