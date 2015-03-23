<?php

/**
 * Clean up body_class() classes
 *
 * From Roots
 */

return function($value)
{
    add_filter('body_class', function($classes)
    {
        global $post;

        // Add post/page slug
        if (is_single() || is_page() && ! is_front_page())
        {
            $classes[] = basename(get_permalink());
        }

        // Remove unnecessary classes
        $home_id_class = 'page-id-' . get_option('page_on_front');

        $remove_classes = array(
            'page-template-default',
            $home_id_class
        );

        $classes = array_diff($classes, $remove_classes);

        return $classes;
    });
};
