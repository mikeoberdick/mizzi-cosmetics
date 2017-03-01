<?php
function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();

    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
}

// Add the Google Fonts
function mc_enqueue_gf() {
    wp_enqueue_style( 'Arimo', 'https://fonts.googleapis.com/css?family=Arimo' );
    wp_enqueue_style( 'Raleway', 'https://fonts.googleapis.com/css?family=Raleway' );
    wp_enqueue_style( 'Quicksand', 'https://fonts.googleapis.com/css?family=Quicksand' );
    wp_enqueue_style( 'Poiret One', 'https://fonts.googleapis.com/css?family=Poiret+One' );
}
add_action('wp_enqueue_scripts', 'mc_enqueue_gf');

// Add the animate.css library
function mc_enqueue_styles() {
   wp_enqueue_style( 'Animate CSS', get_stylesheet_directory_uri() . '/animate/animate.min.css' );
}
add_action( 'wp_enqueue_scripts', 'mc_enqueue_styles' );

// Add the animate.css library
function mc_theme_js() {
   wp_enqueue_script( 'MC Theme JS', get_stylesheet_directory_uri() . '/js/mc.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'mc_theme_js' );

// Add the jquery cookie library
function mc_cookie_js() {
   wp_enqueue_script( 'JS Cookie JS', get_stylesheet_directory_uri() . '/js/js-cookie.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'mc_cookie_js' );

 

// Register Sidebars
function mc_custom_sidebars() {

    $args = array(
        'id'            => 'footer_1',
        'class'         => 'footer_1',
        'name'          => 'Footer 1',
        'description'   => 'This widget area will appear in the first position of the footer.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="widgettitle">',
        'after_title'   => '</h5>',
    );
    register_sidebar( $args );

    $args = array(
        'id'            => 'footer_2',
        'class'         => 'footer_2',
        'name'          => 'Footer 2',
        'description'   => 'This widget area will appear in the second position of the footer.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="widgettitle">',
        'after_title'   => '</h5>',
    );
    register_sidebar( $args );

    $args = array(
        'id'            => 'footer_3',
        'class'         => 'footer_3',
        'name'          => 'Footer 3',
        'description'   => 'This widget area will appear in the third position of the footer.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="widgettitle">',
        'after_title'   => '</h5>',
    );
    register_sidebar( $args );

    $args = array(
        'id'            => 'footer_4',
        'class'         => 'footer_4',
        'name'          => 'Footer 4',
        'description'   => 'This widget area will appear in the fourth position of the footer.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="widgettitle">',
        'after_title'   => '</h5>',
    );
    register_sidebar( $args );

}
add_action( 'widgets_init', 'mc_custom_sidebars' );

//Add the ACF options page
if( function_exists('acf_add_options_page') ) {

    $args = array(
    
    /* (string) The title displayed on the options page. Required. */
    'page_title' => 'Mizzi Cosmetics Site Content',
    
    /* (string) The title displayed in the wp-admin sidebar. Defaults to page_title */
    'menu_title' => 'Site Content',
    
);

    acf_add_options_page( $args );
    
}

// Display 20 products on the shop page
add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 20;' ), 20 );

// Remove WC Breadcrumbs on shop page
add_action( 'init', 'mc_remove_wc_breadcrumbs' );
function mc_remove_wc_breadcrumbs () {
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
}

// Remove the add to cart button on the shop page
add_action( 'init', 'mc_remove_atc' );
function mc_remove_atc () {
    remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10, 0 );
}

// Remove the tabs on single product page
add_filter( 'woocommerce_product_tabs', 'mc_remove_product_tabs', 98 );

function mc_remove_product_tabs( $tabs ) {

    unset( $tabs['description'] );          // Remove the description tab
    unset( $tabs['reviews'] );          // Remove the reviews tab
    unset( $tabs['additional_information'] );   // Remove the additional information tab

    return $tabs;

}

// Add the content from single product page into a section titled "More Info"
add_action( 'woocommerce_after_single_product_summary', 'mc_single_product_more_info', 17 );
function mc_single_product_more_info () {
    echo '<div id = "productInfo"><h2>Product Info</h2><p>' . get_the_content() . '</p></div>';
}

// Add the staff thumbnail size
add_action( 'after_setup_theme', 'mc_thumb_sizes' );
function mc_thumb_sizes() {
    add_image_size( 'staff-pic', 275, 275, array( 'center', 'top' ) );
}

// Add the retailer role

add_role('retailer', __(
    'Retailer'),
    array(
        'read' => true, // true allows this capability
        'edit_posts' => true, // Allows user to edit their own posts
        'edit_pages' => true, // Allows user to edit pages
        'edit_others_posts' => true, // Allows user to edit others posts not just their own
        'create_posts' => true, // Allows user to create new posts
        'manage_categories' => true, // Allows user to manage post categories
        'publish_posts' => true, // Allows the user to publish, otherwise posts stays in draft mode
        'edit_themes' => false, // false denies this capability. User can’t edit your theme
        'install_plugins' => false, // User cant add new plugins
        'update_plugin' => false, // User can’t update any plugins
        'update_core' => false // user cant perform core updates
        )
);

// Apply a different tax rate for retailers
 
function mc_diff_rate_for_retail( $tax_class, $product ) {
    if ( is_user_logged_in() && current_user_can( 'retailer' ) ) {
    $tax_class = 'Zero Rate'; 
    }
return $tax_class; 
}

add_filter( 'woocommerce_product_tax_class', 'mc_diff_rate_for_retail', 1, 2 );

// Add Cash on Delivery for Retailer role

function mc_disable_cod( $available_gateways ) {
    if ( isset($available_gateways['cod']) && (!current_user_can('retailer') || ! is_user_logged_in()) ) {
    unset($available_gateways['cod']);
     }
     return $available_gateways;
}

add_filter('woocommerce_available_payment_gateways', 'mc_disable_cod', 99, 1);

//Create the custom woocommerce product fields
add_action( 'woocommerce_product_options_general_product_data', 'mc_add_custom_fields' );
function mc_add_custom_fields() {

    // Add the retailer price
    woocommerce_wp_text_input( array(
        'id' => '_retail-price',
        'type' => 'number',
        'label' => 'Retail Price',
        'description' => 'This is the price for retailers',
        'desc_tip' => 'true'
    ) );

}

//Save the custom woocommerce fields
add_action( 'woocommerce_process_product_meta', 'mc_save_custom_fields' );
function mc_save_custom_fields( $post_id ) {
    if ( ! empty( $_POST['_retail-price']) || empty( $_POST['_retail-price'] ) ) {
        update_post_meta( $post_id, '_retail-price', esc_attr( $_POST['_retail-price'] ) );
    }
}

// Display the retail price to retailers
function mc_retail_price ($price, $product){
    $retail_price = get_post_meta( $product->id, '_' . 'retail-price', true );
    if ( current_user_can ('retailer' ) && $retail_price ) {
        return $retail_price;
            }
    elseif ( current_user_can ('retailer' ) && !$retail_price || !current_user_can('retailer') ) {
        return $price;
            }
}

add_filter('woocommerce_get_price','mc_retail_price', 10, 2);


//Add Retail Price Column

function mc_add_admin_column ($columns){
    $columns['retail_price'] = 'Retail Price'; 
        return $columns;
}
add_filter( 'manage_edit-product_columns', 'mc_add_admin_column',15 );
 
//Show the Retail Price

function mc_display_retail_price_column ( $column, $post_id ) {
    if ( $column == 'retail_price' ) {
        echo get_post_meta( $post_id, '_' . 'retail-price', true );
    }
}
add_action( 'manage_product_posts_custom_column', 'mc_display_retail_price_column', 10, 2 );
