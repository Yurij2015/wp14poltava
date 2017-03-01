<?php
/**
 * Created by PhpStorm.
 * User: Yurij
 * Date: 01.03.2017
 * Time: 1:16
 */
namespace includes\models\admin\menu;

class ShParserGuestBookModel
{
    const SHPARSER_TABLE_NAME = "sh_parser_guest_book";

    static public function getTableName()
    {
        global $wpdb;
        return $wpdb->prefix . static::SHPARSER_TABLE_NAME;
    }




}
