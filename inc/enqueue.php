<?php

function hubitat_enqueue_admin_style()
{

    $hubitat_fonts_type = HubitatOptions::get_global( 'page_font_type', 'google_fonts' );
    if ( $hubitat_fonts_type == 'adobe_fonts' ) {
        $hubitat_adobekit_url = HubitatOptions::get_global( 'adobekit_url' );
        if ( $hubitat_adobekit_url ) {
            wp_enqueue_style( 'adobe-font', esc_url( '//use.typekit.net/' . $hubitat_adobekit_url . '.css' ) );
        }
    }

    wp_enqueue_style('ionicons-font', get_template_directory_uri() . '/assets/fonts/ionicons/css/ionicons.min.css');
    wp_enqueue_script('hubitat-admin-scripts', get_template_directory_uri() . '/assets/js/admin.js');

    // WPBackery front-end Select2
    if ( function_exists( 'vc_is_inline' ) && vc_is_inline() ) {
        wp_deregister_script( 'select2' );
        wp_enqueue_style('select2-style', get_template_directory_uri() . '/assets/css/select2.min.js' );
        wp_enqueue_script('jquery-select2', get_template_directory_uri() . '/assets/js/libs/jquery.select2.min.js', array('jquery') );
    }
}

add_action('admin_head', 'hubitat_enqueue_admin_style');

// Styles including
function hubitat_enqueue_own_styles() {
    wp_enqueue_style( 'hubitat-style', get_stylesheet_uri(), array(), HUBITAT_VERSION );
    if ( is_rtl() ) {
        wp_enqueue_style( 'hubitat-rtl', get_template_directory_uri() . '/rtl.css' );
    }

    get_template_part( '/inc/dynamic_css/index' );

    // User custom JS
    $hubitat_custom_js_header = HubitatOptions::get_global( 'header_javascript' );
    if ( $hubitat_custom_js_header ) {
        echo $hubitat_custom_js_header;
    }
}

add_action('wp_enqueue_scripts', 'hubitat_enqueue_own_styles');

function hubitat_enqueue_own_styles_secondary()
{
    wp_enqueue_style('ionicons', get_template_directory_uri() . '/assets/fonts/ionicons/css/ionicons.min.css', false);
    wp_enqueue_style('fontawesome-font', get_template_directory_uri() . '/assets/fonts/fa/css/fontawesome.min.css', false);

    if ( isset($GLOBALS['hubitat_google_fonts']) ) {
        $hubitat_google_fonts_string = HubitatHelper::parse_google_fonts_to_query_string($GLOBALS['hubitat_google_fonts']);
        if ( $hubitat_google_fonts_string ) {
            wp_enqueue_style('hubitat-global-fonts', $hubitat_google_fonts_string, array());
        }
    }

    // User custom JS
    $hubitat_custom_js_footer = HubitatOptions::get_global( 'footer_javascript' );
    if ( $hubitat_custom_js_footer ) {
        echo $hubitat_custom_js_footer;
    }
}

add_action('wp_footer', 'hubitat_enqueue_own_styles_secondary');

function deregister_my_styles() {
    wp_deregister_style( 'yith-wcan-frontend' );
}
add_action( 'wp_print_styles', 'deregister_my_styles', 100 );

