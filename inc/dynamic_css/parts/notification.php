<?php
/*
	Notification bar custom style
*/

if ( !HubitatOptions::get_global( 'notification_bar', false ) ) return; // exif if not visible

$notification_color = HubitatOptions::get_global( 'subscribe_popup_color' );
$notification_bg = HubitatOptions::get_global( 'subscribe_popup_background' );

$content_color = '';
if ( $notification_color ) {
	$content_color = 'color:' . $notification_color . ';';
}

$content_bg_color = '';
if ( $notification_bg ) {
	$content_bg_color = 'background-color:' . $notification_bg . ';';
}

$content_typo_css = '';
$content_typo = HubitatOptions::get_global( 'notification_details_typo' );
if ( $content_typo ) {
	$content_typo_css = HubitatHelper::parse_acf_typo_to_css( $content_typo );
}

if ( $content_color || $content_typo_css ) {
	$_selector = '.notification-bar .notification-text, .notification-bar .clb-close';
	$_css = $content_color . $content_typo_css;
	HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $_css );
}

if ( $content_bg_color ) {
	$_selector = '.notification-bar';
	HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $content_bg_color );
}