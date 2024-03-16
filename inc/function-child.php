<?php
/**
 * Fuction yang digunakan di theme ini.
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

add_action( 'after_setup_theme', 'vmpc_theme_setup', 9 );
function vmpc_theme_setup() {
	
	if (class_exists('Kirki')) :
		
		// remove panel in customizer 
		//Kirki::remove_panel('global_panel');
		Kirki::remove_panel('panel_footer');
		Kirki::remove_section('header_image');

		Kirki::remove_section('header_section');		
		//Kirki::remove_control('header_section');
		// Kirki::remove_control('display_header_text');
		Kirki::remove_section('typography_section');	
		Kirki::remove_section('container_section');	
		Kirki::remove_section('widget_section');	
	endif;

	//remove action from Parent Theme
	remove_action('justg_header', 'justg_header_menu');
	remove_action('justg_do_footer', 'justg_the_footer_open');
	remove_action('justg_do_footer', 'justg_the_footer_content');
	remove_action('justg_do_footer', 'justg_the_footer_close');
}

///add action builder part
add_action('justg_before_header', 'vmpc_top_header');
function vmpc_top_header() {
	require_once(get_stylesheet_directory() . '/inc/part-top-header.php');
}

add_action('justg_header', 'vmpc_header');
function vmpc_header() {
	require_once(get_stylesheet_directory() . '/inc/part-header.php');
}

add_action('justg_do_footer', 'vmpc_footer');
function vmpc_footer() {
	require_once(get_stylesheet_directory() . '/inc/part-footer.php');
}


// Function to remove sidebar
function remove_theme_sidebar() {
    unregister_sidebar('main-sidebar');
}

// Hook the removal function to init action
add_action('init', 'remove_theme_sidebar');