// Scripts and libs
function hubitat_enqueue_own_scripts() {
    wp_enqueue_script('jquery-masonry');
    wp_enqueue_script('hubitat-slider', get_template_directory_uri() . '/assets/js/libs/jquery.clb-slider.js', array('jquery'), false, true);
    wp_enqueue_script('jquery-mega-menu', get_template_directory_uri() . '/assets/js/libs/jquery.mega-menu.min.js', array('jquery'), false, true);
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
    if ( HubitatHelper::is_script_required( 'underscore' ) ) {
        wp_enqueue_script( 'underscore' );
    }
    if ( HubitatHelper::is_script_required( 'aos' ) ) {
        wp_enqueue_script('aos', get_template_directory_uri() . '/assets/js/libs/aos.min.js', array('jquery'), false, true);
    }
    if ( HubitatHelper::is_script_required( 'isotope' ) ) {
        wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/js/libs/isotope.pkgd.min.js', array('jquery'), false, true );
    }
    if ( HubitatHelper::is_script_required('compare') ) {
        wp_enqueue_script('jquery-event-move', get_template_directory_uri() . '/assets/js/libs/jquery.event.move.min.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script('jquery-twentytwenty', get_template_directory_uri() . '/assets/js/libs/jquery.twentytwenty.min.js', array('jquery', 'jquery-event-move'), '1.0.0', true);
    }
    if ( HubitatHelper::is_script_required('countdown-box') ) {
        wp_enqueue_script('jquery-countdown', get_template_directory_uri() . '/assets/js/libs/jquery.countdown.min.js', array('jquery'), '1.0.0', true);
    }
    if ( HubitatHelper::is_script_required('typed') ) {
        wp_enqueue_script('typed', get_template_directory_uri() . '/assets/js/libs/typed.min.js', array('jquery'), '1.0.0', true);
    }
    if (HubitatHelper::is_script_required('google-maps')) {
        wp_enqueue_script('jquery-maps', get_template_directory_uri() . '/assets/js/libs/jquery.google-maps.min.js', array('jquery'), '1.0.0', true);
    }
    if ((isset($GLOBALS['hubitat_use_map']) && $GLOBALS['hubitat_use_map']) || HubitatHelper::is_script_required('google-maps')) { // Google Maps
        $hubitat_api_key = HubitatOptions::get_global( 'google_maps_api_key', '' );
        wp_enqueue_script('google-maps', '//maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&key=' . urlencode(esc_attr($hubitat_api_key)), false, null, true);
    }

    // Quick View variations
    if ( function_exists( 'WC' ) && HubitatOptions::get_global( 'woocommerce_quickview_button', true ) ) {
        wp_enqueue_script( 'wp-util' );

        $frontend_script_path = str_replace( array( 'http:', 'https:' ), '', WC()->plugin_url() ) . '/assets/js/frontend/';
        wp_enqueue_script( 'wc-add-to-cart-variation', $frontend_script_path . 'add-to-cart-variation.min.js', [ 'jquery', 'wp-util' ] );
    }

    wp_enqueue_script( 'hubitat-main', get_template_directory_uri() . '/assets/js/main.js', [ 'jquery' ], HUBITAT_VERSION, true );

    $hubitat_variables = array(
        'url' => esc_url(admin_url('admin-ajax.php')),
        'view_cart' => esc_html__('View Cart', 'hubitat'),
        'add_to_cart_message' => esc_html__('has been added to the cart', 'hubitat'),
    );

    if (function_exists('wc_get_cart_url')) {
        $hubitat_variables['cart_page'] = esc_url(wc_get_cart_url());
    }

    $hubitat_variables['subscribe_popup_enable'] = HubitatOptions::get_global( 'subscribe_popup_switch', false );
    if ( $hubitat_variables['subscribe_popup_enable'] ) {
        if ( HubitatOptions::get_global( 'subscribe_popup_display_trigger' ) ) {
            $hubitat_variables['subscribe_popup_type'] = HubitatOptions::get_global( 'subscribe_popup_display_trigger' );

            if ( $hubitat_variables['subscribe_popup_type'] == 'time' ) {
                $hubitat_variables['subscribe_popup_var'] = HubitatOptions::get_global( 'delay_subcribe_popup' );
            }
            if ( $hubitat_variables['subscribe_popup_type'] == 'scroll' ) {
                $hubitat_variables['subscribe_popup_var'] = HubitatOptions::get_global( 'subscribe_popup_scroll_percent' );
            }
        }
    }

    $hubitat_variables['notification_enable'] = HubitatOptions::get_global( 'notification_bar' );
    if ( $hubitat_variables['notification_enable'] ) {
        $hubitat_variables['notification_expires'] = HubitatOptions::get_global( 'notification_expires', 360 );
    }

    if ( HubitatOptions::get( 'page_dark_mode_switcher', false ) ) {
        $hubitat_variables['save_color_mode_state'] = HubitatOptions::get_global( 'page_dark_mode_save_state', true );
    }

    wp_localize_script('hubitat-main', 'hubitatVariables', $hubitat_variables);
}

add_action('wp_footer', 'hubitat_enqueue_own_scripts');

// Font icons pack
function hubitat_enqueue_icon_fonts()
{
    $hubitat_fonts = HubitatHelper::parse_iconset_to_url($GLOBALS['hubitat_icon_fonts']);
    if ($hubitat_fonts) {
        foreach ($hubitat_fonts as $key => $value) {
            wp_enqueue_style('icon-pack-' . $key, $value, array(), '2.0.0');
        }
    }
}

add_action('wp_footer', 'hubitat_enqueue_icon_fonts');