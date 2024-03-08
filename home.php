<?php get_header();

    // template Name:home
?>
    
    <!--  home page slider start -->
    
    <div id="main-slider" class="hmsplide slider">
        <div class="hmsplide__track">
            <ul class="hmsplide__list">
            <li class="hmsplide__slide__img">
                <img src="<?= get_template_directory_uri().'/assets/img/Droogboeketten_kunstboeketten_kunstplanten_bestel_je_bij_Loviy_-_desktop_c36eea96-c825-49af-819e-fde5a1e1b24a_1400x662_crop_center.webp'?>" alt="">
            </li>
            <li class="hmsplide__slide__img">
                <img src="<?= get_template_directory_uri().'/assets/img/VYPERLETE_PRO_1_3740x1266_crop_center.webp'?>" alt="">
            </li>
            <li class="hmsplide__slide__img">
                <img src="<?= get_template_directory_uri().'/assets/img/istockphoto-513247652-1024x1024.jpg'?>" alt="">
            </li>
            <!-- Add more slides here -->
            </ul>
        </div>
    </div> 
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