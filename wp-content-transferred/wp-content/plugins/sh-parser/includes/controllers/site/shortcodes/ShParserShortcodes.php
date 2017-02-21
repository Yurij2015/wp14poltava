<?php

/**
 * Created by PhpStorm.
 * User: Yurij
 * Date: 21.02.2017
 * Time: 11:47
 */

namespace includes\controllers\site\shortcodes;

abstract class ShParserShortcodes
{
    public function __construct()
    {
        add_action('wp_loaded', array(&$this, 'initShortcode'));
    }

    abstract public function initShortcode();

    abstract public function action($atts = array(), $content='', $tag = '');

    abstract public function render($data);




}

