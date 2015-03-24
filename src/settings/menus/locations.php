<?php

return function ($locations)
{
    $menus = array();

    foreach ($locations as $name)
    {
        $menus[sanitize_title($name)] = __($name);
    }

    register_nav_menus($menus);
};
