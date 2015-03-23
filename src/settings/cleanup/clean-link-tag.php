<?php

/**
 * Clean up output of stylesheet <link> tag
 *
 * From Roots
 */

return function($value)
{
    add_filter('style_loader_tag', function($input)
    {
        preg_match_all("!<link rel='stylesheet'\s?(id='[^']+')?\s+href='(.*)' type='text/css' media='(.*)' />!", $input, $matches);

        // Only display media if it is meaningful
        $media = $matches[3][0] !== '' && $matches[3][0] !== 'all' ? ' media="' . $matches[3][0] . '"' : '';

        return '<link rel="stylesheet" href="' . $matches[2][0] . '"' . $media . '>' . "\n";
    });
};
