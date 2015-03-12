<?php

/**
 * Plugin Name:     WP Dot Config
 * Description:     Easy configuration for professional WordPress themes.
 * Version:         1.0.0-dev
 * Author:          Darin Reid / Elegant Contraption
 * Author URI:      http://elcontraption.com/
 */

use WpDotConfig\Configurator;
use WpDotConfig\Settings;

if ( ! defined('WP_DOT_CONFIG_PATH'))
{
    define('WP_DOT_CONFIG_PATH', plugin_dir_path(__FILE__));
}

require WP_DOT_CONFIG_PATH . 'vendor/autoload.php';

// Initialize WpDotConfig
add_action('plugins_loaded', function()
{
    // Initialize Configurator
    $configurator = Configurator::getInstance();

    // Initialize Settings
    new Settings($configurator->all());

    if ( ! function_exists('config'))
    {
        function config($value)
        {
            return Configurator::getInstance()->get($value);
        }
    }
});
