<?php
/**
 * creates the sidebar areas
 *
 * @package AVAZ
 */


// Register Sidebars
function avaz_sidebars() {

	$args = array(
		'id'            => 'service-sidebar',
		'class'         => 'widget_nav_menu',
		'name'          => __( 'Service Sidebars', 'text_domain' ),
		'description'   => __( 'Sidebar for Services', 'text_domain' ),
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
		'before_widget' => '<section id="%1$s" class="widget %2$s widget_nav_menu">',
		'after_widget'  => '</section>',
	);
	register_sidebar( $args );
	
	$args = array(
		'id'            => 'page-sidebar',
		'class'         => 'widget_nav_menu',
		'name'          => __( 'Page Sidebars', 'text_domain' ),
		'description'   => __( 'Sidebar for Pages', 'text_domain' ),
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
		'before_widget' => '<section id="%1$s" class="widget %2$s widget_nav_menu">',
		'after_widget'  => '</section>',
	);
	register_sidebar( $args );
	
	$args = array(
		'id'            => 'components-sidebar',
		'class'         => 'widget_nav_menu',
		'name'          => __( 'Components Sidebars', 'text_domain' ),
		'description'   => __( 'Sidebar for Components Page', 'text_domain' ),
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
		'before_widget' => '<section id="%1$s" class="widget %2$s widget_nav_menu">',
		'after_widget'  => '</section>',
	);
	register_sidebar( $args );
	
	$args = array(
		'id'            => 'footer-top',
		'name'          => __( 'Footer Top (x3)', 'text_domain' ),
		'description'   => __( 'Top part of Footer with three widget spaces', 'text_domain' ),
		'before_widget' => '<div id="%1$s" class="column %2$s"><div class="inner">',
		'after_widget'  => '</div></div>',
	);
	register_sidebar( $args );
	
	$args = array(
		'id'            => 'footer-middle',
		'name'          => __( 'Footer Middle (x2)', 'text_domain' ),
		'description'   => __( 'Middle part of Footer with 2 widget spaces', 'text_domain' ),
	);
	register_sidebar( $args );
	
	$args = array(
		'id'            => 'footer-bottom',
		'name'          => __( 'Footer Bottom (x2)', 'text_domain' ),
		'description'   => __( 'Bottom part of Footer with 2 widget spaces', 'text_domain' ),
		'before_widget' => '<div id="%1$s" class="column %2$s"><div class="inner">',
		'after_widget'  => '</div></div>',
	);
	register_sidebar( $args );

}
add_action( 'widgets_init', 'avaz_sidebars' );