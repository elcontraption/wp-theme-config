<?php

/**
 * Disable WordPress theme customizer.
 *
 * From [Customizer Remove All Parts plugin](https://github.com/parallelus/customizer-remove-all-parts).
 */
return function($value) 
{
    if ( ! $value) return;

    add_action('init', function() 
    {
        add_filter('map_meta_cap', function($caps = [], $cap = '', $user_id = 0, $args = []) {

            if ($cap == 'customize') {
                return array('nope');
            }

            return $caps;

        }, 10, 4);

    }, 10);

    add_action('admin_init', function() 
    {
        remove_action('plugins_loaded', '_wp_customize_include', 10);
        remove_action('admin_enqueue_scripts', '_wp_customize_loader_settings', 11);

        add_action('load-customize.php', function() 
        {
            wp_die('The Customizer is currently disabled.');
        });

    }, 10);
};