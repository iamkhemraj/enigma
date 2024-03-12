<?php
 if ( ! defined( 'ABSPATH' ) ) {
	 exit; // Exit if accessed directly
 }

/**
 * 
 * This is important file don't delete this file. 
 * It is a single product page.
 *
 */

get_header( 'shop' ); 

	/**
	 * woocommerce_before_main_content hook.
	 *
	 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
	 * @hooked woocommerce_breadcrumb - 20
	 */
	do_action( 'woocommerce_before_main_content');
	while ( have_posts() ) {
		the_post(); 
		wc_get_template_part( 'content', 'single-product' ); 

	}; // end of the loop. 

	/**
	 * woocommerce_after_main_content hook.
	 *
	 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
	 */
	do_action( 'woocommerce_after_main_content' );

	/**
	 * woocommerce_sidebar hook.
	 *
	 * @hooked woocommerce_get_sidebar - 10
	 */
	//do_action( 'woocommerce_sidebar' );
	
get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
