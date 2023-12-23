<?php 
require_once get_template_directory() . '/redux/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'twentytwenty_register_required_plugins' );

function twentytwenty_register_required_plugins() {

	$plugins = array(

		array(
            'required'  => true,
			'name'      => 'Redux Framework',
			'slug'      => 'redux-framework-4',
			'source'    => 'https://github.com/reduxframework/redux-framework-4/archive/master.zip',
		),

	);

	$config = array(
		'id'           => 'twentytwenty',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

		
	);

	tgmpa( $plugins, $config );
}
