<?php

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

return function($value)
{
    add_filter('request', function($query_vars)
    {
        if (isset($_GET['s']) && empty($_GET['s']) && !is_admin())
        {
            $query_vars['s'] = ' ';
        }

        return $query_vars;
    });
};
