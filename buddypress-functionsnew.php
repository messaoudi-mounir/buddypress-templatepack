<?php
	

/*
Plugin Name: BuddyPress template pack
Description: New template for BuddyPress 1.9
Version: 0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

	function templatepack_load() {

		// Register the default theme compatibility package
		bp_register_theme_package( array(
			'id'      => 'templatepack',
			'name'    => __( 'BuddyPress ', 'buddypress' ),
			'version' => bp_get_version(),
			'dir'     => trailingslashit( plugins_url('buddypress-templatepack/', __FILE__)),
			'url'     => trailingslashit( plugins_url('buddypress-templatepack/', __FILE__))
		) );

		// Register the basic theme stack. This is really dope.
		bp_register_template_stack( 'get_stylesheet_directory', 8 );
		bp_register_template_stack( 'get_template_directory',   10 );
		bp_register_template_stack( 'bp_get_theme_compat_dir',  12 );
	}
add_action( 'bp_init', 'templatepack_load' );
	
?>
