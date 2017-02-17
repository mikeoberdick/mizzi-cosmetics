<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	
 	<?php

	if ( has_post_thumbnail() ) { ?>
	
	<header class="entry-header" style = "background-image: url('<?php the_post_thumbnail_url(); ?>')">
		<div class = "titleWrapper">
		<?php the_title( '<h1 class="entry-title page_header">', '</h1>' ); ?>
		</div>
	</header><!-- .entry-header -->
	
	<?php }

	else { ?>

    <header class="entry-header" style = "background-image: url('https://www.smashingmagazine.com/wp-content/uploads/2013/03/Wordpress-start-image.jpg')">
    	<div class = "titleWrapper">
		<?php the_title( '<h1 class="entry-title page_header">', '</h1>' ); ?>
		</div>
	</header><!-- .entry-header -->
	
	<?php } ?>

	<div class="entry-content">

		<?php the_content(); ?>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
