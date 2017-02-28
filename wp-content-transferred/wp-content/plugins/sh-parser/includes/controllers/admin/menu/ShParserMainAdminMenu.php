<?php

namespace includes\controllers\admin\menu;

use includes\common\ShParserRequestApi;
use includes\models\admin\menu\ShParserMainAdminMenuModel;

class ShParserMainAdminMenu extends ShParserBaseAdminMenu
{
    public $model;
    public function __construct()
    {
        parent::__construct();
        $this->model = ShParserMainAdminMenuModel::newInstance();
    }

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
//        echo "<br>";
//        $requestAPI = ShParserRequestApi::getInstance();
//        echo "<pre>";
//        var_dump($requestAPI->getUser());
//        echo "</pre>";
//        $user = $requestAPI->getUser();
//        error_log('$requestAPI');
//
//        echo($user->response[0]->id);
//        echo "<br>";
//        echo($user->response[0]->bdate);
//        echo "<br>";
//        echo($user->response[0]->first_name);
//        echo "<br>";
//        echo($user->response[0]->last_name);

        $pathView = SHPARSER_PLUGIN_DIR . "includes/views/admin/menu/ShParserMainAdminMenu.view.php";
        $this->loadView($pathView);

    }

    public static function newInstance()
    {
        // TODO: Implement newInstance() method.
        $instance = new self;
        return $instance;
    }
}
