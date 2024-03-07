
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

<nav class="navigation">
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="block">
                  <nav class="navbar ">
                    <div class="container-fluid">
                      <!-- Brand and toggle get grouped for better mobile display -->
                      <div class=" navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                          <a class="navbar-brand" href="#">
                            <?php
                              $custom_logo_id = get_theme_mod( 'custom_logo' );
                              $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                              if ( has_custom_logo() ) {
                                echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '" class="logo_img" >';
                              } else {
                                echo '<h1>' . get_bloginfo('name') . '</h1>';
                              }
                            ?>
                          </a>

                      </div>

                      <!-- Collect the nav links, forms, and other content for toggling -->
                      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      
                        <?php
                          wp_nav_menu(array(
                            'container'  => 'ul',
                            'menu_class' =>  ' nav navbar-nav navbar-right ',
                            ));
                        ?>
                      </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                  </nav>
              </div>
          </div><!-- .col-md-12 close -->
      </div><!-- .row close -->
  </div><!-- .container close -->
</nav><!-- header close -->