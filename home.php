<?php
/**
 * The blog template file.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<div class="wrapper" id="wrapper">

	<div class="<?php echo esc_html( $container ); ?>" id="content" tabindex="-1">

			<div class="content-area" id="primary">

				<main class="site-main" id="main">

					<div class="row">

							<?php

							//Include each category as a clickable card
							$categories = get_categories( array(
    						'orderby' => 'name',
    						'parent'  => 0
							) );

							foreach ( $categories as $category ) {
								$catLink = get_category_link( $category->term_id );
								$catName = $category->name;
								$catImg = get_field( 'image', 'category_'. $category->term_id .'');

								echo '<div class = "col-sm-3 categoryCard text-center">
										<a href = "' . $catLink . '"><div style = "background-image: url('.$catImg.');"></div></a>
										</div>';
							}
							?>

				</div><!-- .row -->
			</main><!-- #main -->
		</div><!-- #primary -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
