 document.addEventListener('DOMContentLoaded', function () {
  var main = new Splide('#main-slider', {
    type       : 'fade',
    heightRatio: 0.3,
    pagination : false,
    arrows     : true,
    cover      : true,
    autoplay   : true,
    interval   : 2000, // Adjust the interval as needed (in milliseconds)
  });

  main.mount();
});