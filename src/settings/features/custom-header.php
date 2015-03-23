<?php

/**
 * http://codex.wordpress.org/Function_Reference/add_theme_support#Custom_Header
 */

return function($value)
{
    add_action('after_setup_theme', function() use ($value)
    {
        add_theme_support('custom-header', $value);
    });
};
