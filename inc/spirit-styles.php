<?php 
/**
 * Enqueue styles.
 */
function spirit_require_styles() {
	
	//wp_enqueue_style( 'thomsoon-style-awesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'spirit-style-bootstrap', get_template_directory_uri() . '/layouts/bootstrap.css' );
	wp_enqueue_style( 'spirit-style-font-awesome', get_template_directory_uri() . '/fonts/font-awesome/css/font-awesome.css' );
	wp_enqueue_style( 'spirit-style-carousel', get_template_directory_uri() . '/layouts/owl.carousel.css' );
	wp_enqueue_style( 'spirit-style-carousel', get_template_directory_uri() . '/layouts/owl.theme.css' );
	wp_enqueue_style( 'spirit-style-style', get_template_directory_uri() . '/layouts/style.css' );
	wp_enqueue_style( 'spirit-style-responsive', get_template_directory_uri() . '/layouts/responsive.css' );
	wp_enqueue_style( 'spirit-style-google-font-Lato', 'http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' );
	wp_enqueue_style( 'spirit-style-google-font-Lato', 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' );	
	wp_enqueue_style( 'spirit-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'spirit_require_styles' );