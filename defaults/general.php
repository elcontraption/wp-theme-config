<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Google Analytics ID
    |--------------------------------------------------------------------------
    |
    | e.g. UA-XXXXXX-X. Set to false or empty to disable.
    |
    */

   'google-analytics-id' => '',

   /*
    |--------------------------------------------------------------------------
    | Root-relative URLs
    |--------------------------------------------------------------------------
    |
    | Enable root-relative URLs for specific environments.
    | Setting to 'true' will enable for all environments.
    |
    | Uses getenv('WP_ENV') to detect the environment.
    | Will be disabled if getenv('WP_ENV') returns nothing.
    |
    | Note: this is probably bad to enable for production.
    | See https://yoast.com/relative-urls-issues/
    |
    */

   'root-relative-urls' => array('development'),

);
