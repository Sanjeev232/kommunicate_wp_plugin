<?php

/**
 
  * Trigger this file on Plugin uninstall

  * @package KommunicatePlugin
  * @author Kommunicate.io
 */


if ( !defined ( 'WP_UNINSTALL_PLUGIN' ) ) {
    die;
}

  // Clear Database stored data

   $option_name = 'kommunicate_app_id';
   delete_option($option_name);

