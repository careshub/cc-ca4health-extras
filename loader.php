<?php
/*
Plugin Name: CC CA4Health Extras
Description: Functionality additions for the CA4Health groups
Version: 0.1.0
Author: David Cavins
Licence: GPLv3
*/

define( 'CC_CA4HEALTH_EXTRAS_VERSION', '0.1.0' );

/**
 * Creates instance of CC_CA4Health_Extras
 * This is where most of the running gears are.
 *
 * @package CC CA4Health Extras
 * @since 0.1.0
 */

function cc_ca4health_extras_class_init(){
	// Get the helper functions and template tags
	// require( dirname( __FILE__ ) . '/ccgm-functions.php' );
	// Get the class fired up
	require( dirname( __FILE__ ) . '/class-ca4health-extras.php' );
	add_action( 'bp_include', array( 'CC_CA4Health_Extras', 'get_instance' ), 21 );
}
add_action( 'bp_include', 'cc_ca4health_extras_class_init' );