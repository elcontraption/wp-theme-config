<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Public styles
    |--------------------------------------------------------------------------
    |
    | The stylesheets listed here will be registered and enqueued on the public
    | side in the order they are defined.
    |
    | http://codex.wordpress.org/Function_Reference/wp_enqueue_style
    |
    */
    'public' => array(

        // array(
        //     'handle'        => 'main',
        //     'src'           => get_template_directory_uri() . '/assets/dist/styles/main.css',
        //     'deps'          => null,
        //     'ver'           => null,
        //     'media'         => null
        // ),

    ),

    /*
    |--------------------------------------------------------------------------
    | Admin styles
    |--------------------------------------------------------------------------
    |
    | The stylesheets listed here will be registered and enqueued on the admin
    | side in the order they are defined. The 'src' attribute is relative to
    | the theme directory.
    |
    | http://codex.wordpress.org/Function_Reference/wp_enqueue_style
    |
    */
    'admin' => array(

    ),

    /*
    |--------------------------------------------------------------------------
    | Editor stylesheet
    |--------------------------------------------------------------------------
    |
    | Define a custom stylesheet to apply to the TinyMCE editor.
    | Path is relative to the theme.
    |
    | http://codex.wordpress.org/Function_Reference/add_editor_style
    |
    */
    'editor' => false

);
