<?php get_header(); ?>
    <!-- Slide section start  -->
    <div id="main-slider" class="splide">
        <div class="splide__track">
            <ul class="splide__list">

            <!-- Main slider content -->
            <li class="splide__slide">
                <img src="<?= get_template_directory_uri().'/assets/img/istockphoto-1349910511-170667a.webp'?>" alt="">
            </li>
            <li class="splide__slide">
                <img src="<?= get_template_directory_uri().'/assets/img/istockphoto-1317277259-170667a.jpg'?>" alt="">
            </li>
            <li class="splide__slide">
                <img src="<?= get_template_directory_uri().'/assets/img/istockphoto-1347632685-170667a.webp'?>" alt="">
            </li>
            <!-- Add more slides here -->

            </ul>
        </div>
    </div>
    
    <section id="collection" class="collection">
        <div class="container">
            <h2 class="section_title">New Collection</h2>
            <div class="collection__content" id="collection__content">
                
                   <div class="container" style="background-color: rgb(255, 255, 255); padding: 16px;">
                   <div class="row">
                       <div class="col-md-12">
                           <?php echo do_shortcode('[products limit="3" columns="3"]'); ?>
                       </div>
                   </div>
               </div> 
              

            </div>
        </div>
    </section>

    <!-- Slide section close -->
<?php get_footer(); ?>