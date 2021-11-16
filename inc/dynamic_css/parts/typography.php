<?php
/*
	Typography custom style

	Table of contents: (you can use search)
	# 1. Variables
	# 2. Paragraph typography
	# 2.1. Text responsive typography
	# 2.2. Post text typography
	# 3. Headings typography
	# 3.1 Heading H1 responsive typography
	# 3.2 Heading H2 responsive typography
	# 3.3 Heading H3 responsive typography
	# 3.4 Heading H4 responsive typography
	# 3.5 Heading H5 responsive typography
	# 3.6 Heading H6 responsive typography
	# 3.7. Post title typography
	# 4. Subtitle typography
	# 4.1. Subtitle responsive typography
	# 5. View
	# 6. Subscribe popup
	# 6.1 Heading
	# 6.2 Description
	# 6.3 Background
*/

# 1. Variables

$title_typo = false;
$title_responsive_h1_size = false;
$title_responsive_h2_size = false;
$title_responsive_h3_size = false;
$title_responsive_h4_size = false;
$title_responsive_h5_size = false;
$title_responsive_h6_size = false;
$subtitle_typo = false;
$subtitle_responsive_sizes = false;
$text_typo = false;
$text_responsive_sizes = false;
$post_title_typo = false;
$post_text_typo = false;
$subcribe_popup_title_typo = false;
$subcribe_popup_description_typo = false;
$subscribe_background_color = false;
$subcribe_popup_task_typo = false;

# 2. Paragraph typography

HubitatOptions::get( 'page_typography_settings' ); // trigger select chain
$typography_settings_select_type = HubitatOptions::get_last_select_type();

$text_typo = HubitatOptions::get_global( 'page_text_typo' );

# 2.1. Paragraph responsive typography

$_text_font_sizes_raw = HubitatOptions::get_global( 'page_paragraphs_font_sizes' );
$text_responsive_sizes = HubitatHelper::parse_responsive_font_sizes( $_text_font_sizes_raw );

# 2.2. Post text typography

if ( HubitatSettings::page_is( 'single' ) ) {
	if ( in_array( $typography_settings_select_type, array( 'local', 'post' ) ) ) {
		$post_text_typo = HubitatOptions::get_by_type( 'page_text_typo', $typography_settings_select_type );
	}
}

# 3. Headings typography

$title_typo = HubitatOptions::get_global( 'page_headings_typo' );

$title_typo_h1 = HubitatOptions::get_global( 'page_headings_typo_h1' );

$title_typo_h2 = HubitatOptions::get_global( 'page_headings_typo_h2' );

$title_typo_h3 = HubitatOptions::get_global( 'page_headings_typo_h3' );

$title_typo_h4 = HubitatOptions::get_global( 'page_headings_typo_h4' );

$title_typo_h5 = HubitatOptions::get_global( 'page_headings_typo_h5' );

$title_typo_h6 = HubitatOptions::get_global( 'page_headings_typo_h6' );

# 3.1 Heading H1 responsive typography

$title_responsive_h1_sizes = HubitatHelper::parse_responsive_font_sizes( HubitatOptions::get_global( 'page_titles_h1_font_sizes' ) );

# 3.2 Heading H2 responsive typography

$title_responsive_h2_sizes = HubitatHelper::parse_responsive_font_sizes( HubitatOptions::get_global( 'page_titles_h2_font_sizes' ) );

# 3.3 Heading H3 responsive typography

$title_responsive_h3_sizes = HubitatHelper::parse_responsive_font_sizes( HubitatOptions::get_global( 'page_titles_h3_font_sizes' ) );

# 3.4 Heading H4 responsive typography

$title_responsive_h4_sizes = HubitatHelper::parse_responsive_font_sizes( HubitatOptions::get_global( 'page_titles_h4_font_sizes' ) );

# 3.5 Heading H5 responsive typography

$title_responsive_h5_sizes = HubitatHelper::parse_responsive_font_sizes( HubitatOptions::get_global( 'page_titles_h5_font_sizes' ) );

# 3.6 Heading H6 responsive typography

$title_responsive_h6_sizes = HubitatHelper::parse_responsive_font_sizes( HubitatOptions::get_global( 'page_titles_h6_font_sizes' ) );

# 3.7. Post title typography

