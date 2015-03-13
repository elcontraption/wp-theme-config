<?php

/**
 * Remove unnecessary self-closing tags
 *
 * From Roots
 *
 * TODO: DRY up
 */

return function($value)
{
    add_filter('get_avatar', function() {
        return str_replace(' />', '>', $input);
    });

    add_filter('comment_id_fields', function() {
        return str_replace(' />', '>', $input);
    });

    add_filter('post_thumbnail_html', function() {
        return str_replace(' />', '>', $input);
    });
};
