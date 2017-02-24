<?php
/**
 * Created by PhpStorm.
 * User: Yurij
 * Date: 21.02.2017
 * Time: 12:04
 */

namespace includes\controllers\site\shortcodes;

use includes\common\ShParserRequestApi;
use includes\controllers\admin\menu\ShParserICreatorinstance;

class ShParserDataVkUsers extends ShParserShortcodes implements ShParserICreatorinstance
{



    public function initShortcode()
    {
        // TODO: Implement initShortcode() method.

        add_shortcode('sh_parser_data_vk_users', array(&$this, 'action'));
    }

    public function action($atts = '', $content = '', $tag = '')
    {
        // TODO: Implement action() method.

        //$atts = shortcode_atts(array(), $atts, $tag);

        $requestAPI = ShParserRequestApi::getInstance();

        $data = $requestAPI->getUser();

        if ($data == false) return false;
        return $this->render($data);
    }

    public function render($data)
    {
        // TODO: Implement render() method.
        echo "<pre>";
        var_dump($data);
        echo "</pre>";
        echo($data->response[0]->id);
        echo "<br>";
        echo($data->response[0]->bdate);
        echo "<br>";
        echo($data->response[0]->first_name);
        echo "<br>";
        echo($data->response[0]->last_name);
    }

    public static function newInstance()
    {
        // TODO: Implement newInstance() method.
        $instance = new self;
        return $instance;

    }

}