if ( HubitatSettings::page_is( 'single' ) ) {
	if ( in_array( $typography_settings_select_type, array( 'local', 'post' ) )  ) {
		$post_title_typo = HubitatOptions::get_by_type( 'page_header_title_typo', $typography_settings_select_type );
	}
}

# 4. Subtitle typography

$subtitle_typo = HubitatOptions::get_global( 'page_subtitles_typo' );

# 4.1. Subtitle responsive typography

$_subtitle_font_sizes_raw = HubitatOptions::get_global( 'page_subtitles_font_sizes' );
$subtitle_responsive_sizes = HubitatHelper::parse_responsive_font_sizes( $_subtitle_font_sizes_raw );

# 5. View

// Global settings
/* Texts */

$_selector = [
	'body'
];
$_responsive_selector = $_selector;
$_css = HubitatHelper::parse_acf_typo_to_css( $text_typo );
HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $_css );

$_selector = [
	// 'input',
	// 'select',
	// 'textarea',
	// '.accordion-box .buttons h5.title',
	// '.woocommerce div.product accordion-box.outline h5'
];

$_responsive_selector = array_merge( $_responsive_selector, $_selector );
$_css = HubitatHelper::parse_acf_typo_to_css( $title_typo, ['rule' => 'exclude', 'fields' => ['font-size', 'color']] );
HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $_css );

if ( $text_responsive_sizes ) {
	$_responsive_selectors = implode( ',', $_responsive_selector );
	$_responsive_css = HubitatHelper::get_all_responsive_font_css( $text_responsive_sizes, $_responsive_selectors );
	HubitatBuffer::append_to_dynamic_css_buffer( $_responsive_css );
}

/* Headings */
$_selector = [
	'h1', 'h2', 'h3', 'h4', 'h5', 'h6',
	'.box-count',
	'.font-titles',
	'.hamburger-nav .menu',
	'.header.-mobile .nav .nav-item',
	'.btn, .button, a.button, input[type="submit"], a.btn-link',
	'.widget_shopping_cart_content .mini-cart-description .mini-cart-item-title > a',
	'.woo-c_product_name > a:not(.woo-c_product_category)',
	'.socialbar.inline a',
	'.vc_row .vc-bg-side-text',
	'.counter-box-count'
];

$_responsive_selector = $_selector;
$_css = HubitatHelper::parse_acf_typo_to_css( $title_typo );
HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $_css );

$_selector = [
	'h1',
];

$_responsive_selector = $_selector;
$_css = HubitatHelper::parse_acf_typo_to_css( $title_typo_h1 );
HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $_css );

$_selector = [
	'h2',
];

$_responsive_selector = $_selector;
$_css = HubitatHelper::parse_acf_typo_to_css( $title_typo_h2 );
HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $_css );

$_selector = [
	'h3',
];

$_responsive_selector = $_selector;
$_css = HubitatHelper::parse_acf_typo_to_css( $title_typo_h3 );
HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $_css );

$_selector = [
	'h4',
];

$_responsive_selector = $_selector;
$_css = HubitatHelper::parse_acf_typo_to_css( $title_typo_h4 );
HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $_css );

$_selector = [
	'h5',
];

$_responsive_selector = $_selector;
$_css = HubitatHelper::parse_acf_typo_to_css( $title_typo_h5 );
HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $_css );

$_selector = [
	'h6',
];

$_responsive_selector = $_selector;
$_css = HubitatHelper::parse_acf_typo_to_css( $title_typo_h6 );
HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $_css );

$_selector = [
	'.countdown-box .box-time .box-count',
	'.chart-box-pie-content'
];
$_responsive_selector = array_merge( $_responsive_selector, $_selector );
$_css = HubitatHelper::parse_acf_typo_to_css( $title_typo, ['rule' => 'exclude', 'fields' => ['line-height']] );
HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $_css );

$_selector = [
	'.countdown-box .box-time .box-count',
	'.chart-box-pie-content'
];

$_responsive_selector = array_merge( $_responsive_selector, $_selector );
$_css = HubitatHelper::parse_acf_typo_to_css( $title_typo, ['rule' => 'exclude', 'fields' => ['line-height']] );
HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $_css );

$_css = HubitatHelper::parse_acf_typo_to_css( $title_typo, ['rule' => 'include', 'fields' => ['font-family']] );
HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $_css );

