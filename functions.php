<?php
if ( ! defined( 'ABSPATH' ) ) {
  exit; // Terminate script execution
}
//Helper file
require_once 'libs/helper.php';

// add setup_woocommerce_support
if(function_exists('setup_woocommerce_support')){

  add_action( 'after_setup_theme', 'setup_woocommerce_support' );
  function setup_woocommerce_support() {
    add_theme_support('woocommerce');
  }
}

?>