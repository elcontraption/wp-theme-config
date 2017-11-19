<?php

/**
 * Disable WordPress file editor.
 *
 * From [WP Beginner](http://www.wpbeginner.com/wp-tutorials/how-to-disable-theme-and-plugin-editors-from-wordpress-admin-panel/).
 */
return function($value)
{
    if ( ! $value) return;

    add_action('init', function()
    {
        define('DISALLOW_FILE_EDIT', true);
    });
};
