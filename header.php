    <?php
    if (!defined('ABSPATH')) {
        exit; // Terminate script execution
    }
    ?>
    <!DOCTYPE html>
    <html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>
            <?php
            if (is_404()) {
                echo 'Page Not Found - ' . get_bloginfo('name');
            } elseif (is_front_page()) {
                echo get_bloginfo('name');
            } else {
                echo get_the_title() . ' - ' . get_bloginfo('name');
            }
            ?>
        </title>
        <?php wp_head(); ?>

    </head>

    <body <?php body_class(); ?>>

        <nav class="nav sticky-top pb-3 pt-3">
            <div class="nav__container container">
                <div class=" nav__row row align-items-center">
                    <div class="nav__content col-md-3">
                        <!-- Logo -->
                        <a class="nav__content__logo" href="<?= site_url('/');?>" style="text-decoration:none;"> <?php
                            $custom_logo_id = get_theme_mod('custom_logo');
                            $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                            if (has_custom_logo()) {
                                echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '" class="logo_img">';
                            } else {
                                echo '<h1>' . get_bloginfo('name') . '</h1>';
                            }  ?>
                        </a>
                    </div>
                    <div class=" nav__content  col-md-6">
                        <!-- Navigation Menu -->
                        <nav class=" navbar-expand-sm justify-content-center">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="collapsibleNavbar"> <?php
                                wp_nav_menu(array(
                                    'container'  => 'ul',
                                    'menu_class' => 'navbar-nav',
                                )); ?>
                            </div>
                        </nav>
                    </div>
                    <div class=" nav__content col-md-3">
                        <!-- Search Input -->
                        <?php get_search_form();?>				
                    </div>
                </div>
            </div>
        </nav>
        <!-- header close -->

    </body>

    </html>
