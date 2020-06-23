console.log('he');


jQuery(document).ready(function($){

  // Make the menu responsive
  $('#menu-main-navigation').slicknav();

  // Run the bxslider on testimonials
  $('.testimonials-list').bxSlider({
    mode: 'fade'
  });
});

window.onscroll = () => {
  let scroll = window.scrollY;
  
  fixedMenu(scroll);
}

// Adds a fixed menu on top

function fixedMenu(scroll) {
  const headerScroll = document.querySelector('.navigation-bar');
  const documentBody = document.querySelector('body');

  // In the case that the scroll is greater than 300, add some classes
  if(scroll>200) {
    documentBody.classList.add('ft');
    headerScroll.classList.add('fixed-top');
  } else {
    documentBody.classList.remove('ft');
    headerScroll.classList.remove('fixed-top');
  }
}