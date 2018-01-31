<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package spirit
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?php if ( has_custom_logo() ): ?>
         	 <?php the_custom_logo(); ?>
          <?php else : ?>
          	<a class="navbar-brand" href="<?php home_url() ?>"><?php bloginfo('name'); ?></a>
          <?php endif ?>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        	<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'container'       => false,
					'menu_class'      => 'nav navbar-nav navbar-right', 
					'walker'          => new Spirit_Header_Walker_Nav_Menu,
				) );
			?>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>