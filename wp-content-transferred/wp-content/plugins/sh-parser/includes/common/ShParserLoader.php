<?php

namespace includes\common;

use includes\controllers\admin\menu\ShParserMainAdminMenu;
use includes\controllers\admin\menu\ShParserMainAdminSubMenu;
use includes\controllers\admin\menu\ShParserMyDashboard;
use includes\controllers\admin\menu\ShParserMyPost;
use includes\controllers\admin\menu\ShParserMyMedia;
use includes\controllers\admin\menu\ShParserMyPages;
use includes\controllers\admin\menu\ShParserComments;

use includes\example\ShParserExampleAction;

class ShParserLoader
{
    private static $instance = null;

    private function __construct()
    {
        if (is_admin()) {
            $this->admin();
        } else {
            $this->site();
        }
        $this->all();
    }

    public static function getInstance()
    {
        if (null == self::$instance) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function admin()
    {
        ShParserMainAdminMenu::newInstance();
        ShParserMainAdminSubMenu::newInstance();
        ShParserMyDashboard::newInstance();
        ShParserMyPost::newInstance();
        ShParserMyMedia::newInstance();
        ShParserMyPages::newInstance();
        ShParserComments::newInstance();
    }

    public function site()
    {

    }

    public function all()
    {
        ShParserLocalization::getInstance();
        $shParserExampleAction = ShParserExampleAction::newInstance();
    }

}