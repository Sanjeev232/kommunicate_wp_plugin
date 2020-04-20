<?php

 /**
  * @package KommunicatePlugin
  * @author Kommunicate.io
 */

/*
Plugin Name: Kommunicate Live Chat
Plugin URI: https://www.kommunicate.io/
Description: Delight your customers with intelligent chat-based support
Version: 1.0.0
Author: Kommunicate
Author URI: https://www.kommunicate.io/
Licence: GPLv2 or later
Licence URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: Live-Chat
*/

// if accessed directly abort

defined( 'ABSPATH' ) or die( 'Sorry, you are not allowed to access this page.!' );

// Require once the Composer Autoload
if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

/**
 * The code that runs during plugin activation
 */

function activate_kommunicate_plugin() {
	Inc\Base\Activate::activate();
}
register_activation_hook( __FILE__, 'activate_kommunicate_plugin' );

/**
 * The code that runs during plugin deactivation
 */

function deactivate_kommunicate_plugin() {
	Inc\Base\Deactivate::deactivate();
}
register_deactivation_hook( __FILE__, 'deactivate_kommunicate_plugin' );


/**
 * Initialize all the core classes of the plugin
 */

if ( class_exists( 'Inc\\Init' ) ) {
	Inc\Init::registerServices();
}





