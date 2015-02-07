<?php

return array(

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
   
   'pretty-search-urls' => true,
   'search-base' => 'search',

   /*
    |--------------------------------------------------------------------------
    | Catch empty search results
    |--------------------------------------------------------------------------
    |
    | * Prevents empty search queries redirecting to home page.
    |
    | http://wordpress.org/support/topic/blank-search-sends-you-to-the-homepage#post-1772565
    | http://core.trac.wordpress.org/ticket/11330
    |
    */
   
   'catch-empty-searches' => true,

   /*
    |--------------------------------------------------------------------------
    | Order 'post' search results by date.
    |--------------------------------------------------------------------------
    */
   
   'order-posts-by-date' => true,

);