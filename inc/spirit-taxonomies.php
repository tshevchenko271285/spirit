<?php
function cptui_register_my_taxes() {

	/**
	 * Taxonomy: Portfolio Category.
	 */

	$labels = array(
		"name" => __( "Portfolio Category", "spirit" ),
		"singular_name" => __( "Portfolio Category", "spirit" ),
	);

	$args = array(
		"label" => __( "Portfolio Category", "spirit" ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => true,
		"label" => "Portfolio Category",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'portfolio_category', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "portfolio_category", array( "portfolio" ), $args );
}

add_action( 'init', 'cptui_register_my_taxes' );
