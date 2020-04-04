<?php
/*
Plugin Name: Easy Disable Comments
Plugin URI: https://wordpress.org/plugins/disable-comments/
Description: Easily disable comments on your website
Version: 1.0.1
Author: Mantrabrain
Author URI: https://mantrabrain.com/
License: GPL2
Text Domain: easy-disable-comments
Domain Path: /languages/
*/

// exit if accessed directly
if ( ! defined( 'ABSPATH' ) )
    exit;

define( 'EASY_DISABLE_COMMENTS_URL', plugins_url( '', __FILE__ ) );
define( 'EASY_DISABLE_COMMENTS_PATH', plugin_dir_path( __FILE__ ) );


include_once EASY_DISABLE_COMMENTS_PATH.'includes/class-easy-disable-comments.php';
/**
 * Get instance of main class.
 *
 * @return object Instance
 */
Easy_Disable_Comments::get_instance();