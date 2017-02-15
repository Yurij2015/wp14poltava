<?php
namespace includes\controllers\admin\menu;

class ShParserMainAdminSubMenu extends ShParserBaseAdminMenu
{

    public function action()
    {
        // TODO: Implement action() method.
        $pluginPage = add_submenu_page(
            SHPARSER_PLUGIN_TEXTDOMAIN,
            _x(
                'ShParser',
                'admin menu page',
                SHPARSER_PLUGIN_TEXTDOMAIN
            ),
            _x(
                'ShParser',
                'admin menu page',
                SHPARSER_PLUGIN_TEXTDOMAIN
            ),
            'manage_options',
            'sh_parser_sub_menu',
            array(&$this, 'render'));
    }

    public function render()
    {
        _e("Welcome to submenu", SHPARSER_PLUGIN_TEXTDOMAIN);
    }

    public static function newInstance()
    {
        $instance = new self;
        return $instance;
    }
}
