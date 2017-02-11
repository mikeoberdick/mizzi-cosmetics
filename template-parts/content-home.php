<div id = "heroSlider" class = "row mb">
    <?php echo do_shortcode('[rev_slider alias="hero_slider"]'); ?>
</div><!-- #heroSlider -->

<div id = "bestSellers" class = "row mb pb sep">

<h1 class = "h1 col-sm-12"><span>Best Sellers</span></h1>

<?php $args = array(
    'post_type' => 'product',
    'posts_per_page' => 4,
    'meta_key' => 'total_sales',
    'orderby' => 'meta_value_num',
    );

    $loop = new WP_Query( $args );

    if ( $loop->have_posts() ) {
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class = "col-md-3 col-sm-6">


<?php   do_action( 'woocommerce_before_shop_loop_item' );
        echo woocommerce_get_product_thumbnail();
        do_action( 'woocommerce_shop_loop_item_title' );
        do_action( 'woocommerce_after_shop_loop_item' );
 
            //<?php echo woocommerce_template_single_title();

        ?>
            </div>
    <?php
        endwhile;
    } else {
        echo __( 'No products found' );
    }

    wp_reset_postdata();
?>

</div><!-- #bestSellers -->

<div id = "hpCallout" class = "row mb pb sep">
    <div class = "col-md-4">
        <h3>Let's Socialize</h3>
            <div id = "hpSocialIcons">
            <a href = "#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href = "#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href = "#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            </div>
    </div>
    
    <div class = "col-md-4">
        <h3>Become a Retailer</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta doloribus, corporis totam, numquam assumenda repellat eos dolore quas fuga molestiae minus labore quia culpa. Sint quos illo molestias eum voluptatibus?</p>
    </div>

    <div class = "col-md-4">
        <h3>Join the Club</h3>
        <p>Mailchimp form</p>
    </div>

</div><!-- #hpCallout -->

<h1 class = "h1 text-center mb-3">@mizzicosmetics on Instagram</h1>

<div id = "instagramSlider" class = "row">
    <?php echo do_shortcode('[rev_slider alias="instagram"]'); ?>
</div><!-- #instagramSlider -->