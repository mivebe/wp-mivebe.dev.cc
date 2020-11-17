<?php
/*
Plugin Name: Portfolio for Elementor 
Plugin URI: https://wppug.com/creative-portfolio-plugin-demo/
Description: This plugin extend Elementor by adding the Portfolio functionality for free!
Author: RexDot
Version: 1.1.2
Author URI: http://dotrex.co
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
//Freemius
if ( ! function_exists( 'pe_fs' ) ) {
    // Create a helper function for easy SDK access.
    function pe_fs() {
        global $pe_fs;

        if ( ! isset( $pe_fs ) ) {
            // Include Freemius SDK.
            require_once dirname(__FILE__) . '/freemius/start.php';

            $pe_fs = fs_dynamic_init( array(
                'id'                  => '7226',
                'slug'                => 'portfolio-elementor',
                'type'                => 'plugin',
                'public_key'          => 'pk_75702ac7c5c10d2bfd4880c1c8039',
                'is_premium'          => false,
                'has_addons'          => false,
                'has_paid_plans'      => false,
                'menu'                => array(
                    'slug'           => 'elementor_portfolio',
                    'account'        => false,
                    'contact'        => false,
                ),
            ) );
        }

        return $pe_fs;
    }

    // Init Freemius.
    pe_fs();
    // Signal that SDK was initiated.
    do_action( 'pe_fs_loaded' );
}
//Starting the plugin
if ( ! class_exists('ELPT_portfolio_Post_Types') ) {
	/*
	 * Elementor Portfolio
	 */
	require ('portfolio/elementor-portfolio.php');
	/*
	 * Plugin Options
	 */
	require ('panel.php');
}
register_activation_hook( __FILE__, 'elpt_activate' );