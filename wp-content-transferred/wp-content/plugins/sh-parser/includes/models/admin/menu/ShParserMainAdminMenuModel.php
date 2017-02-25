<?php

/**
 * Created by PhpStorm.
 * User: Yurij
 * Date: 25.02.2017
 * Time: 6:53
 */
namespace includes\models\admin\menu;

use includes\controllers\admin\menu\ShParserICreatorInstance;

class ShParserMainAdminMenuModel implements ShParserICreatorInstance
{
    public function __construct()
    {
        add_action('admin_init', array(&$this, 'createOption'));
    }

    public function createOption()
    {
    }

    public function saveOption($init)
    {

    }

}