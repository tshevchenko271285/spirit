<?php 
function spirit_route($str) {
	switch($str) {
		case 'banner' : get_template_part( 'template-parts/content', 'banner' ); break;
		case 'about' : get_template_part( 'template-parts/content', 'about' ); break;
		case 'team' : get_template_part( 'template-parts/content', 'team' ); break;
		case 'services' : get_template_part( 'template-parts/content', 'services' ); break;
		case 'clients' : get_template_part( 'template-parts/content', 'clients' ); break;
		case 'portfolio' : get_template_part( 'template-parts/content', 'portfolio' ); break;
		case 'testimonials' : get_template_part( 'template-parts/content', 'testimonials' ); break;
		case 'contact' : get_template_part( 'template-parts/content', 'contact' ); break;
		default : echo 'Not template for ' . $str;
	}
}