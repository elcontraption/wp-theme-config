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
    | The scripts listed here will be registered and enqueued for the public
    | side in the order they are defined.
    |
    | http://codex.wordpress.org/Function_Reference/wp_enqueue_script
    |
    */
    'public' => array(

        // array(
        //     'handle'        => 'main',
        //     'src'           => get_template_directory_uri() . '/assets/dist/scripts/main.js',
        //     'deps'          => array('jquery'),
        //     'ver'           => null,
        //     'in_footer'     => true
        // ),

    ),

    /*
    |--------------------------------------------------------------------------
    | Admin scripts
    |--------------------------------------------------------------------------
    |
    | The scripts listed here will be registered and enqueued for the admin
    | side in the order they are defined.
    |
    | http://codex.wordpress.org/Function_Reference/wp_enqueue_script
    |
    */
    'admin' => array(

        // array(
        //     'handle'        => 'admin',
        //     'src'           => get_template_directory_uri() . '/assets/dist/scripts/admin.js',
        //     'deps'          => array('jquery'),
        //     'ver'           => null,
        //     'in_footer'     => true
        // ),

    ),

);
