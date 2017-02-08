<?php
namespace includes\common;

use includes\controllers\admin\menu\ShParserMainAdminMenuController;
use includes\controllers\admin\menu\ShParserMainAdminSubMenuController;
use includes\controllers\admin\menu\ShParserMyCommentsMenuController;
use includes\controllers\admin\menu\ShParserMyDashboardMenuController;
use includes\controllers\admin\menu\ShParserMyMediaMenuController;
use includes\controllers\admin\menu\ShParserMyOptionsMenuController;
use includes\controllers\admin\menu\ShParserMyPagesMenuController;
use includes\controllers\admin\menu\ShParserMyPluginsMenuController;
use includes\controllers\admin\menu\ShParserMyPostsMenuController;
use includes\controllers\admin\menu\ShParserMyThemeMenuController;
use includes\controllers\admin\menu\ShParserMyToolsMenuController;
use includes\controllers\admin\menu\ShParserMyUsersMenuController;
use includes\example\ShParserExampleAction;
use includes\example\ShParserExampleFilter;

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
        ShParserMainAdminMenuController::newInstance();
        ShParserMainAdminSubMenuController::newInstance();
        ShParserMyDashboardMenuController::newInstance();
        ShParserMyPostsMenuController::newInstance();
        ShParserMyMediaMenuController::newInstance();
        ShParserMyPagesMenuController::newInstance();
        ShParserMyCommentsMenuController::newInstance();
        ShParserMyThemeMenuController::newInstance();
        ShParserMyPluginsMenuController::newInstance();
        ShParserMyUsersMenuController::newInstance();
        ShParserMyToolsMenuController::newInstance();
        ShParserMyOptionsMenuController::newInstance();
    }

    /**
     * Метод будет срабатывать когда вы находитесь Сайте. Загрузка классов для Сайта
     */
    public function site()
    {

    }

    /**
     * Метод будет срабатывать везде. Загрузка классов для Админ панеле и Сайта
     */
    public function all()
    {
        ShParserLocalization::getInstance();
        //$stepByStepExampleAction = StepByStepExampleAction::newInstance();
        /*$stepByStepExampleFilter = StepByStepExampleFilter::newInstance();
       $stepByStepExampleFilter->callMyFilter("Roman");
       $stepByStepExampleFilter->callMyFilterAdditionalParameter("Roman", "Softgroup", "Poltava");
       $stepByStepExampleAction = StepByStepExampleAction::newInstance();
       $stepByStepExampleAction->callMyAction();
       $stepByStepExampleAction->callMyActionAdditionalParameter( 'test1', 'test2', 'test3' );*/
    }

}




