<?php
if ( !defined('ABSPATH') ) {
  exit;
}
// WooCommerce helper file.
require 'woocommerce.php';

// Enigma theme style script here
if ( !function_exists('engima_wp_enqueue_scripts') ) {
  add_action( 'wp_enqueue_scripts', 'engima_wp_enqueue_scripts' );
  function  engima_wp_enqueue_scripts() {
    wp_enqueue_style('enigma-style', get_template_directory_uri().'/assets/styles/css/app.css' );
    wp_enqueue_style('enigma-splide-min', get_template_directory_uri().'/assets/styles/css/splide.min.css' );
    wp_enqueue_style('enigma-all', get_template_directory_uri().'/assets/styles/css/all.css' );
    wp_enqueue_style('enigma-bootstrap', get_template_directory_uri().'/assets/styles/css/bootstrap.min.css' );
    // Start script

    wp_enqueue_script('enigma-script-splide', get_template_directory_uri() . '/assets/js/splide.min.js' );
    wp_enqueue_script('enigma-jquery-min', get_template_directory_uri() . '/assets/js/jquery.min.js' );
    wp_enqueue_script('enigma-main', get_template_directory_uri() . '/assets/js/main.js' );
    wp_enqueue_script('enigma-main-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js' );
  }
}

// Theme custom logo start here 
if ( !function_exists('enigma_custom_logo_setup')) {
  add_action( 'after_setup_theme', 'enigma_custom_logo_setup' );
  function enigma_custom_logo_setup() {
    $defaults = array(
      'height'               => 10,
      'width'                => 100,
      'flex-height'          => true,
      'flex-width'           => true,
      'header-text'          => array( 'site-title', 'site-description' ),
      'unlink-homepage-logo' => true, 
    );
    add_theme_support( 'custom-logo', $defaults );
  }
}

// Enigma wp theme nav menu.
if ( !function_exists('enigma_custom_logo_setup')) {
  add_action('init', 'register_my_menus');
  function register_my_menus() {
    register_nav_menus(
        array(
      'primary_menu' => __('Primary Menu'),
      // Add more menu locations if needed
        )
    );
  }
}
?>
