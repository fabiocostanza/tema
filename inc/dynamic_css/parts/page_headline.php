<?php
/*
	Header title custom style

	Table of contents: (you can use search)
	# 1. Variables
	# 2. Background type
	# 3. Background color
	# 4. Background image
	# 5. Title settings
	# 6. Subtitle settings
	# 7. Choose background overlay color
	# 8. Header title height
	# 9. Back button
	# 10. View
*/


# 1. Variables

$background_image = false;
$header_title_height = false;
$title_typo = false;
$subtitle_typo = false;
$single_product_title_typo = false;
$single_product_category_typo = false;
$single_product_price_typo = false;
$shop_grid_title_typo = false;
$shop_grid_category_typo = false;
$shop_grid_price_typo = false;
$shop_sale_tag_background_color = false;
$shop_out_stock_tag_background_color = false;
$overlay_color = false;
$shop_title_wrap_background_color = false;

$back_button_type = false;
$back_button_typo = false;
$background_color_css = '';
$background_image_css = '';
$shop_title_wrap_background_color_css = '';
$shop_sale_tag_background_color_css = '';
$shop_out_stock_tag_background_color_css = '';
$title_typo_css = '';
$subtitle_typo_css = '';
$overlay_color_css = '';
$header_title_height_css = '';


HubitatOptions::get( 'page_typography_settings' ); // trigger select chain
$typography_settings_select_type = HubitatOptions::get_last_select_type();

# 2. Background type
$background_type = HubitatOptions::get( 'page_header_title_background_type' );
$background_select_type = HubitatOptions::get_last_select_type();

if ( !$background_type ) {
	$background_type = 'color';
}

# 3. Background color
$background_color = HubitatOptions::get_by_type( 'page_header_title_background_color', $background_select_type );

if ( $background_color ) {
	$background_color_css = 'background-color:' . $background_color . ';';
}

# 4. Background image
if ( $background_type == 'image' ) {
	$background_image = HubitatOptions::get_by_type( 'page_header_title_background_image', $background_select_type );
}

if ( $background_type == 'featured' ) {
	$background_image = wp_get_attachment_image_url( get_post_thumbnail_id(), 'full' );

	if ( !$background_image ) { // get background image if featured doesn't existed
		$background_image = HubitatOptions::get_by_type( 'page_header_title_background_image', $background_select_type );
	}
}

if ( $background_image ) {
	$background_image_css = 'background-image:url(\'' . esc_url( $background_image ) . '\');';
	$background_image_css .= HubitatHelper::get_background_image_css_by_type( 'page_header_title', $background_select_type, true );
}


# 5. Title typography
$title_typo = json_decode( HubitatOptions::get_by_type( 'page_header_title_typo', $typography_settings_select_type ) );

/*
		// todo: ?
		}elseif ( HubitatOptions::get_global( 'woocommerce_single_product_title_typo' ) ) {
				$title_typo = json_decode( HubitatOptions::get_global( 'woocommerce_single_product_title_typo' ) );
			}
		}
*/

$title_typo_css = HubitatHelper::parse_acf_typo_to_css( $title_typo );


# 6. Subtitle typography
$subtitle_typo = json_decode( HubitatOptions::get_by_type( 'page_header_subtitle_typo', $typography_settings_select_type ) );

$subtitle_typo_css = HubitatHelper::parse_acf_typo_to_css( $subtitle_typo );

if ( HubitatSettings::page_is( 'ecommerce' ) ) {
	$shop_grid_title_typo_source = HubitatOptions::get_global( 'woocommerce_shop_product_title_typo' );
	$shop_grid_category_typo_source = HubitatOptions::get_global( 'woocommerce_shop_product_category_typo' );
	$shop_grid_price_typo_source = HubitatOptions::get_global( 'woocommerce_shop_product_price_typo' );

	if ( $shop_grid_title_typo_source ) {
		$shop_grid_title_typo = json_decode( $shop_grid_title_typo_source );
	}
	if ( $shop_grid_category_typo_source ) {
		$shop_grid_category_typo = json_decode( $shop_grid_category_typo_source );
	}
	if ( $shop_grid_price_typo_source ) {
		$shop_grid_price_typo = json_decode( $shop_grid_price_typo_source );
	}
}

