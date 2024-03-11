<?php

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly
}

$post_ID     = get_the_ID();
$text_dark   = get_field('text-dark',$post_ID);
$social_icon = !empty(get_field('social_icon',$post_ID)) ?  get_field('social_icon',$post_ID) : '' ;
 

?>
<!-- Footer start -->
<footer class="text-center text-lg-start text-white" style="background-color: #e52865" >
   <div class="container">
      <!-- Section: Social media -->
      <section class="d-flex justify-content-between p-4" style="background-color: #ebe412fa" >
         <div class="me-5">
            <span class="text-dark " style='color:#000;'><?= !empty($text_dark) ? $text_dark : 'Get connected' ; ?></span>
         </div> 
         <div class = "social_icon">
            
            <?php
               if(isset($social_icon) && !empty($social_icon)){

                  foreach( $social_icon as $icon_names){
                    foreach($icon_names as $icon){ ?>
                        <a href="<?= $icon['url']; ?>" class="text-white me-4">
                           <i class="fab fa-<?= ( $icon['title']); ?>"></i>
                        </a> <?php
                    }
                  }
               }   
            ?>
           
         </div>
         <!-- Right -->
      </section>
   
      <section class="">
         <div class="container text-center text-md-start mt-5">
            <div class="row mt-3 footer-content">  
               <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4"> 
                  <h6 class="text-uppercase fw-bold">Company name</h6>
                  <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #e60023; height: 2px" />
                  <p> Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
               </div>
               <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                  <h6 class="text-uppercase fw-bold">Products</h6>
                  <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #e60023; height: 2px"  />
                  <p> <a href="#!" class="text-white">MDBootstrap</a> </p>
                  <p> <a href="#!" class="text-white">MDWordPress</a> </p>
                  <p> <a href="#!" class="text-white">BrandFlow</a> </p>
                  <p> <a href="#!" class="text-white">Bootstrap Angular</a> </p>
               </div>
               <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
               
                  <h6 class="text-uppercase fw-bold">Useful links</h6>
                  <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #e60023; height: 2px"/>
                  <p> <a href="#!" class="text-white">Your Account</a> </p>
                  <p> <a href="#!" class="text-white">Become an Affiliate</a> </p>
                  <p> <a href="#!" class="text-white">Shipping Rates</a> </p>
                  <p> <a href="#!" class="text-white">Help</a> </p>
               </div>
               <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
               
                  <h6 class="text-uppercase fw-bold">Contact</h6>
                  <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #e60023; height: 2px" />
                  <p> <i class="fas fa-home mr-3"></i> New York, NY 10012, US </p>
                  <p> <i class="fas fa-envelope mr-3"></i> info@example.com </p>
                  <p> <i class="fas fa-phone mr-3"></i> + 01 234 567 88 </p>
                  <p> <i class="fas fa-print mr-3"></i> + 01 234 567 89 </p>
               </div>
            </div>
         </div>
      </section>
      
      <div class="text-center p-5" style="background-color: rgba(0, 0, 0, 0.2); padding: 23px;" > © 2024 Copyright:
         <a class="text-white" href="https://mdbootstrap.com/">MDEnigmaecommerce.com</a>
      </div>
   </div>
</footer>
<!-- Footer close -->

<?php wp_footer(); ?>
</body>
</html>