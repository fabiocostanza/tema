<?php
	if ( !HubitatOptions::get( 'page_show_arrow', true ) ) return;

	$header_classes = '';
	if ( HubitatOptions::get( 'page_show_arrow_mobile', true ) ) {
		$header_classes .= 'vc_visible-xs';
	}
	else $header_classes .= 'vc_hidden-xs';
?>
<a class="clb-scroll-top vc_hidden-md vc_hidden-sm <?php echo esc_attr( $header_classes ); ?>">
	<div class="clb-scroll-top-bar">
		<div class="scroll-track"></div>
	</div>
	<div class="clb-scroll-top-holder font-titles">
		<i class="ion ion-chevron-down ion-md-arrow-forward"></i>
		<!--<?php esc_html_e( 'Scroll to top', 'hubitat' ); ?>-->
	</div>
</a>