<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Theme support
    |--------------------------------------------------------------------------
    |
    | Add support for various theme features.
    |
    | Features within this array are added with add_theme_support().
    |
    | http://codex.wordpress.org/Function_Reference/add_theme_support
    |
    */
    'supports' => array(

        /**
         * http://codex.wordpress.org/Post_Formats
         */
        'post-formats' => array(
            'aside'     => false,
            'gallery'   => false,
            'link'      => false,
            'image'     => false,
            'quote'     => false,
            'status'    => false,
            'video'     => false,
            'audio'     => false,
            'chat'      => false
        ),

        /**
         * http://codex.wordpress.org/Post_Thumbnails
         */
        'post-thumbnails' => array('post'),

        /**
         * http://codex.wordpress.org/Function_Reference/add_theme_support#Custom_Background
         */
        'custom-background' => false,

        /**
         * http://codex.wordpress.org/Function_Reference/add_theme_support#Custom_Header
         */
        'custom-header' => false,

        /**
         * http://codex.wordpress.org/Function_Reference/add_theme_support#Feed_Links
         */
        'automatic-feed-links' => true,

        /**
         * http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
         */
        'html5' => array(
            'comment-list'  => true,
            'comment-form'  => true,
            'search-form'   => true,
            'gallery'       => true,
            'caption'       => true
        ),

    ),

);
