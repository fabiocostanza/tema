<?php
$global_css = HubitatOptions::get_global( 'page_custom_css', '' );
HubitatBuffer::append_to_dynamic_css_buffer( $global_css );

$global_large_css = HubitatOptions::get_global( 'page_custom_large_css', '' );
HubitatBuffer::append_to_dynamic_css_buffer( $global_large_css, 'desktop' );

$global_medium_css = HubitatOptions::get_global( 'page_custom_medium_css', '' );
HubitatBuffer::append_to_dynamic_css_buffer( $global_medium_css, 'tablet' );

$global_small_css = HubitatOptions::get_global( 'page_custom_small_css', '' );
HubitatBuffer::append_to_dynamic_css_buffer( $global_small_css, 'mobile' );

foreach ( array_reverse( HubitatOptions::get_types_by_page() ) as $type ) {
    $_css = HubitatOptions::get_by_type( 'page_custom_css', $type, '' );
    HubitatBuffer::append_to_dynamic_css_buffer( $_css );
}

$page_css = HubitatOptions::get( 'page_custom_css', '' );
HubitatBuffer::append_to_dynamic_css_buffer( $page_css );