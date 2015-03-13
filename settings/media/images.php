<?php

/**
 * Set image sizes
 */

return function($sizes)
{
    add_action('w_plugin_loaded', function() use ($sizes)
    {
        $reserved_names = array('thumb', 'thumbnail', 'medium', 'large', 'post-thumbnail');

        foreach ($sizes as $key => $size)
        {
            // Update reserved image sizes
            if (in_array($size['name'], $reserved_names))
            {
                update_option($size['name'] . '_size_w', $size['width']);
                update_option($size['name'] . '_size_h', $size['height']);
                update_option($size['name'] . '_crop', $size['crop']);
                continue;
            }

            add_image_size($size['name'], $size['width'], $size['height'], $size['crop']);
        }
    });
};
