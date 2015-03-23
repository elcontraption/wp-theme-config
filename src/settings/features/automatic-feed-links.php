<?php

/**
 * http://codex.wordpress.org/Function_Reference/add_theme_support#Feed_Links
 */

return function($value)
{
    add_action('after_setup_theme', function() use ($value)
    {
        add_theme_support('automatic-feed-links', $value);
    });
};
