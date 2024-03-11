document.addEventListener('DOMContentLoaded', function () {
  var main = new Splide('#main-slider', {
    type       : 'fade',
    height     : '550px', // Custom height
    width      : '100%', // Custom width
    pagination : false,
    arrows     : true,
    cover      : true,
    autoplay   : true,
    interval   : 2000, // Adjust the interval as needed (in milliseconds)
  });

  main.mount();
});