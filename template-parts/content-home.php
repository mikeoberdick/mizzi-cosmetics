<div id = "heroSlider" class = "row mb">
    <?php echo do_shortcode('[rev_slider alias="hero_slider"]'); ?>
</div><!-- #heroSlider -->

<div id = "bestSellers" class = "row mb pb">

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

<hr class = "sep">

<div id = "hpCallout" class = "row mb pb sep">
    <div class = "col-md-4">
        <h3 class = "mb3">Let's Socialize</h3>
            <div id = "hpSocialIcons">
            <a href = "https://www.instagram.com/mizzicosmetics/" target = "_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href = "https://twitter.com/lipluxect" target = "_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href = "https://www.facebook.com/MIZZICOSMETICS/" target = "_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            </div>
    </div>
    
    <div class = "col-md-4">
        <h3>Become a Retailer</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta doloribus, corporis totam, numquam assumenda repellat eos dolore quas fuga molestiae minus labore quia culpa. Sint quos illo molestias eum voluptatibus?</p>
    </div>

    <div id = "hpSignup" class = "col-md-4">
        <h3>Join the Club</h3>
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <div id="mc_embed_signup"><!-- Begin MailChimp Signup Form -->
                <form action="//mizzicosmetics.us13.list-manage.com/subscribe/post?u=c8578af665b301edf76be65e9&amp;id=60287b84bb" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                    <div id="mc_embed_signup_scroll">
                    
                <div class="mc-field-group">
                    
                    <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="E-Mail Address">
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

</div><!-- #hpCallout -->

<hr class = "sep">

<div id = "instagramSlider" class = "row">
    <h1 class = "h1 col-sm-12"><span>@MIZZICOSMETICS</span></h1>
    <?php echo do_shortcode('[rev_slider alias="instagram"]'); ?>
</div><!-- #instagramSlider -->