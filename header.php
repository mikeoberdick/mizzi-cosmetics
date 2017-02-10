<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php _e( 'Skip to content',
		'understrap' ); ?></a>

		<nav class="navbar navbar-toggleable-md navbar-default">

			<div class="<?php echo esc_html( $container ); ?>">

			<button class="menu-toggle"></button>

			<!-- The WordPress Menu goes here -->
				<?php 
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container' => 'nav',
						'container_class' => 'menu',
						'menu_class'      => 'menu',
						'fallback_cb'     => '',
						//'walker'          => new WP_Bootstrap_Navwalker(),
					)
				); ?>

					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>
					<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"
					   title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
						<?php bloginfo( 'name' ); ?>
					</a>
					
					<?php } else {
						the_custom_logo();
					} ?><!-- end custom logo -->

					<div id = "headerLinks">
						<a href = "#"><i class="fa fa-search" aria-hidden="true"></i></a>
						<a href = "#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
						<a href = "#"><i class="fa fa-user" aria-hidden="true"></i></a>
					</div>

			</nav><!-- .container -->

		</div><!-- .site-navigation -->

	</div><!-- .wrapper-navbar end -->