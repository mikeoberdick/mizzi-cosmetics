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

<div id = "topInfo" class = "hidden-xs-up">
	<div id = "topMessage" class = "text-center">
		<p><?php the_field('message_text', 'option'); ?><a href = "<?php the_field('message_link', 'option'); ?>"><?php the_field('link_text', 'option'); ?></a></p>
	</div>
	
	<div class="close" aria-label="Close">
	  	<span aria-hidden="true">&times;</span>
	</div>
</div>

<div id = "bannerPull"><i class="fa fa-arrow-down" aria-hidden="true"></i></div>

<!-- 	<div class = "col-md-4">
		<div id = "topSocial" class = "text-center">
			<a href = "https://www.instagram.com/mizzicosmetics/" target = "_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
		    <a href = "https://twitter.com/lipluxect" target = "_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
		    <a href = "https://www.facebook.com/MIZZICOSMETICS/" target = "_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
		</div>
    </div> -->
</div>

	<!-- ******************* The Navbar Area ******************* -->
	<div class="wrapper-fluid wrapper-navbar pt-5" id="wrapper-navbar">

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
						'container_class' => 'main_menu',
						'menu_class'      => 'main_menu',
						'fallback_cb'     => '',
						//'walker'        => new WP_Bootstrap_Navwalker(),
					)
				); ?>

					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>
					<a class="navbar-brand" rel="home" href=/mc"<?php echo esc_url( home_url( '/' ) ); ?>"
					   title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
						<?php bloginfo( 'name' ); ?>
					</a>
					
					<?php } else {
						the_custom_logo();
					} ?><!-- end custom logo -->

					<div id = "headerLinks">
				
						<a href = "<?php echo get_permalink( woocommerce_get_page_id( 'shop' ) );
 ?>" id = "headerShop" class = "btn btn-outline-primary btn-inline">SHOP <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
						
						<div id = "cartContents">
							<a href = "<?php echo wc_get_cart_url(); ?>"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
						<?php 
							$cartCount = WC()->cart->get_cart_contents_count();
							if ($cartCount != 0) {
								echo '<span>' . $cartCount . '</span>';
							}
								?>
						</div>


						<?php
						$myaccount_page_id = get_option( 'woocommerce_myaccount_page_id' );
						if ( $myaccount_page_id ) {
  						$myaccount_page_url = get_permalink( $myaccount_page_id );
						} ?>

						<a href = "<?php echo $myaccount_page_url ?>"><i class="fa fa-user" aria-hidden="true"></i></a>
					</div>

			</nav><!-- .container -->

		</div><!-- .site-navigation -->

	</div><!-- .wrapper-navbar end -->