$_selector = [
	'.portfolio-item h4',
	'.portfolio-item h4.title',
	'.portfolio-item h4 a',
	'.portfolio-item-2 h4',
	'.portfolio-item-2 h4.title',
	'.portfolio-item-2 h4 a'
];

$_css = HubitatHelper::parse_acf_typo_to_css( $title_typo, array( 'rule' => 'exclude', 'fields' => array( 'font-size', 'line-height' ) ) );
if ( $_css ) {
	$_css .= 'font-size:inherit;';
	$_css .= 'line-height:inherit;';
	HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $_css );
}

$_selector = '.blog-item h3.title';
$_css = HubitatHelper::parse_acf_typo_to_css( $title_typo, ['rule' => 'exclude', 'fields' => ['font-size', 'line-height']] );
if ( $_css ) {
	$_css .= 'line-height:initial;';
	HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $_css );

	HubitatBuffer::pack_dynamic_css_to_buffer( '.blog-item h3.title a', 'font-size:initial;' );
}

$_selector = '.portfolio-item-2 h4';
$_css = HubitatHelper::parse_acf_typo_to_css( $title_typo, ['rule' => 'exclude', 'fields' => ['font-size', 'color']] );
HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $_css );

// Responsive headings
if ( $title_responsive_h1_sizes ) {
	$_responsive_css = HubitatHelper::get_all_responsive_font_css( $title_responsive_h1_sizes, 'h1' );
	HubitatBuffer::append_to_dynamic_css_buffer( $_responsive_css );
}
if ( $title_responsive_h2_sizes ) {
	$_responsive_css = HubitatHelper::get_all_responsive_font_css( $title_responsive_h2_sizes, 'h2' );
	HubitatBuffer::append_to_dynamic_css_buffer( $_responsive_css );
}
if ( $title_responsive_h3_sizes ) {
	$_responsive_css = HubitatHelper::get_all_responsive_font_css( $title_responsive_h3_sizes, 'h3' );
	HubitatBuffer::append_to_dynamic_css_buffer( $_responsive_css );
}
if ( $title_responsive_h4_sizes ) {
	$_responsive_css = HubitatHelper::get_all_responsive_font_css( $title_responsive_h4_sizes, 'h4' );
	HubitatBuffer::append_to_dynamic_css_buffer( $_responsive_css );
}
if ( $title_responsive_h5_sizes ) {
	$_responsive_css = HubitatHelper::get_all_responsive_font_css( $title_responsive_h5_sizes, 'h5' );
	HubitatBuffer::append_to_dynamic_css_buffer( $_responsive_css );
}
if ( $title_responsive_h6_sizes ) {
	$_responsive_css = HubitatHelper::get_all_responsive_font_css( $title_responsive_h6_sizes, 'h6' );
	HubitatBuffer::append_to_dynamic_css_buffer( $_responsive_css );
}

/* Subheadings */
$_selector = [
	'p.subtitle',
	'.subtitle-font',
	'.heading .subtitle'
];

$_responsive_selector = $_selector;
$_css = HubitatHelper::parse_acf_typo_to_css( $subtitle_typo );
HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $_css );

$_selector = [
	
];
$_css = HubitatHelper::parse_acf_typo_to_css( $subtitle_typo, ['rule' => 'exclude', 'fields' => ['font-size', 'line-height']] );
HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $_css );

$_selector = [
	'.portfolio-item .subtitle-font',
	'.woocommerce ul.products li.product .subtitle-font.category',
	'.woocommerce ul.products li.product .subtitle-font.category > a'
];
$_css = HubitatHelper::parse_acf_typo_to_css( $subtitle_typo, array( 'rule' => 'exclude', 'fields' => array( 'font-size', 'line-height' ) ) );
if ( $_css ) {
	$_css .= 'font-size:inherit;';
	$_css .= 'line-height:inherit;';
	HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $_css );
}

$_selector = [
	'.contact-form.classic input::-webkit-input-placeholder',
	'.contact-form.classic textarea::-webkit-input-placeholder',
	'input.classic::-webkit-input-placeholder',
	'input.classic::-moz-placeholder'
];

$_responsive_selector = array_merge( $_responsive_selector, $_selector );
$_css = HubitatHelper::parse_acf_typo_to_css( $subtitle_typo );
HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $_css );

	// Moz placehoder
