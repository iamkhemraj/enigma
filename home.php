<?php get_header(); ?>

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
<?php get_footer(); ?>