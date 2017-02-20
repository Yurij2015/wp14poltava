<?php
/**
 * Created by PhpStorm.
 * User: Yurij
 * Date: 20.02.2017
 * Time: 11:02
 */

namespace includes\common;


class ShParserRequestApi
{

    const SHPARSER_API = "https://api.vk.com/method/users.get?";
    //const SHPARSER_TOKEN = "1a05630c60ea686860db7f42795b4f9cccf1f85a00c1872f7516443abe2a382d5c825a1d432b50e3bea91";
    const SHPARSER_TOKEN = "";
    const SHPARSER_MARKER = "";

    private static $instance = null;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (null == self::$instance) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function getToken()
    {
        return "&token=" . self::SHPARSER_TOKEN;
    }

    public function getUser()
    {
        //$requestURL = "";

        $user_id = 87591824;
        $request_params = array(
            'user_id' => $user_id,
            'fields' => 'bdate',
            'first_name' => 'first_name',
            'last_name' => 'last_name',
            'v' => '5.52'
        );
        $get_params = http_build_query($request_params);
        $requestURL = self::SHPARSER_API . "{$get_params}";
        return $this->requestAPI($requestURL);
    }

    public function requestAPI($requestURL)
    {
        $response = wp_remote_get($requestURL);
        $body = wp_remote_retrieve_body($response);
        $json = json_decode($body);
        //  if (!is_wp_error($json) && $json->success == true) {
        return $json;
        // } else {
        //      return false;
        // }

    }

}




