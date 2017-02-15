<?php
/**
 * Created by PhpStorm.
 * User: Yurij
 * Date: 15.02.2017
 * Time: 2:12
 */

namespace includes\controllers\admin\menu;


class ShParserMyDashboard extends ShParserBaseAdminMenu
{
    public function action()
    {
        // TODO: Implement action() method.
        $pluginPage = add_dashboard_page(
            __('ShParser in dashboard ', SHPARSER_PLUGIN_TEXTDOMAIN),
            __('ShParser in dashboard', SHPARSER_PLUGIN_TEXTDOMAIN),
            'read',
            'shparser_control_sub_dashboard_menu',
            array(&$this, 'render')
        );
    }

    public function render()
    {
        // TODO: Implement render() method.
        _e("Hello, this page dashboards", SHPARSER_PLUGIN_TEXTDOMAIN);
    }

    public static function newInstance()
    {
        // TODO: Implement newInstance() method.
        $instance = new self;
        return $instance;
    }

}