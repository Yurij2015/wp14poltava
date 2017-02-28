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
        error_log(1);
    }

    public function createOption()
    {
        error_log(2);
        register_setting('ShParserMainSettings', SHPARSER_PLUGIN_OPTION_NAME, array(&$this, 'saveOption'));
        add_settings_section(
            'sh_parser_account_section_id',
            __('Account', SHPARSER_PLUGIN_TEXTDOMAIN),
            '',
            'sh-parser-development-plugin'
        );

        add_settings_field(
            'sh_parser_token_field_id',
            __('Token', SHPARSER_PLUGIN_TEXTDOMAIN),
            array(&$this, 'tokenField'),
            'sh-parser-development-plugin',
            'sh_parser_account_section_id'
        );
        add_settings_field(
            'sh_parser_marker_field_id',
            __('Marker', SHPARSER_PLUGIN_TEXTDOMAIN),
            array(&$this, 'markerField'),
            'sh-parser-development-plugin',
            'sh_parser_account_section_id'
        );
    }

    public function tokenField()
    {
        $option = get_option(SHPARSER_PLUGIN_OPTION_NAME);
        ?>
        <label>
            <input type="text" name="<?php echo SHPARSER_PLUGIN_OPTION_NAME; ?> [account][token]"
                   value="<?php echo esc_attr($option['account']['token']) ?>"/>
        </label>
        <?php
    }

    public function markerField()
    {
        $option = get_option(SHPARSER_PLUGIN_OPTION_NAME);
        ?>
        <label>
            <input type="text" name="<?php echo SHPARSER_PLUGIN_OPTION_NAME; ?> [account][marker]"
                   value="<?php echo esc_attr($option['account']['marker']) ?>"/>
        </label>
        <?php
    }

    public function saveOption($input)
    {
        error_log(3);
        error_log(print_r($input, true));
        return $input;
    }

    public static function newInstance()
    {
        // TODO: Implement newInstance() method.
        $instance = new self;
        return $instance;
    }

}