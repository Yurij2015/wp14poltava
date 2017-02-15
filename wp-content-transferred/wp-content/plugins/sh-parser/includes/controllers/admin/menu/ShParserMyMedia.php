<?php
/**
 * Created by PhpStorm.
 * User: Yurij
 * Date: 15.02.2017
 * Time: 16:33
 */

namespace includes\controllers\admin\menu;


class ShParserMyMedia extends ShParserBaseAdminMenu
{
    public function action()
    {
        // TODO: Implement action() method.
        $pluginPage = add_media_page(
            __('Sub media ShParser', SHPARSER_PLUGIN_TEXTDOMAIN),
            __('Sub media ShParser', SHPARSER_PLUGIN_TEXTDOMAIN),
            'read',
            'sh_parser_sub_media_menu',
            array(&$this, 'render')
        );
    }

    public function render()
    {
        // TODO: Implement render() method.
        _e("Hello this page media", SHPARSER_PLUGIN_TEXTDOMAIN);
    }

    public static function newInstance()
    {
        // TODO: Implement newInstance() method.
        $instance = new self;
        return $instance;
    }
}