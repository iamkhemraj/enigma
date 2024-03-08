<?php 
if ( ! defined('ABSPATH')){
    exit;  // Exist if accessed directly
}

/** 
 * template Name:home
 */ 

/**
 *
 * It is an Important file of this theme. 
 * Do not delete or modify it without concerning any expert.
 * 
 */

get_header();

// Hero slider 
get_template_part( 'template-parts/template','slider' );

?>

<!-- Main section close -->
<section id="collection" class="collection">
<div class="container">
    <h2 class="section__title text-center p-2">New Collection</h2>
    <div class="collection__content" id="collection__content">
        <div class="container" style="background-color: rgb(255, 255, 255); padding: 16px;">
            <div class="row">
                <div class="col-md-12">
                    <div class="product__content">
                        <?php echo do_shortcode('[products limit="6" columns="6"]'); ?>
                    </div>
                    <div class="product__content">
                        <?php echo do_shortcode('[products limit="6" columns="6"  order="desc"]'); ?>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>
</section>
<?php get_footer(); ?>