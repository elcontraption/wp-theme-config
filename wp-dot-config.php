<?php

/**
 * Plugin Name:     WP Dot Config
 * Description:     Easy configuration for professional WordPress themes.
 * Version:         1.0.0-dev
 * Author:          Darin Reid / Elegant Contraption
 * Author URI:      http://elcontraption.com/
 */

use WpDotConfig\Configurator;

if ( ! defined('WP_DOT_CONFIG_PATH')) 
{
    define('WP_DOT_CONFIG_PATH', plugin_dir_path(__FILE__));
}

require WP_DOT_CONFIG_PATH . 'vendor/autoload.php';

add_action('plugins_loaded', function() 
{
    Configurator::getInstance();

    if (function_exists('config'))
    {
        return;
    }

    function config($value)
    {
        return Configurator::getInstance()->get($value);
    }
});
