<?php

/*
Plugin Name: Sh-parser
Plugin URI: https://github.com/Yurij2015/myplagin.git
Description: Parser of sites
Version: 1.0
Author: Yurij_2015
Author URI: https://vk.com/mokrij_yurij
Text Domain: sh-parser
Domain Path: /languages/
License: A "Slug" license name e.g. GPL2
Copyright 2017  Yurij Mokrij  (email: nabor_2008@i.ua)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301   USA
 */

require_once plugin_dir_path(__FILE__) . 'config-path.php';
require_once SHPARSER_PLUGIN_DIR . 'includes/common/ShParserAutoload.php';
require_once SHPARSER_PLUGIN_DIR . 'includes/ShParserPlugin.php';

register_activation_hook(__FILE__, array('includes\ShParserPlugin', 'activation'));
register_deactivation_hook(__FILE__, array('includes\ShParserPlugin', 'deactivation'));
error_log(SHPARSER_PLUGIN_TEXTDOMAIN);

