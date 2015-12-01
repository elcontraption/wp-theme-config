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
    | Uses the WP_ENV constant to detect the environment.
    | Will be disabled if WP_ENV is not defined.
    |
    | Set to false to disable.
    |
    | Note: this is probably bad to enable for production.
    | See https://yoast.com/relative-urls-issues/
    |
    */

   'root-relative-urls' => array('development'),

);
