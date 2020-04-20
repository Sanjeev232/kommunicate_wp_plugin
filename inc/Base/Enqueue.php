<?php

 /**
  * @package KommunicatePlugin
  * @author Kommunicate.io
 */
 
namespace Inc\Base;

use \Inc\Base\BaseController;

class Enqueue extends BaseController
{
	
	public function register() {
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue' ) );
		add_action ('wp_enqueue_scripts', array( $this, 'enqueue_chatScripts') );
	}
	
	function enqueue() {
		// enqueue all our admin scripts here
		wp_enqueue_style( 'mypluginstyle', $this->plugin_url . 'assets/mystyle.css' );
		wp_enqueue_script( 'mypluginscript', $this->plugin_url . 'assets/myscript.js' );
	}

	function enqueue_chatScripts() {

		// enqueue chat script
		wp_enqueue_script( 'myplugin_chat_script', $this->plugin_url . 'assets/chatscript.js', '', '', true );
		
		//get value from wp_database
		$value = esc_attr(get_option( 'kommunicate_app_id' ) );

		// Localize the script with new value
		$APP_ID_Value = array(
			'input' =>  $value,			
		);
		wp_localize_script( 'myplugin_chat_script', 'APP_ID', $APP_ID_Value );
   }
}
