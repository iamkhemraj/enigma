
	<?php
	if ( ! defined( 'ABSPATH' ) ) {
	exit; // Terminate script execution
	}
	?>
	<!DOCTYPE html>
	<html <?php language_attributes(); ?>>

	<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<script src="
	https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
	"></script>
	<link href="
	https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
	" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	<title>
		<?php
		if( is_404() ){
		echo 'Page Not Found - '.get_bloginfo('name');
		} elseif (is_front_page()) {
		echo get_bloginfo('name');
		} else{
		echo get_the_title() . ' - ' . get_bloginfo('name');
		}
		?>
	</title>
	<?php wp_head(); ?>
	
	</head>
	<body <?php body_class(); ?>>

	<nav class="nav" style="background-color: #DED6C0;">
		<div class="nav__container  container ">
			<nav class=" nav__navbar row" >
				<div class="col-md-4">				
					<a class="nav__logo navbar-brand " href="#">
						<?php
							$custom_logo_id = get_theme_mod('custom_logo');
							$logo = wp_get_attachment_image_src($custom_logo_id, 'full');
							if (has_custom_logo()) {
							echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '" class="logo_img">';
							} else {
							echo '<h1>' . get_bloginfo('name') . '</h1>';
							}
						?>
					</a>
				</div>
				<div class="col-md-4" style="margin: 50px 0px 0px 0px " >
					<?php get_search_form(); ?>
				</div>
				<div class="col-md-4 " style="margin: 50px 0px 0px 0px " >
					<?php do_shortcode('xoo_wsc_cart'); ?>
				</div>`
			</nav>
			<div class="row">
				<div class="col-md-12">
					<nav class="navbar navbar-expand-sm " style="margin-left:322px;">
						<div class="container">
							<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
							<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse" id="collapsibleNavbar">
								<?php
									wp_nav_menu(array(
									'container'  => 'ul',
									'menu_class' => 'nav navbar-nav navbar-center',
									));
								?>

							</div>
						</div>
					</nav>
				
				</div>
			</div>
		</div>
	</nav>
	<!-- header close -->