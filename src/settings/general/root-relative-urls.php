<?php

/**
 * Root-relative URLs
 *
 * Adapted from Roots
 *
 * Disabled for production per: https://yoast.com/relative-urls-issues/
 */

return function($value)
{
    if (is_admin() || in_array($GLOBALS['pagenow'], array('wp-login.php', 'wp-register.php'))) return;

    if ( ! defined('WP_ENV')) return;

    if (is_array($value) && ! in_array(WP_ENV, $value)) return;

    $filters = array(
        'bloginfo_url',
        'the_permalink',
        'wp_list_pages',
        'wp_list_categories',
        'the_content_more_link',
        'the_tags',
        'the_author_posts_link',
        'post_link',
        'post_type_link',
        'page_link',
        'attachment_link',
        'get_shortlink',
        'post_type_archive_link',
        'nav_menu_link_attributes',
        'the_content_more_link',
        'excerpt_more',
        'get_pagenum_link',
        'get_comments_pagenum_link',
        'get_comment_link',
        'month_link',
        'day_link',
        'year_link',
        'tag_link',
        'script_loader_src',
        'style_loader_src'
    );

    foreach ($filters as $filter) {
        add_filter($filter, function($input)
        {
            if ( ! is_string($input)) return $input;

            // Do not filter external protocol-agnostic URLs
            if (strpos($input, home_url()) === false) return $input;

            return wp_make_link_relative($input);
        });
    }
};
