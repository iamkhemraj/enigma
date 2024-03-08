<?php

if( !defined('ABSPATH' ) ){
  exit; // Exit if accesses directly
}

?>
 <!-- Collection section... -->
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