<?php

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

return array(

    /**
     * http://codex.wordpress.org/Post_Formats
     */
    'post-formats' => array(
        // 'aside',
        // 'gallery',
        // 'link',
        // 'image',
        // 'quote',
        // 'status',
        // 'video',
        // 'audio',
        // 'chat',
    ),

    /**
     * http://codex.wordpress.org/Post_Thumbnails
     */
    'post-thumbnails' => array(),

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
        'comment-list',
        'comment-form',
        'search-form',
        'gallery',
        'caption',
    ),

);
