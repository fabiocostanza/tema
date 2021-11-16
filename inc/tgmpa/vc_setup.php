<?php

function hubitat_vc_set_as_theme() {
	vc_set_default_editor_post_types( array(
		'page',
		'post',
		'custom_post_type',
		'hubitat_portfolio'
	) );
	vc_set_as_theme();
}

add_action( 'vc_before_init', 'hubitat_vc_set_as_theme' );

/*
function hubitat_vc_remove_frontend_links() {
    vc_disable_frontend(); // this will disable frontend editor
}

add_action( 'vc_after_init', 'hubitat_vc_remove_frontend_links' );


function hubitat_vc_remove_wp_admin_bar_button() {
    remove_action( 'admin_bar_menu', array( vc_frontend_editor(), 'adminBarEditLink' ), 1000 );
}

add_action( 'vc_after_init', 'hubitat_vc_remove_wp_admin_bar_button' );
*/