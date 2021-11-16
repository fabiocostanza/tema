<?php

$header_typo = HubitatOptions::get_global( 'coming_soon_heading_typo' );
if ( $header_typo ) {
    $_css = HubitatHelper::parse_acf_typo_to_css( $header_typo );
    HubitatBuffer::pack_dynamic_css_to_buffer( '.clb-coming-soon .holder > h2', $_css );
}

$details_typo = HubitatOptions::get_global( 'coming_soon_details_typo' );
if ( $details_typo ) {
    $_css = HubitatHelper::parse_acf_typo_to_css( $details_typo );
    HubitatBuffer::pack_dynamic_css_to_buffer( '.clb-coming-soon .holder > p', $_css );
}

$counter_typo = HubitatOptions::get_global( 'coming_soon_countdown_typo' );
if ( $counter_typo ) {
    $_css = HubitatHelper::parse_acf_typo_to_css( $counter_typo );
    HubitatBuffer::pack_dynamic_css_to_buffer( '.clb-coming-soon .countdown-box .box-count .number', $_css );

    $_css = 'color:' . HubitatHelper::parse_acf_typo_to_css( $counter_typo, [ 'rule' => 'only_color' ] );
    HubitatBuffer::pack_dynamic_css_to_buffer( '.clb-coming-soon .countdown-box .box-time .box-label', $_css );
}

$background_color_css = '';
$background_image_css = '';
$background_image = '';

$background_type = HubitatOptions::get_global( 'coming_soon_background_background_type' );
if ( !$background_type ) {
    $background_type = 'color';
}

$background_color = HubitatOptions::get_global( 'coming_soon_background_background_color' );
if ( $background_color ) {
    $background_color_css = 'background:' . $background_color . ';';
}

if ( $background_type == 'image' ) {
    $background_image = HubitatOptions::get_global( 'coming_soon_background_background_image' );
}

if ( is_numeric( $background_image ) ) {
    $background_image = wp_get_attachment_image_url( $background_image, 'full' );
}

if ( $background_image ) {
    $background_image_css = 'background-image:url(\'' . esc_url( $background_image ) . '\');';
    $background_image_css .= HubitatHelper::get_background_image_css_by_type( 'coming_soon_background', 'global', true );
} else {
    // $background_image_css = 'background-image: none;';
}

if ( $background_color_css || $background_image_css ) {
    $_selector = '.clb-coming-soon';
    $_css = $background_color_css . $background_image_css;
    HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $_css );
}

if ( HubitatSettings::is_coming_soon_page() ) {
    HubitatBuffer::pack_dynamic_css_to_buffer( '.search-global.fixed', 'display: none' );
}