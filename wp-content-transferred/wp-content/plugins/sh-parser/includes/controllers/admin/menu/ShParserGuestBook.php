<?php
/**
 * Created by PhpStorm.
 * User: Yurij
 * Date: 28.02.2017
 * Time: 22:01
 */

namespace includes\controllers\admin\menu;


class ShParserGuestBook extends ShParserBaseAdminMenu
{

    public function action()
    {
        // TODO: Implement action() method.
        $pluginPage = add_submenu_page(
            SHPARSER_PLUGIN_TEXTDOMAIN,
            _x(
                'GuestBook',
                'admin menu page',
                SHPARSER_PLUGIN_TEXTDOMAIN
            ),
            _x(
                'GuestBook',
                'admin menu page',
                SHPARSER_PLUGIN_TEXTDOMAIN
            ),
            'manage_options',
            sh_parser_control_guest_book_menu,
            array(&$this, 'render')
        );
    }

    public function render()
    {
        // TODO: Implement render() method.
        $data = array();
        $pathView = SHPARSER_PLUGIN_DIR . "/includes/views/admin/menu/ShParserGuestBook.view.php";
        $this->loadView($pathView, 0, $data);

    }

    public static function newInstance()
    {
        // TODO: Implement newInstance() method.
        $instance = new self;
        return $instance;
    }

}