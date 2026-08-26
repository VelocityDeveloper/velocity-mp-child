<?php
/**
 * Fuction yang digunakan di theme ini.
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

add_action( 'after_setup_theme', 'vmpc_theme_setup', 9 );
function vmpc_theme_setup() {
	//remove action from Parent Theme
	remove_action('justg_header', 'justg_header_menu');
	remove_action('justg_do_footer', 'justg_the_footer_open');
	remove_action('justg_do_footer', 'justg_the_footer_content');
	remove_action('justg_do_footer', 'justg_the_footer_close');
}

/**
 * Supply usable dimensions for the native Header Image control.
 */
add_action( 'after_setup_theme', 'vmpc_custom_header_setup', 20 );
function vmpc_custom_header_setup() {
	remove_theme_support( 'custom-header' );
	add_theme_support(
		'custom-header',
		array(
			'width'       => 870,
			'height'      => 90,
			'flex-width'  => true,
			'flex-height' => true,
			'header-text' => false,
		)
	);
}

/**
 * Hide parent settings that are not used by this child theme.
 *
 * @param WP_Customize_Manager $wp_customize Customizer manager.
 */
function vmpc_customize_remove_unused_sections( WP_Customize_Manager $wp_customize ) {
	$wp_customize->remove_section( 'velocity_section_layout' );
}
add_action( 'customize_register', 'vmpc_customize_remove_unused_sections', 100 );

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
