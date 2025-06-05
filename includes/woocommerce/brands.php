<?php
/**
 * Several settings for Woocommerce
 *
 * @author  Marco Di Bella
 * @package rdg-storefront-child-theme
 */


/** Prevent direct access */

defined( 'ABSPATH' ) or exit;



/**
 * Disabling nrands feature
 */

add_action( 'init', function() {
    update_option( 'wc_feature_woocommerce_brands_enabled', 'no' );
} );
