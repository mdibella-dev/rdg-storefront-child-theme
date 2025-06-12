<?php
/**
 * The child theme's core file.
 *
 * @author  Marco Di Bella
 * @package rdg-storefront-child-theme
 */


/** Prevent direct access */

defined( 'ABSPATH' ) or exit;



/** Turn off notices */

error_reporting( E_ALL & ~E_NOTICE & ~E_WARNING );





/**
 * Remove the sidebar
 *
 * @see https://njengah.com/woocommerce-remove-sidebar-from-product-page/
 */

add_action( 'get_header', function() {
    remove_action( 'storefront_sidebar', 'storefront_get_sidebar', 10 );
} );



/**
 * Add a "sold out"-badge
 *
 * @see https://www.cloudways.com/blog/add-woocommerce-sold-out-badge/
 */
/*
add_action( 'woocommerce_before_shop_loop_item_title', function() {
    global $product;

    if ( !$product->is_in_stock() ) {
        echo '<span class="now_sold">Now Sold</span>';
    }
}); */



/**
 * Include files
 */

// Support for third-party plugins and components
require_once get_stylesheet_directory() . '/includes/third-party/germanized.php';

// Several Woocommerce settings
require_once get_stylesheet_directory() . '/includes/woocommerce/brands.php';
