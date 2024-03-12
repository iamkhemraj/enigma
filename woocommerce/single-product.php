<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

get_header('shop');

/**
 * woocommerce_before_main_content hook.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 */
do_action('woocommerce_before_main_content');
?>
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <?php
            while (have_posts()) {
                the_post();
                wc_get_template_part('content', 'single-product');
            }; // end of the loop. 
            ?>
        </div>
        <div class="col-lg-4">
            <?php
            /**
             * woocommerce_sidebar hook.
             *
             * @hooked woocommerce_get_sidebar - 10
             */
            do_action('woocommerce_sidebar');
            ?>
        </div>
    </div>
</div>
<?php
/**
 * woocommerce_after_main_content hook.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action('woocommerce_after_main_content');

get_footer('shop');
