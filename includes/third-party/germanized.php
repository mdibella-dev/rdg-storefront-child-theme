<?php
/**
 * Modifications for third-party plugin.
 *
 * Plugin:  WP-Rocket
 *
 * @author  Marco Di Bella
 * @package rdg-theme
 */


/** Prevent direct access */

defined( 'ABSPATH' ) or exit;



/**
 * Remove the food-related taxonomies
 */

add_filter( 'woocommerce_gzd_register_food_taxonomies', function( $param ) {
    return false;
}, 10, 1 );
