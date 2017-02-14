<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div id="preFooter">
	<div class = "container">
		<div class = "row">

			<div id = "socialIcons" class = "col-sm-12 col-md-6">
				<a href = "https://www.instagram.com/mizzicosmetics/" target = "_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
	            <a href = "https://twitter.com/lipluxect" target = "_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
	            <a href = "https://www.facebook.com/MIZZICOSMETICS/" target = "_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			</div>

			<div id = "hpSignup" class = "col-sm-12  col-md-6">
			MAILCHIMP SIGNUP HERE
			</div>

		</div>
	</div>
</div>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_html( $container ); ?>">

	<div id = "footerWidgets" class = "row pb">

		<div class = "col-lg-3 col-sm-12">
			<?php dynamic_sidebar('footer_1'); ?>
		</div>
		
		<div class = "col-lg-3 col-sm-12">
			<?php dynamic_sidebar('footer_2'); ?>
		</div>
		
		<div class = "col-lg-3 col-sm-12">
			<?php dynamic_sidebar('footer_3'); ?>
		</div>
		
		<div class = "col-lg-3 col-sm-12">
			<?php dynamic_sidebar('footer_4'); ?>
		</div>


	</div><!-- #footerWidgets -->

	</div><!-- .container -->

	<div class = "container-fluid">

		<div id = "bottomFooter" class="row">

			<div class="col-md-12">

				<footer class="site-footer text-center" id="colophon">

					<div class="site-info">
					
					<span>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?></span><br />
					<span>Website by <a href = "http://www.designs4theweb.com">Designs 4 The Web</a></span>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- .container-fluid -->

</div><!-- wrapper end -->

</div><!-- #page-wrapper -->

<?php wp_footer(); ?>

<script>
jQuery('button').on('click', function(){
  jQuery('body').toggleClass('open');
});
</script>

</body>

</html>
