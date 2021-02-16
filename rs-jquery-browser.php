<?php
/*
Plugin Name: RS Jquery Browser Fix
Description: Adds in the deprecated $.browser functionality to fix outdated plugins which still rely on that feature. Based on https://github.com/gabceb/jquery-browser-plugin
Version: 1.0
Author: Radley Sustaire
Author URI: https://radleysustaire.com/
*/

function rsjq_enqueue() {
	$url = untrailingslashit( plugin_dir_url( __FILE__ ) );
	
	wp_enqueue_script( 'jq-migrate', "$url/assets/jquery.browser.min.js", array('jquery'), '1.0');
}
add_action( 'wp_enqueue_scripts', 'rsjq_enqueue' );