<?php
/**
 * Enqueue scripts.
 */
function spirit_require_scripts() {
	wp_enqueue_script( 'spirit-jquery', get_template_directory_uri() . '/js/jquery.1.11.1.js', array(), '20151215', true );

	wp_enqueue_script( 'spirit-modernizr', get_template_directory_uri() . '/js/modernizr.custom.js', array(), '20151215', false );
	wp_enqueue_script( 'spirit-bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), '20151215', true );
	wp_enqueue_script( 'spirit-SmoothScroll', get_template_directory_uri() . '/js/SmoothScroll.js', array(), '20151215', true );
	wp_enqueue_script( 'spirit-isotope', get_template_directory_uri() . '/js/jquery.isotope.js', array(), '20151215', true );
	wp_enqueue_script( 'spirit-carousel', get_template_directory_uri() . '/js/owl.carousel.js', array(), '20151215', true );
	wp_enqueue_script( 'spirit-main-script', get_template_directory_uri() . '/js/main.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'spirit_require_scripts' );