<?php
/**
 * @link       http://www.nimlinks.com
 * @since      1.0.0
 * @author	   Nimish Gupta
 */

// If uninstall not called from WordPress, then exit.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit();
}

delete_option('live-nimlinks');

function remove_LiveTracker_widget() {
	unregister_widget('LiveTracker');
}

add_action( 'widgets_init', 'remove_LiveTracker_widget' );

/******* The end.  ********/