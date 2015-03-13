<?php

/*
|--------------------------------------------------------------------------
| Pretty search URLs
|--------------------------------------------------------------------------
|
| * Redirects search results from /?s=query to /search/query
| * Converts %20 to +
|
| http://txfx.net/wordpress-plugins/nice-search/
|
*/

return function($value)
{
    $config = $this->config;

    add_action('template_redirect', function() use ($config)
    {
        global $wp_rewrite;

        $search_base = $config['search.search-base'];

        if ( ! isset($wp_rewrite) || ! is_object( $wp_rewrite ) | ! $wp_rewrite->using_permalinks())
        {
            return;
        }

        if (is_search() && ! is_admin() && strpos($_SERVER['REQUEST_URI'], "/{$search_base}/" ) === false)
        {
            wp_redirect( home_url( "/{$search_base}/" . urlencode( get_query_var( 's' ) ) ) );
            exit();
        }
    });
};
