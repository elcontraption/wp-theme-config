<?php

/**
 * Register/enqueue admin stylesheets
 */
return function($styles)
{
    add_action('admin_enqueue_scripts', function() use ($styles)
    {
        foreach ($styles as $style)
        {
            wp_register_style(
                $style['handle'],
                $style['src'],
                $style['deps'],
                $style['ver'],
                $style['media']
            );

            if (!isset($style['enqueue']) || $style['enqueue'] === false) continue;
            wp_enqueue_style($style['handle']);
        }
    });

    // If editor stylesheet is defined, enqueue that here.
    if ($this->config['styles.editor'])
    {
        add_action('admin_init', function() {
            add_editor_style($this->config['styles.editor']);
        });
    }
};
