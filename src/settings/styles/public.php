<?php

/**
 * Register/enqueue public stylesheets
 */
return function($styles)
{
    add_action('wp_enqueue_scripts', function() use ($styles)
    {
        foreach ($styles as $style)
        {
            wp_enqueue_style(
                $style['handle'],
                $style['src'],
                $style['deps'],
                $style['ver'],
                $style['media']
            );
        }
    });
};
