<?php

/**
 * Load jQuery from CDN
 */

return function ($value)
{
    if ( ! $value) return;

    // Dequeue jQuery
    wp_deregister_script('jquery');

    // Reregister CDN version of jQuery
    wp_register_script(
        'jquery',
        $value,
        array(),
        null,
        null
    );

    // Add local fallback?
    if (! $this->config['scripts.jquery-local']) {
        return;
    }

    add_filter('script_loader_src', function($src, $handle = null) {

        static $add_fallback = false;

        $local_jquery = $this->config['scripts.jquery-local'];

        $local_path = get_template_directory_uri() . '/' . $local_jquery;

        if ($add_fallback)
        {
            echo '<script>window.jQuery || document.write(\'<script src="' . $local_path . '"><\/script>\')</script>';
            $add_fallback = false;
        }

        if ($handle = 'jquery')
        {
            $add_fallback = true;
        }

        return $src;

    }, 10, 2);
};
