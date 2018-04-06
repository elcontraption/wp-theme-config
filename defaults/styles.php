<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Public styles
    |--------------------------------------------------------------------------
    |
    | The stylesheets listed here will be registered and optionally enqueued on
    | the public side in the order they are defined.
    |
    | Setting `enqueue` to `true` will enqueue the style globally.
    |
    | https://codex.wordpress.org/Function_Reference/wp_register_style
    |
    */
    'public' => array(

        // array(
        //     'handle'        => 'main',
        //     'src'           => get_template_directory_uri() . '/assets/dist/styles/main.css',
        //     'deps'          => null,
        //     'ver'           => null,
        //     'media'         => null,
        //     'enqueue'       => false
        // ),

    ),

    /*
    |--------------------------------------------------------------------------
    | Admin styles
    |--------------------------------------------------------------------------
    |
    | The stylesheets listed here will be registered and optionally enqueued on
    | the admin side in the order they are defined. The 'src' attribute is
    | relative to the theme directory.
    |
    | Setting `enqueue` to `true` will enqueue the style globally.
    |
    | https://codex.wordpress.org/Function_Reference/wp_register_style
    |
    */
    'admin' => array(

      // array(
      //     'handle'        => 'main',
      //     'src'           => get_template_directory_uri() . '/assets/dist/styles/admin.css',
      //     'deps'          => null,
      //     'ver'           => null,
      //     'media'         => null,
      //     'enqueue'       => false
      // ),

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
