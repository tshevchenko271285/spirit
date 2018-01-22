<?php
/**
 * Enqueue styles.
 */
function spirit_styles() {
	
	wp_enqueue_style( 'spirit-style', get_stylesheet_uri() );

	wp_enqueue_style( 'spirit-style-bootstrap', get_template_directory_uri() . '/layouts/bootstrap.css' );
	wp_enqueue_style( 'spirit-style-awesome', get_template_directory_uri() . '/fonts/font-awesome/css/font-awesome.css' );
	wp_enqueue_style( 'spirit-style-owl-carousel', get_template_directory_uri() . '/layouts/owl.carousel.css' );
	wp_enqueue_style( 'spirit-style-owl-theme', get_template_directory_uri() . '/layouts/owl.theme.css' );
	wp_enqueue_style( 'spirit-style-custom', get_template_directory_uri() . '/layouts/style.css' );
	wp_enqueue_style( 'spirit-style-responsive', get_template_directory_uri() . '/layouts/responsive.css' );
}
add_action( 'wp_enqueue_scripts', 'spirit_styles' );