<?php
	$footer_is_visible = HubitatOptions::get( 'page_footer_visibility', true );
	$copyright_is_visible = HubitatOptions::get( 'page_footer_copyright_visibility', true );

	if ( !$footer_is_visible && !$copyright_is_visible ) return; // exit if not visible

	$copyright_alignment = HubitatOptions::get_global( 'footer_copyright_alignment', 'left_and_right' );
	$copyright_text_left = HubitatOptions::get_global( 'footer_copyright_left' );
	$copyright_text_right = HubitatOptions::get_global( 'footer_copyright_right' );
	$copyright_text_center = HubitatOptions::get_global( 'footer_copyright_center' );

	if ( !$copyright_text_right && !$copyright_text_left ) {
		$copyright_text_left = '&copy; 2020, Hubitat Theme. Made with passion by <a target="_blank" href="https://wearehubitat.com/">Hubitat</a>';
		$copyright_text_right = '<a target="_blank" href="#">Privacy & Cookie Policy</a> | <a target="_blank" href="#">Terms of Service</a>';
	}

	$project_layout_type = HubitatOptions::get( 'project_layout_type' );

	$footer_widgets_count = 0;
	if ( is_active_sidebar( 'hubitat-sidebar-footer-1' ) ) { $footer_widgets_count++; }
	if ( is_active_sidebar( 'hubitat-sidebar-footer-2' ) ) { $footer_widgets_count++; }
	if ( is_active_sidebar( 'hubitat-sidebar-footer-3' ) ) { $footer_widgets_count++; }
	if ( is_active_sidebar( 'hubitat-sidebar-footer-4' ) ) { $footer_widgets_count++; }

	$footer_classes = [ 'site-footer' ];
	if ( HubitatOptions::get( 'page_footer_is_sticky', false ) ) {
		$footer_classes[] = 'sticky';
	}

	if ( HubitatOptions::get( 'page_footer_fixed_typography_color', true ) ) {
		$footer_classes[] = 'clb__dark_section';
	}
	else 
	{
	  	$footer_classes[] = 'clb__light_section';
	}

	$page_container_classes = [ 'page-container' ];
	if ( !HubitatOptions::get( 'page_footer_is_wrapped', true ) ) {
		$page_container_classes[] = 'full';
	}

?>
<footer id="colophon" class="<?php echo esc_attr( implode( ' ', $footer_classes ) ); ?>">
	<?php if ( $footer_is_visible && $footer_widgets_count > 0 ) : ?>
	<div class="<?php echo esc_attr( implode( ' ', $page_container_classes ) ); ?>">
		<div class="widgets vc_row">
			<?php if ( is_active_sidebar('hubitat-sidebar-footer-1') ) : ?>
				<div class="vc_col-lg-<?php echo esc_attr( intval( 12 / $footer_widgets_count ) ); ?> vc_col-md-<?php echo esc_attr( intval( 12 / $footer_widgets_count ) ); ?> vc_col-sm-6 widgets-column">
					<ul><?php dynamic_sidebar( 'hubitat-sidebar-footer-1' ); ?></ul>
				</div>
			<?php endif; ?>

			<?php if ( is_active_sidebar( 'hubitat-sidebar-footer-2' ) ) : ?>
				<div class="vc_col-lg-<?php echo esc_attr( intval( 12 / $footer_widgets_count ) ); ?> vc_col-md-<?php echo esc_attr( intval( 12 / $footer_widgets_count ) ); ?> vc_col-sm-6 widgets-column">
					<ul><?php dynamic_sidebar( 'hubitat-sidebar-footer-2' ); ?></ul>
				</div>
			<?php endif; ?>

			<?php if ( is_active_sidebar('hubitat-sidebar-footer-3') ) : ?>
				<div class="vc_col-lg-<?php echo esc_attr( intval( 12 / $footer_widgets_count ) ); ?> vc_col-md-<?php echo esc_attr( intval( 12 / $footer_widgets_count ) ); ?> vc_col-sm-6 widgets-column">
					<ul><?php dynamic_sidebar( 'hubitat-sidebar-footer-3' ); ?></ul>
				</div>
			<?php endif; ?>

			<?php if ( is_active_sidebar('hubitat-sidebar-footer-4') ) : ?>
				<div class="vc_col-lg-<?php echo esc_attr( intval( 12 / $footer_widgets_count ) ); ?> vc_col-md-<?php echo esc_attr( intval( 12 / $footer_widgets_count ) ); ?> vc_col-sm-6 widgets-column">
					<ul><?php dynamic_sidebar( 'hubitat-sidebar-footer-4' ); ?></ul>
				</div>
			<?php endif; ?>
		</div>
	</div>
	<?php endif; ?>
	<?php if ( $copyright_is_visible ) : ?>
		<div class="site-info ">
			<div class="<?php echo esc_attr( implode( ' ', $page_container_classes ) ); ?>">
				<div class="vc_row">
					<div class="vc_col-md-12">
						<div class="site-info-holder <?php if ( $copyright_alignment == 'center' ) { echo 'text-center';} ?>">
							<?php if ( $copyright_alignment == 'center' ) : ?>
								<div>
									<?php echo wp_kses( $copyright_text_center, 'post' ); ?>
								</div>
							<?php else : ?>
								<div class="left">
									<?php echo wp_kses( $copyright_text_left, 'post' ); ?>
								</div>
								<div class="right">
									<?php echo wp_kses( $copyright_text_right, 'post' ); ?>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>
</footer>
