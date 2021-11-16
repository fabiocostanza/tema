		</div>

		<?php if ( !HubitatHelper::is_optimized_flow( 'footer' ) && !HubitatSettings::is_coming_soon_page() ): ?>
			<?php get_template_part( 'parts/elements/footer' ); ?>
		<?php endif; ?>
	</div>

	<?php get_template_part('parts/elements/notification'); ?>

	<?php if ( HubitatOptions::get( 'page_header_menu_style', 'style1' ) == 'style6' ) : ?>
	</div>
	<?php endif; ?>

	<?php if ( HubitatOptions::get( 'page_use_boxed_wrapper', false ) ) : ?>
	</div>
	<?php endif; ?>

	<?php wp_footer(); ?>
	</body>
</html>