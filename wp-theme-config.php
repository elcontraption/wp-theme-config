<?php

/**
 * Plugin Name:     WP Theme Config
 * Description:     Easy configuration for professional WordPress themes.
 * Version:         1.0.0-dev
 * Author:          Darin Reid / Elegant Contraption
 * Author URI:      http://elcontraption.com/
 */

use WpThemeConfig\Configurator;
use WpThemeConfig\Settings;

if ( ! defined('WP_THEME_CONFIG_PATH'))
{
    define('WP_THEME_CONFIG_PATH', plugin_dir_path(__FILE__));
}

require WP_THEME_CONFIG_PATH . 'vendor/autoload.php';

// Initialize WpThemeConfig
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

    do_action('wp_theme_config_loaded');
});
