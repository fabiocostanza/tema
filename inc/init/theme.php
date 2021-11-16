<?php

if ( ! function_exists( 'hubitat_setup' ) ) :

	function hubitat_setup() {
		load_theme_textdomain( 'hubitat', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
		add_theme_support( 'woocommerce' );
		set_post_thumbnail_size( 200, 200, true );

        add_image_size( 'hubitat_thumbnail_next_and_prev', 200, 140, true );

		add_image_size( 'hubitat_full', 1920, 9999, false );

		add_image_size( 'hubitat-shop-cropped', 500, 500, true );

		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'hubitat' ),
		) );

		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );
		add_theme_support( 'post-formats', array( 'video', 'gallery', 'audio', 'quote' ) );

		$GLOBALS['content_width'] = apply_filters( 'hubitat_content_width', 640 );

		$GLOBALS['hubitat_google_fonts'] = array();
		$GLOBALS['hubitat_icon_fonts'] = array();
		$GLOBALS['hubitat_required_scripts'] = array();

		if ( ! get_option( 'hubitat_version' ) || get_option( 'hubitat_version' ) < 10 ) {
			add_option( 'hubitat_version', 10, '', 'yes' );
		}

        // Adding support for core block visual styles.
        add_theme_support( 'wp-block-styles' );

        // Add support for full and wide align images.
        add_theme_support( 'align-wide' );

        // Add support for custom color scheme.
        // add_theme_support( 'disable-custom-colors' );

        $brand_color = HubitatOptions::get_global( 'page_brand_color', '#D90A2C' );

        add_theme_support( 'editor-color-palette', array(
            array(
                'name'  => esc_html__( 'Brand color', 'hubitat' ),
                'slug'  => 'brand-color',
                'color' => $brand_color,
            ),
            array(
                'name'  => esc_html__( 'Beige Dark', 'hubitat' ),
                'slug'  => 'beige_dark',
                'color' => '#A1824F',
            ),
            array(
                'name'  => esc_html__( 'Dark Strong', 'hubitat' ),
                'slug'  => 'dark_strong',
                'color' => '#24262B',
            ),
            array(
                'name'  => esc_html__( 'Dark Light', 'hubitat' ),
                'slug'  => 'dark_light',
                'color' => '#32353C',
            ),
            array(
                'name'  => esc_html__( 'Grey Strong', 'hubitat' ),
                'slug'  => 'grey_strong',
                'color' => '#838998',
            ),
        ) );

        // Add support for custom sizes
        // add_theme_support('disable-custom-font-sizes');
        add_theme_support( 'editor-font-sizes', array(
            array(
                'name' => esc_html__( 'Extra Small', 'hubitat' ),
                'size' => 13,
                'slug' => 'extra-small'
            ),
            array(
                'name' => esc_html__( 'Small', 'hubitat' ),
                'size' => 14,
                'slug' => 'small'
            ),
            array(
                'name' => esc_html__( 'Normal', 'hubitat' ),
                'size' => 15,
                'slug' => 'normal'
            ),
            array(
                'name' => esc_html__( 'Large', 'hubitat' ),
                'size' => 17,
                'slug' => 'large'
            ),
            array(
                'name' => esc_html__( 'Extra Large', 'hubitat' ),
                'size' => 20,
                'slug' => 'larger'
            )
        ) );

        // Add support for responsive embeds.
		add_theme_support( 'responsive-embeds' );

        // Add editor styles support
        add_editor_style( 'assets/style_editor/style-editor.css' );
		add_theme_support('editor-styles');

        remove_action('wp_head', 'rest_output_link_wp_head', 10);
	}

endif;

add_action( 'after_setup_theme', 'hubitat_setup' );

function hubitat_pingback_header() {
    if ( is_singular() && pings_open() ) {
        printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
    }
}

add_action( 'wp_head', 'hubitat_pingback_header' );
