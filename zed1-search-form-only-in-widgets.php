<?php
/*
Plugin Name: Zed1 Search Form Only in Widgets
Plugin URI: https://zed1.com/
Description: Only allow the search form in a widget area. Removes the search form from the Twenty Eleven header. 
Author: Mike Little
Version: 1.0
Author URI: https://mikelittle.org/
*/

defined( 'WPINC' ) OR die();

add_filter( 'get_search_form', 'zed1_get_search_form_only_for_widget' );
function zed1_get_search_form_only_for_widget( $form ) {
	if ( did_action( 'dynamic_sidebar_before' ) ) {
		return $form;
	}
	return '';
}
