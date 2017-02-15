<?php
/**
 * Created by PhpStorm.
 * User: Yurij
 * Date: 15.02.2017
 * Time: 15:58
 */

namespace includes\controllers\admin\menu;


class ShParserMyPost extends ShParserBaseAdminMenu
{
    public function action()
    {
        // TODO: Implement action() method.
        $plaginPage = add_posts_page(
            __('Sub posts ShParser', SHPARSER_PLUGIN_TEXTDOMAIN),
            __('Sub posts ShParser', SHPARSER_PLUGIN_TEXTDOMAIN),
            'read',
            'sh_parser_sub_posts_menu',
            array(&$this, 'render')
        );
    }

    public function render()
    {
        _e("Hello this page posts", SHPARSER_PLUGIN_TEXTDOMAIN);
    }

    public static function newInstance()
    {
        // TODO: Implement newInstance() method.
        $instance = new self;
        return $instance;
    }
}