<?php

/**
 * Created by PhpStorm.
 * User: Yurij
 * Date: 21.02.2017
 * Time: 14:30
 */
namespace includes\models\site;

use includes\common\ShParserRequestApi;
use includes\controllers\admin\menu\ShParserICreatorInstance;


class ShParserDataVkUserModel implements ShParserICreatorInstance
{

    public function __construct()
    {
    }

    public function getData()
    {
        $cashKey = "";
        $data = array();
        $cashKey = $this->getCashKey();
        if (false === ($data = get_transient($cashKey))) {

            $requestAPI = ShParserRequestApi::getInstance();
            $data = $requestAPI->getUser();
            error_log($data, true);
            set_transient($cashKey, $data, 100);

        }
        return $data;
    }

    public function getCashKey()
    {
        return SHPARSER_PLUGIN_TEXTDOMAIN . "_vk_users";

    }

    public static function newInstance()
    {
        // TODO: Implement newInstance() method.
        $instance = new self;
        return $instance;
    }


}