<?php
/**
 * Enqueue scripts
 */
function spirit_scripts() {

	wp_enqueue_script( 'spirit-script-jquery-1-11-1', get_template_directory_uri() . '/js/jquery.1.11.1.js', array(), '20151215', true );

	wp_enqueue_script( 'spirit-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'spirit-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'spirit-script-modernizr', get_template_directory_uri() . '/js/modernizr.custom.js', array(), '20151215', false );

	wp_enqueue_script( 'spirit-script-bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), '20151215', true );

	wp_enqueue_script( 'spirit-script-smoothscroll', get_template_directory_uri() . '/js/SmoothScroll.js', array(), '20151215', true );
	
	wp_enqueue_script( 'spirit-script-jquery-isotope', get_template_directory_uri() . '/js/jquery.isotope.js', array(), '20151215', true );

	wp_enqueue_script( 'spirit-script-owl-carousel', get_template_directory_uri() . '/js/owl.carousel.js', array(), '20151215', true );

	wp_enqueue_script( 'spirit-script-main', get_template_directory_uri() . '/js/main.js', array(), '20151215', true );
	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'spirit_scripts' );