$_selector = [
	'.contact-form.classic input::-moz-placeholder',
	'.contact-form.classic textarea::-moz-placeholder'
];
$_css = HubitatHelper::parse_acf_typo_to_css( $subtitle_typo );
HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $_css );

	// MS placeholder
$_selector = [
	'input.classic:-ms-input-placeholder',
	'.contact-form.classic input:-ms-input-placeholder',
	'.contact-form.classic textarea:-ms-input-placeholder'
];

$_css = HubitatHelper::parse_acf_typo_to_css( $subtitle_typo );
HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $_css );

if ( $subtitle_responsive_sizes ) {
	$_responsive_selectors = implode( ',', $_responsive_selector );
	$_responsive_css = HubitatHelper::get_all_responsive_font_css( $subtitle_responsive_sizes, $_responsive_selectors );
	HubitatBuffer::append_to_dynamic_css_buffer( $_responsive_css );
}

// Post text
if ( HubitatHelper::parse_acf_typo_to_css( $post_text_typo ) ) {
	$_selector = '.clb-page-headline .subtitle';
	$_css = HubitatHelper::parse_acf_typo_to_css( $post_text_typo );
	HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $_css );
}

// Post headings
if ( HubitatHelper::parse_acf_typo_to_css( $post_title_typo ) ) {
	$_selector = [
		'#main .post .entry-content h1.page-title',
		'#main .post .entry-content h2.page-title',
		'#main .post .entry-content h3.page-title',
		'#main .post .entry-content h4.page-title',
		'#main .post .entry-content h5.page-title'
	];
	$_css = HubitatHelper::parse_acf_typo_to_css( $post_title_typo );
	HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $_css );
}

$subcribe_popup_title_typo = json_decode( HubitatOptions::get_global( 'text_subcribe_popup_typo' ) );

if ( $subcribe_popup_title_typo ) {
	$subcribe_popup_title_typo_css = HubitatHelper::parse_acf_typo_to_css( $subcribe_popup_title_typo );

	if ( $subcribe_popup_title_typo_css ) {
		$_selector = [
			'.clb-popup .clb-subscribe-content-headline',
			'.clb-popup .clb-subscribe .btn'
		];
		HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $subcribe_popup_title_typo_css );
	}
}

$subcribe_popup_description_typo = json_decode( HubitatOptions::get_global( 'details_text_subcribe_popup_typo' ) );
if ( $subcribe_popup_description_typo ) {
	$subcribe_popup_description_typo_css = HubitatHelper::parse_acf_typo_to_css( $subcribe_popup_description_typo );

	if ( $subcribe_popup_description_typo_css ) {
		$_selector = '.clb-popup .clb-subscribe .subscribe-content-subheader';
		HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $subcribe_popup_description_typo_css );
	}
}

$subscribe_background_color = HubitatOptions::get_global( 'subcribe_popup_background_color' );
if ( $subscribe_background_color ) {
	$subscribe_background_color_css = 'background-color: ' . $subscribe_background_color;

	if ( $subscribe_background_color_css ) {
		$_selector = '.subscribe-popup .subscribe';
		HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $subscribe_background_color_css );
	}
}

// posts title typo
if( HubitatOptions::get_global( 'posts_title_typo' ) ) {
    $posts_title_typo_css = HubitatHelper::parse_acf_typo_to_css( HubitatOptions::get_global( 'posts_title_typo' ) );

	if ( $posts_title_typo_css ) {
		$_selector = '.blog-grid-content .blog-grid-headline a';
		HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $posts_title_typo_css );
    }
}

// posts content typo
if( HubitatOptions::get_global( 'posts_content_typo' ) ) {
    $posts_content_typo_css = HubitatHelper::parse_acf_typo_to_css( HubitatOptions::get_global( 'posts_content_typo' ) );
    if ( $posts_content_typo_css ) {
		$_selector = '.blog-grid-content p';
		HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $posts_content_typo_css );
    }
}

// posts read more button typo
if( HubitatOptions::get_global( 'posts_readmore_typo' ) ) {
    $posts_readmore_typo_css = HubitatHelper::parse_acf_typo_to_css( HubitatOptions::get_global( 'posts_readmore_typo' ) );

	if ( $posts_readmore_typo_css ) {
		$_selector = '.blog-grid-content .btn-link';
		HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $posts_readmore_typo_css );
    }
}

