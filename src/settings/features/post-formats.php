<?php

/**
 * http://codex.wordpress.org/Post_Formats
 */

return function($formats)
{
    add_action('after_setup_theme', function() use ($formats)
    {
        add_theme_support('post-formats', $formats);
    });
};
