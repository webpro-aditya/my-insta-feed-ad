<?php

/**
* Plugin Name: Instagram Image Display
* Plugin URI: https://techatma.com/
* Description: This plugin diplays images from your Instagram feed.
* Version: 0.1
* Author: Aditya Dandotia
* Author URI: https://techatma.com/
**/

$plugin_dir = plugin_dir_url( __FILE__ );

require_once 'inc/functions.php';
require_once 'inc/register_sidebar.php';
require_once 'templates/feed.php';

register_activation_hook( __FILE__, 'function_widgets_init');
