<?php

/**
 * Load jQuery from CDN
 *
 * From Roots
 */

return function ($value)
{
    if ( ! $value) return;

    // Not for admin side
    if ( is_admin()) return;

    add_action('wp_enqueue_scripts', function() use ($value)
    {
        // Dequeue jQuery
        wp_deregister_script('jquery');

        // Reregister CDN version of jQuery
        wp_register_script(
            'jquery',
            $value,
            array(),
            null,
            false
        );
    });

    // Add local fallback?
    if (! $this->config['scripts.jquery-local']) {
        return;
    }

    $fallback = function($src, $handle = null) {

        static $add_fallback = false;

        $local_jquery = $this->config['scripts.jquery-local'];

        $local_path = get_template_directory_uri() . '/' . $local_jquery;

        if ($add_fallback)
        {
            echo '<script>window.jQuery || document.write(\'<script src="' . $local_path . '"><\/script>\')</script>';
            $add_fallback = false;
        }

        if ($handle === 'jquery')
        {
            $add_fallback = true;
        }

        return $src;
    };

    add_filter('script_loader_src', $fallback, 10, 2);
    add_action('wp_head', $fallback);
};
