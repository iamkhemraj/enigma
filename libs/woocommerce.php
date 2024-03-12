<?php
if ( !defined('ABSPATH') ) {
  exit;
}
add_theme_support( 'woocommerce' );
add_theme_support( 'wc-product-gallery-slider' );

remove_theme_support( 'wc-product-gallery-slider' );

// Remove default wrapper class
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

// Remove breadcrumb
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );

// Adding custom woocommerce wrapper
if ( !function_exists('woocommerce_container_start_class') ) {
  add_action('woocommerce_before_main_content', 'woocommerce_container_start_class', 10);
  function woocommerce_container_start_class() {
    echo '
    <div id="main-woocommerce" class="woocomerce">
      <div class="woocomerce__container">
        <div class="woocomerce__container__content grid">
    ';
  }
}

if ( !function_exists('woocommerce_container_start_class') ) {
  add_action('woocommerce_after_main_content', 'woocommerce_container_end_class', 10);
  function woocommerce_container_end_class() {
    echo '
        </div>
      </div>
    </div>';
  }
}

if ( !function_exists('woocommerce_image_support') ) {
  add_action( 'after_setup_theme', 'woocommerce_image_support', 10 );
  function woocommerce_image_support() {
    add_theme_support( 'woocommerce', array(
        'woocommerce_gallery_thumbnail' => 3,
        'single_image_width'    => 1450,

        'product_grid'          => array(
            'default_rows'    => 3,
            'min_rows'        => 2,
            'max_rows'        => 8,
            'default_columns' => 4,
            'min_columns'     => 2,
            'max_columns'     => 5,
        ),
    ) );
  }

  add_filter( 'woocommerce_single	', function( $size ) {
    return array(
      'width' => 5,
      'height' => 10,
      'crop' => 0,
    );
  } );

}



	