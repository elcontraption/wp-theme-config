<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Image sizes
    |--------------------------------------------------------------------------
    |
    | Set available image sizes. Changing these values will only update images
    | created after the change. If you want to update all images, use a
    | thumbnail regeneration plugin.
    |
    | If 'thumb', 'thumbnail', 'medium', 'large', 'post-thumbnail'
    | are set, these will be updated with update_option().
    |
    | Make a custom image size available for use in the WordPress admin by
    | adding a human readable name with the key 'admin':
    |
    | 'admin' => 'My Custom Size Name'
    |
    | http://codex.wordpress.org/Function_Reference/add_image_size
    |
    */

   'images' => array(

        array(
            'name'      => 'thumb',
            'width'     => 150,
            'height'    => 150,
            'crop'      => true
        ),

        array(
            'name'      => 'medium',
            'width'     => 300,
            'height'    => 300,
            'crop'      => false
        ),

        array(
            'name'      => 'large',
            'width'     => 1024,
            'height'    => 1024,
            'crop'      => false
        ),

    ),

);
