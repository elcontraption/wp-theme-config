<?php

/*
|--------------------------------------------------------------------------
| Order 'post' search results by date.
|--------------------------------------------------------------------------
*/

return function($value)
{
    add_action('pre_get_posts', function($query)
    {
        if ( ! is_admin() && $query->is_main_query())
        {
            if (is_search())
            {
                $query->set('orderby', 'date');
            }
        }
    });
};
