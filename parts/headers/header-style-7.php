<?php
// Settings
$is_fixed = HubitatOptions::get( 'page_header_menu_fixed', true );
$mobile_is_fixed = HubitatOptions::get_global( 'page_header_mobile_menu_fixed' );
$fixed_initial_offset = HubitatOptions::get_global( 'page_header_fixed_initial_offset' );
$show_subheader = HubitatSettings::subheader_is_displayed();
$mobile_search_visibility = HubitatOptions::get( 'page_mobile_search_visibility', true );
$mobile_hamburger_position = HubitatOptions::get_global( 'page_header_mobile_menu_position', 'left' );
$header_dynamic_typo = HubitatOptions::get( 'page_header_dynamic_typography_color', false );

$header_classes = '';

if ( $show_subheader ) {
    $header_classes .= ' subheader_included';
}
if ( !$mobile_search_visibility ) {
    $header_classes .= ' without-mobile-search';
}
if ( $header_dynamic_typo ) {
    
    $header_classes .= ' header-dynamic-typo';
}

$header_classes .= ' mobile-hamburger-position-' . $mobile_hamburger_position .' hamburger-position-left';

$menu_type = HubitatOptions::get( 'page_header_menu_type', 'full' );

if ($menu_type == "both") {
    $header_classes .= ' both-types';
}

?>

<header id="masthead" class="header header-7<?php echo esc_attr($header_classes); ?>"
    <?php if ($mobile_is_fixed) {
        echo ' data-mobile-header-fixed="true"';
    } ?>
    <?php if ($fixed_initial_offset) {
        echo ' data-fixed-initial-offset="' . $fixed_initial_offset . '"';
    } ?>>

    <div class="header-wrap">
        <div class="header-wrap-inner vertical-inner">
            <div class="top-part">
                <div class="top-part-inner">
                    <?php get_template_part( 'parts/elements/menu_nav' ); ?>
                    <?php get_template_part( 'parts/elements/menu_logo' ); ?>
                </div>
            </div>

            <div class="middle-part">
                <div class="middle-part-inner">
                    <!-- Hamburger menu -->
                    <?php get_template_part( 'parts/elements/menu_hamburger' );?>
                </div>
                
            </div>

            <div class="bottom-part">
                <?php get_template_part('parts/elements/menu_optional'); ?>
                <?php if ( $mobile_hamburger_position == 'right'): ?>
                    <div class="mobile-hamburger -right">
                        <?php get_template_part( 'parts/elements/menu_hamburger' );?>
                    </div>
                <?php endif; ?>
                <div class="close-menu"></div>
            </div>
        </div>
    </div>
</header>
<?php get_template_part('parts/elements/menu_hamburger_fullscreen'); ?>