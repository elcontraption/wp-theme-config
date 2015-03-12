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
            wp_enqueue_style(
                $style['handle'],
                get_template_directory_uri() . '/' . $style['src'],
                $style['deps'],
                $style['ver'],
                $style['media']
            );
        }
    });

    // If editor stylesheet is defined, enqueue that here.
    if ($this->config['styles.editor'])
    {
        add_action('admin_init', function() {
            add_editor_style(get_template_directory_uri() . '/' . $this->config['styles.editor']);
        });
    }
};
