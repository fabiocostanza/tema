<?php

function hubitat_init_custom_header() {
	add_theme_support( 'custom-header', apply_filters( 'hubitat_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '000000',
		'width'                  => 1000,
		'height'                 => 250,
		'flex-height'            => true,
		'wp-head-callback'       => 'hubitat_init_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'hubitat_init_custom_header' );

if ( ! function_exists( 'hubitat_init_header_style' ) ) {
	function hubitat_init_header_style() {
		// Thats all
	}
}