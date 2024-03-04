<?php
  if ( ! defined( 'ABSPATH' ) ) {
    exit; // Terminate script execution
  }
  require_once 'libs/helper.php';
  

  // add theme sport
add_action( 'after_setup_theme', 'setup_woocommerce_support' );

function setup_woocommerce_support()
{
add_theme_support('woocommerce');
}

?>