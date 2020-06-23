console.log('he');


jQuery(document).ready(function($){

  // Make the menu responsive
  $('#menu-main-navigation').slicknav();

  // Run the bxslider on testimonials
  $('.testimonials-list').bxSlider({
    mode: 'fade'
  });
});