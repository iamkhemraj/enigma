<?php get_header(); ?>




<div id="main-slider" class="splide">
  <div class="splide__track">
    <ul class="splide__list">
      <!-- Add your main slider content here -->
      <li class="splide__slide">
        <img src="<?= get_template_directory_uri().'/assets/img/01.jpg'?>" alt="">
      </li>
      <li class="splide__slide">
        <img src="<?= get_template_directory_uri().'/assets/img/download (1).jpg'?>" alt="">
      </li>
   
    </ul>
  </div>
</div>

<div id="thumbnail-slider" class="splide">
  <div class="splide__track">
    <ul class="splide__list">
      <!-- Add your thumbnail slider content here -->
      <li class="splide__slide">
        <img src="<?= get_template_directory_uri().'/assets/img/01.jpg'?>" alt="">
      </li>
      <li class="splide__slide">
        <img src="<?= get_template_directory_uri().'/assets/img/download (1).jpg'?>" alt="">
      </li>
     
    </ul>
  </div>
</div>

<!-- <script src="https://unpkg.com/@splidejs/splide@3.0.7/dist/js/splide.min.js"></script> -->




<?php get_footer(); ?>