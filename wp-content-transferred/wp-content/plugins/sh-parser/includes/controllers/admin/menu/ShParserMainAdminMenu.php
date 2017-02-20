<?php

namespace includes\controllers\admin\menu;

use includes\common\ShParserRequestApi;

class ShParserMainAdminMenu extends ShParserBaseAdminMenu
{
    public function action()
    {
        // TODO: Implement action() method.
        /**
         * add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
         *
         */
        $plaginPage = add_menu_page(
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
            SHPARSER_PLUGIN_TEXTDOMAIN,
            array(&$this, 'render'),
            SHPARSER_PLUGIN_URL . 'assets/images/main-menu.png'
        );
    }

    /**
     * Метод отвечающий за контент страницы
     */
    public function render()
    {
        // TODO: Implement render() method.
        _e("Hello world, this is ShParser", SHPARSER_PLUGIN_TEXTDOMAIN);
        echo "<br>";
        $requestAPI = ShParserRequestApi::getInstance();
        var_dump($requestAPI->getUser());

    }

    public static function newInstance()
    {
        // TODO: Implement newInstance() method.
        $instance = new self;
        return $instance;
    }
}