$shop_grid_title_typo_css= HubitatHelper::parse_acf_typo_to_css( $shop_grid_title_typo );

$shop_grid_category_typo_css= HubitatHelper::parse_acf_typo_to_css( $shop_grid_category_typo );

$shop_grid_price_typo_css= HubitatHelper::parse_acf_typo_to_css( $shop_grid_price_typo );

if ( HubitatSettings::page_is( 'ecommerce' ) ) {
	$single_product_title_typo_source = HubitatOptions::get_local( 'woocommerce_single_product_title_typo' );
	$single_product_title_typo_source_global = HubitatOptions::get_global( 'woocommerce_single_product_title_typo' );
	$single_product_category_typo_source = HubitatOptions::get_global( 'woocommerce_single_product_category_typo' );
	$single_product_category_typo_source_global = HubitatOptions::get_global( 'woocommerce_single_product_title_typo' );
	$product_price_typo_source = HubitatOptions::get_local( 'woocommerce_single_product_price_typo' );
	$product_price_typo_source_global = HubitatOptions::get_global( 'woocommerce_single_product_price_typo' );

	// Single product
	if ( $single_product_title_typo_source ) {
		$single_product_title_typo = json_decode( $single_product_title_typo_source );
	}
	if ( !isset($single_product_title_typo->color) && $single_product_title_typo_source_global ) {
		$single_product_title_typo = json_decode( $single_product_title_typo_source_global );
	}

	// Single product
	if ( $single_product_category_typo_source ) {
		$single_product_category_typo = json_decode( $single_product_category_typo_source );
	}
	if ( !isset($single_product_category_typo->color) && $single_product_category_typo_source_global ) {
		$single_product_category_typo = json_decode( $single_product_category_typo_source_global );
	}

	// Single product
	if ( $product_price_typo_source ) {
		$single_product_price_typo = json_decode( $product_price_typo_source );
	}
	if ( !isset($single_product_price_typo->color) && $product_price_typo_source_global ) {
		$single_product_price_typo = json_decode( $product_price_typo_source_global );
	}
}

$single_product_title_typo_css = HubitatHelper::parse_acf_typo_to_css( $single_product_title_typo );
$single_product_category_typo_css = HubitatHelper::parse_acf_typo_to_css( $single_product_category_typo );

$single_product_price_typo_css = HubitatHelper::parse_acf_typo_to_css( $single_product_price_typo );

if ( HubitatSettings::page_is( 'ecommerce' ) ) {
	$shop_sale_tag_background_color =  HubitatOptions::get_global( 'woocommerce_shop_sale_tag_background_color' ) ;
	$shop_out_stock_tag_background_color =  HubitatOptions::get_global( 'woocommerce_shop_out_stock_tag_background_color' );
	$shop_title_wrap_background_color =  HubitatOptions::get_global( 'woocommerce_shop_title_wrap_background_color' ) ;
}

if ( $shop_sale_tag_background_color ) {
	$shop_sale_tag_background_color_css = 'background-color:' . $shop_sale_tag_background_color . ';';
}
if ( $shop_out_stock_tag_background_color ) {
	$shop_out_stock_tag_background_color_css = 'background-color:' . $shop_out_stock_tag_background_color . ';';
}

if ( $shop_title_wrap_background_color ) {
	$shop_title_wrap_background_color_css = 'background-color:' . $shop_title_wrap_background_color . ';';
}

# 7. Choose background overlay color
$overlay_color = HubitatOptions::get( 'page_header_title_overlay_color' );

