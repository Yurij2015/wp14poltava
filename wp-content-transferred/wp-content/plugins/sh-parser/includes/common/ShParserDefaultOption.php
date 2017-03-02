<?php
/**
 * Created by PhpStorm.
 * User: Yurij
 * Date: 25.02.2017
 * Time: 0:29
 */

namespace includes\common;


class ShParserDefaultOption
{
    public static function getDefaultOptions()
    {
        $defaults = array(
            'account' => array(
                'marker' => '',
                'token' => ''
            )
        );
        // Фильтр которому можно подключиться и изменить массив дефолтных настроек
        $defaults = apply_filters('step_by_step_default_option', $defaults );
        return $defaults;
    }
}