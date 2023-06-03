<?php

add_shortcode('show_insta_feed_ad', 'my_insta_feed_ad_show');

function my_insta_feed_ad_show()
{
    global $plugin_dir;
    $style_path = $plugin_dir . 'assets/css/styles.css';
    $script_path = $plugin_dir . 'assets/js/getfeed.js';

    wp_enqueue_style('my_insta_feed_ad_styles', $style_path);
    wp_enqueue_script('my_insta_feed_ad_script_lib', 'https://cdn.jsdelivr.net/gh/stevenschobert/instafeed.js@2.0.0rc1/src/instafeed.min.js');
    wp_enqueue_script('my_insta_feed_ad_script', $script_path);
    return;
}
