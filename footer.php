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
				<h3>Let's Socialize!</h3>
					<a href = "https://www.instagram.com/mizzicosmetics/" target = "_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
		            <a href = "https://twitter.com/lipluxect" target = "_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
		            <a href = "https://www.facebook.com/MIZZICOSMETICS/" target = "_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			</div>

			<div id = "footerSignup" class = "col-sm-12  col-md-6">
				<h3>Join the Club</h3>
					<div id="mc_embed_signup"><!-- Begin MailChimp Signup Form -->
	                <form action="//mizzicosmetics.us13.list-manage.com/subscribe/post?u=c8578af665b301edf76be65e9&amp;id=60287b84bb" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
	                    <div id="mc_embed_signup_scroll">
	                    
	                <div class="mc-field-group">
	                    <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder = "E-Mail Address">
	                </div>
	                    <div id="mce-responses" class="clear">
	                        <div class="response" id="mce-error-response" style="display:none"></div>
	                        <div class="response" id="mce-success-response" style="display:none"></div>
	                    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
	                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_c8578af665b301edf76be65e9_60287b84bb" tabindex="-1" value=""></div>
	                    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-outline-primary btn-block"></div>
	                    </div>
	                </form>
	            </div><!--End mc_embed_signup-->
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

</div><!-- wrapper end -->

	<div class = "container-fluid">

		<div id = "bottomFooter" class="row">

			<div class="col-md-12">

				<footer class="site-footer text-center" id="colophon">

					<div class="site-info">
					
					<span>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?></span><br />
					<span>Website by <a href = "http://www.designs4theweb.com" target = "_blank">Designs 4 The Web</a></span>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- .container-fluid -->

<?php wp_footer(); ?>

<script>
jQuery('button').on('click', function(){
  jQuery('body').toggleClass('open');
});
</script>

</body>

</html>
