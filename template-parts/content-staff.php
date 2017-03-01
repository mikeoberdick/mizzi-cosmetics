<?php
/**
 * Template for staff page
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

        <div class = "row text-center">

        <?php if( have_rows('staff_member') ):

        while ( have_rows('staff_member') ) : the_row(); ?>

        <?php
        $image = get_sub_field('picture');
        $size = 'staff-pic';
        $pic = $image['sizes'][ $size ];
        ?>

        <div class = "staff_card col-sm-4 mb-5">
            <img class = "rounded-circle mb-3" src = "<?php echo $pic; ?>" />
            <h3 class = "staff_name"><?php the_sub_field('name'); ?></h3>
            <h5 class = "staff_title"><?php the_sub_field('title'); ?></h5>
            <p><?php the_sub_field('bio'); ?></p>
        </div>

        <?php 
        endwhile;
        endif;
        ?>

        </div><!-- .row -->

    </div><!-- .entry-content -->

    <footer class="entry-footer">

        <?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

    </footer><!-- .entry-footer -->

</article><!-- #post-## -->
