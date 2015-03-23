<?php

return function ($locations)
{
    add_action('after_setup_theme', function() use ($locations)
    {
        $menus = array();

        foreach ($locations as $name)
        {
            $menus[sanitize_title($name)] = __($name);
        }

        register_nav_menus($menus);
    });
};
