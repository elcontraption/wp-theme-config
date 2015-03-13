<?php

/**
 * http://codex.wordpress.org/Post_Thumbnails
 */

return function($postTypes)
{
    add_action('after_setup_theme', function() use ($postTypes)
    {
        add_theme_support('post-thumbnails', $postTypes);
    });
};
