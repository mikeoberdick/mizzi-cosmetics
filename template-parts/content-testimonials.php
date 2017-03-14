<?php
/**
 * Template for Testimonails page
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

    <header class="entry-header" style = "background-image: url( <?php echo get_stylesheet_directory_uri() . '/img/mizzi_title_bg.jpg';?>)">
        <div class = "titleWrapper">
        <?php the_title( '<h1 class="entry-title page_header">', '</h1>' ); ?>
        </div>
    </header><!-- .entry-header -->
    
    <?php } ?>

    <div class="entry-content">

        <?php the_content(); ?>

        <?php if( have_rows('testimonial_content') ):
            while ( have_rows('testimonial_content') ) : the_row(); ?>

        <?php
            $name = get_sub_field('name');
            $image = get_sub_field('image');
            $review = get_sub_field('review');
            $rating = get_sub_field('star_rating');;
        ?>

        <div class = "row testimonial mt-5">
            <div class = "text-center testimonialLeft col-sm-4">
                <img class = "rounded-circle mt-3" src = "<?php echo $image; ?>" />
                <h3 class = "mt-3"><?php echo $name; ?></h3>
                <p><?php echo $rating; ?></p>
            </div>

            <div class = "testimonialRight col-sm-8">
                <p><?php echo $review; ?></p>
            </div>
        </div><!-- .row -->
        <?php 
        endwhile;
        endif;
        ?>

    </div><!-- .entry-content -->

    <footer class="entry-footer">

        <?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

    </footer><!-- .entry-footer -->

</article><!-- #post-## -->
