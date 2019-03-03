<?php 
if( !defined('ABSPATH') && !defined('WP_UNINSTALL_PLUGIN') ) 
	exit;

delete_site_option( 'easy_disable_comments_options' );