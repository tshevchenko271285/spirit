<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package spirit
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function spirit_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'spirit_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function spirit_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'spirit_pingback_header' );

/**
 * Require styles
 */
if (is_file( get_template_directory() . '/inc/spirit-styles.php') ) 
	require get_template_directory() . '/inc/spirit-styles.php';

/**
 * Require scripts
 */
if (is_file( get_template_directory() . '/inc/spirit-scripts.php') ) 
	require get_template_directory() . '/inc/spirit-scripts.php';

/**
 * Require Google Fonts
 */
if (is_file( get_template_directory() . '/inc/spirit-google-fonts.php') ) 
	require get_template_directory() . '/inc/spirit-google-fonts.php';

/**
 * Require Classes Settings Menu
 */
if (is_file( get_template_directory() . '/inc/spirit-menus.php') ) 
	require get_template_directory() . '/inc/spirit-menus.php';

/**
 * Require Function Enabled Items for Admin Menu
 */
if (is_file( get_template_directory() . '/inc/spirit-admin-menu.php') ) 
	require get_template_directory() . '/inc/spirit-admin-menu.php';