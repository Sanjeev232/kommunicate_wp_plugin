<?php

 /**
  * @package KommunicatePlugin
  * @author Kommunicate.io
 */

namespace Inc\Base;

use \Inc\Base\BaseController;

class SettingsLinks extends BaseController
{
   
   public function register() 
   {

    add_filter( "plugin_action_links_$this->plugin", array( $this, 'SettingsLink' ) );

   }

   public function SettingsLink( $links ) 
   {
      // add custom settings link
      
      $settings_link = '<a href="admin.php?page=kommunicate_plugin">Settings</a>';
      array_push( $links, $settings_link );
      return $links;
   }
}