// posts category typo
if( HubitatOptions::get_global( 'posts_category_typo' ) ) {
    $posts_category_typo_css = HubitatHelper::parse_acf_typo_to_css( HubitatOptions::get_global( 'posts_category_typo' ) );

	if ( $posts_category_typo_css ) {
		$_selector = '.blog-grid .post-details a.category';
		HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $posts_category_typo_css );
    }
}

// posts author typo
if( HubitatOptions::get_global( 'posts_author_typo' ) ) {
    $posts_author_typo_css = HubitatHelper::parse_acf_typo_to_css( HubitatOptions::get_global( 'posts_author_typo' ) );

	if ( $posts_author_typo_css ) {
		$_selector = '.blog-grid .author';
		HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $posts_author_typo_css );
    }
}

// posts date typo
if( HubitatOptions::get_global( 'posts_date_typo' ) ) {
    $posts_date_typo_css = HubitatHelper::parse_acf_typo_to_css( HubitatOptions::get_global( 'posts_date_typo' ) );

	if ( $posts_date_typo_css ) {
		$_selector = '.blog-grid .date';
		HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $posts_date_typo_css );
    }
}

// reading time typo
if ( $reading_time_typo = HubitatOptions::get_global( 'posts_reading_time_typo' ) ) {
	$reading_time_css = HubitatHelper::parse_acf_typo_to_css( $reading_time_typo );
	if ( $reading_time_css ) {
		$_selector = '.blog-grid-content .post-meta-estimate';
		HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $reading_time_css );
	}
}

if ( $social_networks_typo = HubitatOptions::get( 'page_social_networks_typo' ) ) {
	$social_networks_css = HubitatHelper::parse_acf_typo_to_css( $social_networks_typo );
	if ( $social_networks_css ) {
		$_selector = '.clb-social';
		HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $social_networks_css );	
	}
}

if ( $project_title_typo = HubitatOptions::get( 'project_title_typography' ) ) {
	$project_title_css = HubitatHelper::parse_acf_typo_to_css( $project_title_typo );
	if ( $project_title_css ) {
		$_selector = '.project-page .project-page-content .project-title .headline';
		HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $project_title_css );
	}
}

if ( $project_category_typo = HubitatOptions::get( 'project_category_typography' ) ) {
	$project_category_css = HubitatHelper::parse_acf_typo_to_css( $project_category_typo );
	if ( $project_category_css ) {
		$_selector = '.project-page .category-holder .category';
		HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $project_category_css );
	}
}

if ( $project_date_typo = HubitatOptions::get( 'project_date_typography' ) ) {
	$project_date_css = HubitatHelper::parse_acf_typo_to_css( $project_date_typo );
	if ( $project_date_css ) {
		$_selector = '.project-page span.date';
		HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $project_date_css );
	}
}

if ( $project_details_typo = HubitatOptions::get( 'project_details_typography' ) ) {
	$project_details_css = HubitatHelper::parse_acf_typo_to_css( $project_details_typo );
	if ( $project_details_css ) {
		$_selector = [
			'.project-page .project-page-content .project-meta li',
			'.project-page .project-page-content .project-meta .project-meta-title'
		];
		HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $project_details_css );
	}
}

if ( $project_link_typo = HubitatOptions::get( 'project_link_typography' ) ) {
	$project_link_css = HubitatHelper::parse_acf_typo_to_css( $project_link_typo );
	if ( $project_link_css ) {
		$_selector = '.single .project-page .project-page-content .btn-link';
		HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $project_link_css );
	}
}

if ( $project_description_typo = HubitatOptions::get( 'project_description_typography' ) ) {
	$project_description_css = HubitatHelper::parse_acf_typo_to_css( $project_description_typo );
	if ( $project_description_css ) {
		$_selector = '.project-page-content .project-description';
		HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $project_description_css );
	}
}

if ( $project_task_typo = HubitatOptions::get( 'project_task_typography' ) ) {
	$project_task_css = HubitatHelper::parse_acf_typo_to_css( $project_task_typo );
	if ( $project_task_css ) {
		$_selector = [
			'.project-page .project-task',
			'.project-page .project-task h6'
		];
		HubitatBuffer::pack_dynamic_css_to_buffer( $_selector, $project_task_css );
	}
}