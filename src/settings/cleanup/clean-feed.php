<?php

/**
 * Remove default RSS description from feed
 *
 * From Roots
 */

return function ($value)
{
    add_filter('the_generator', '__return_false');
    add_filter('get_bloginfo_rss', function($bloginfo)
    {
        $default_tagline = 'Just another WordPress site';
        return ($bloginfo === $default_tagline) ? '' : $bloginfo;
    });
};
