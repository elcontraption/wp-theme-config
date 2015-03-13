<?php

return function($value)
{
    // Do not add for logged-in admins
    if (current_user_can('manage_options'))
    {
        return;
    }

    add_action('wp_footer', function() use ($value)
    {
        ?>
            <script>
                (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
                function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
                e=o.createElement(i);r=o.getElementsByTagName(i)[0];
                e.src='//www.google-analytics.com/analytics.js';
                r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
                ga('create',<?php echo "'" . $value . "'" ?>);ga('send','pageview');
            </script>
        <?php
    });
};
