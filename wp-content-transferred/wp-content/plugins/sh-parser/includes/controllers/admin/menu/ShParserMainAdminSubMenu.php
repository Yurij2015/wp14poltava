<?php
namespace includes\controllers\admin\menu;

class ShParserMainAdminSubMenu extends ShParserBaseAdminMenu
{

    public function action()
    {
        // TODO: Implement action() method.
        $plaginPage = add_submenu_page(
            _x(
                'ShParser Submenu',
                'admin menu page',
                SHPARSER_PLUGIN_TEXTDOMAIN
            ),
            _x(
                'ShParser Submenu',
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
