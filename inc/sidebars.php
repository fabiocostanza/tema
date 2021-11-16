<?php

// Register sidebars
register_sidebar( array(
	'name' => esc_html__( 'Blog', 'hubitat' ),
	'id' => 'hubitat-sidebar-blog',
	'description' => esc_html__( 'Add widgets here.', 'hubitat' ),
	'before_widget' => '<section id="%1$s" class="widget %2$s">',
	'after_widget' => '</section>',
	'before_title' => '<h3 class="title widget-title">',
	'after_title' => '</h3>',
) );

register_sidebar( array(
	'name' => esc_html__( 'Pages', 'hubitat' ),
	'id' => 'hubitat-sidebar-page',
	'description' => esc_html__( 'Add widgets here.', 'hubitat' ),
	'before_widget' => '<section id="%1$s" class="widget %2$s">',
	'after_widget' => '</section>',
	'before_title' => '<h3 class="title widget-title">',
	'after_title' => '</h3>',
) );

register_sidebar( array(
	'name' => esc_html__( 'Footer column 1', 'hubitat' ),
	'id' => 'hubitat-sidebar-footer-1',
	'before_title' => '<h3 class="title widget-title">',
	'after_title' => '</h3>',
));

register_sidebar( array(
	'name' => esc_html__( 'Footer column 2', 'hubitat' ),
	'id' => 'hubitat-sidebar-footer-2',
	'before_title' => '<h3 class="title widget-title">',
	'after_title' => '</h3>',
));

register_sidebar( array(
	'name' => esc_html__( 'Footer column 3', 'hubitat' ),
	'id' => 'hubitat-sidebar-footer-3',
	'before_title' => '<h3 class="title widget-title">',
	'after_title' => '</h3>',
));

register_sidebar( array(
	'name' => esc_html__( 'Footer column 4', 'hubitat' ),
	'id' => 'hubitat-sidebar-footer-4',
	'before_title' => '<h3 class="title widget-title">',
	'after_title' => '</h3>',
));