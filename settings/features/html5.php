<?php

/**
 * http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
 */

 return function($values)
 {
     add_action('after_setup_theme', function() use ($values)
     {
         add_theme_support('html5', $values);
     });
 };
