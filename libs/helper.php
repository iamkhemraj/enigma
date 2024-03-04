<?php

// Enigma theme style script here
function  engima_wp_enqueue_scripts() {
  wp_enqueue_style( 'main-style', get_template_directory_uri().'/assets/styles/css/app.css' );
  wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'engima_wp_enqueue_scripts' );

// Theme custom logo start here 
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
add_action( 'after_setup_theme', 'enigma_custom_logo_setup' );

// Theme custom logo close.

// Enigma wp theme nav menu.
if ( ! function_exists( 'enigma_register_nav_menu' ) ) {

	function enigma_register_nav_menu(){
		register_nav_menus( array(
	    	'primary_menu' => __( 'Primary Menu', 'text_domain' ),
	    	'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
		) );
	}
	add_action( 'after_setup_theme', 'enigma_register_nav_menu', 0 );
}
?>