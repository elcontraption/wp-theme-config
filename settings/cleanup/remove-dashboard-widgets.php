<?php

/**
 * Remove unnecessary dashboard widgets
 *
 * From Roots
 *
 * http://www.deluxeblogtips.com/2011/01/remove-dashboard-widgets-in-wordpress.html
 */

return function($value)
{
    add_action('admin_init', function() {
        remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal');
        remove_meta_box('dashboard_plugins', 'dashboard', 'normal');
        remove_meta_box('dashboard_primary', 'dashboard', 'normal');
        remove_meta_box('dashboard_secondary', 'dashboard', 'normal');
    });
};
