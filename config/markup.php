<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Set the post excerpt length
    |--------------------------------------------------------------------------
    */
   
   'post-excerpt-length' => 10,

   /*
    |--------------------------------------------------------------------------
    | Set the post 'more' link
    |--------------------------------------------------------------------------
    |
    | Standardizes the 'more' link with a permalink to the post.
    | For more control, set 'post-excerpt-more' to false and filter 
    | 'excerpt_more' yourself.
    |
    | 'before': text before the link.
    | 'anchor': optional anchor to append to the permalink (without #).
    | 'text':   link text.
    | 'after':  text after the link.
    |
    */
   
    'post-excerpt-more' => array(
        'before' => ' &hellip; ',
        'anchor' => 'more',
        'text' => __('More', '_w'),
        'after' => ''
    ),

    /*
    |--------------------------------------------------------------------------
    | Wrap embedded media as suggested by Readability
    |--------------------------------------------------------------------------
    |
    | TODO: move this to appropriate config file.
    |
    | https://gist.github.com/965956
    | http://www.readability.com/publishers/guidelines#publisher
    |
    */
   
   'wrap-embedded-media' => true,

);