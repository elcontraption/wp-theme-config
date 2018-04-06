<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | jQuery
    |--------------------------------------------------------------------------
    |
    | Define paths to local and CDN-hosted versions of jQuery, as in HTML5
    | Boilerplate. Local path is relative to the theme, and CDN path should be
    | a protocol-independent path to a CDN-served version of jQuery. Set to
    | false to disable.
    |
    | https://github.com/h5bp/html5-boilerplate/blob/v4.3.0/doc/html.md#google-cdn-for-jquery
    |
    | Example CDN jQuery URL: '//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js',
    |
    */

   'jquery-local'   => false,
   'jquery-cdn'     => false,

    /*
    |--------------------------------------------------------------------------
    | Public scripts
    |--------------------------------------------------------------------------
    |
    | The scripts listed here will be registered and opionally enqueued for the
    | public side in the order they are defined.
    |
    | Setting `enqueue` to `true` will enqueue the script globally.
    |
    | https://developer.wordpress.org/reference/functions/wp_register_script/
    |
    */
    'public' => array(

        // array(
        //     'handle'        => 'main',
        //     'src'           => get_template_directory_uri() . '/assets/dist/scripts/main.js',
        //     'deps'          => array('jquery'),
        //     'ver'           => null,
        //     'in_footer'     => true,
        //     'enqueue'       => true
        // ),

    ),

    /*
    |--------------------------------------------------------------------------
    | Admin scripts
    |--------------------------------------------------------------------------
    |
    | The scripts listed here will be registered and optionally enqueued for the
    | admin side in the order they are defined.
    |
    | https://developer.wordpress.org/reference/functions/wp_register_script/
    |
    */
    'admin' => array(

        // array(
        //     'handle'        => 'admin',
        //     'src'           => get_template_directory_uri() . '/assets/dist/scripts/admin.js',
        //     'deps'          => array('jquery'),
        //     'ver'           => null,
        //     'in_footer'     => true,
        //     'enqueue'       => true
        // ),

    ),

);