if ( $overlay_color && substr( trim( $overlay_color ), 0, 4 ) != 'rgba' ) {
	$overlay_color = HubitatHelper::hex_to_rgba( $overlay_color, 0.6 );
}

if ( !$background_image || !HubitatOptions::get( 'page_header_title_use_overlay', true ) ) {
	$overlay_color = 'transparent';
}

if ( $overlay_color ) {
	$overlay_color_css = 'background-color:' . $overlay_color . ';';
}


# 8. Header title height

if ( HubitatOptions::get( 'page_header_title_fullscreen', false ) ) {
	$header_title_height = false;
} else {
	$header_title_height = HubitatOptions::get( 'page_header_title_height', null, false, true );
}

if ( $header_title_height ) {
	$header_title_height_css .= 'min-height:${height}px;';

	$header_title_height_css = HubitatHelper::parse_responsive_height_to_css( $header_title_height, $header_title_height_css );
}


# 9. Back button
$back_button_typo = HubitatOptions::get( 'page_header_previous_button_typo' );

# 10. View
if ( $back_button_typo ) {
	$back_button_typo_css = HubitatHelper::parse_acf_typo_to_css( $back_button_typo );
	$_selector = [
		'.clb-back-link',
		'.clb-back-link .arrow-icon'
	];
	HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $back_button_typo_css );
}

if ( $background_color_css || $background_image_css ) {
	$_selector = '.clb-page-headline .bg-image';
	$_css = $background_color_css . $background_image_css;
	HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $_css );
}

if ( $header_title_height_css ) {
	$_selector = '.clb-page-headline';

	if ( $header_title_height_css['desktop'] ) {
		HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $header_title_height_css['desktop'], 'desktop' );
	}
	if ( $header_title_height_css['tablet'] ) {
		HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $header_title_height_css['tablet'], 'tablet' );
	}
	if ( $header_title_height_css['mobile'] ) {
		HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $header_title_height_css['mobile'], 'mobile' );
	}
}

if ( $overlay_color_css ) {
	$_selector = '.clb-page-headline::after';
	HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $overlay_color_css );
}

// Title and subtitle
if ( $title_typo_css ) {
	$_selector = '.clb-page-headline .clb-title';
	HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $title_typo_css );
}

if ( $subtitle_typo_css ) {
	$_selector = [
		'.clb-page-headline .clb-post-meta',
		'.clb-page-headline .post-meta'
	];
	HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $subtitle_typo_css );
}

if ( $single_product_title_typo_css ) {
	$_selector = '.woo_c-product .product_title';
	HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $single_product_title_typo_css );
}

if ( $single_product_category_typo_css ) {
	$_selector = '.product_meta';
	HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $single_product_category_typo_css );
}

if ( $single_product_price_typo_css ) {
	$_selector = '.woo-summary-content .price .amount';
	HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $single_product_price_typo_css );
}

if ( $shop_grid_title_typo_css ) {
	$_selector = '.woo_c-products .product-item-title';
	HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $shop_grid_title_typo_css );
}

if ( $shop_grid_category_typo_css  ) {
	$_selector = '.woo_c-products .product-item-category';
	HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $shop_grid_category_typo_css );
}

if ( $shop_grid_price_typo_css  ) {
	$_selector = '.woo_c-products .product-item-price';
	HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $shop_grid_price_typo_css );
}

if ( $shop_sale_tag_background_color_css ) {
	$_selector = '.woocommerce .onsale';
	HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $shop_sale_tag_background_color_css );
}

if ( $shop_out_stock_tag_background_color_css ) {
	$_selector = '.woocommerce .onsale.out';
	HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $shop_out_stock_tag_background_color_css );
}

if ( $shop_title_wrap_background_color_css ) {
	$_selector = '.woo_c-products .product-item.product-item-boxed .product-item-details';
	HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $shop_title_wrap_background_color_css );
}
