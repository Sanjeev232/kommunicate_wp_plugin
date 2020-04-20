<?php

/**
  * @package KommunicatePlugin
  * @author Kommunicate.io
 */

namespace Inc\Base;

class Activate
 {

   public static function activate()
   {
      //flush rewrite rules
      flush_rewrite_rules();
   }
}
