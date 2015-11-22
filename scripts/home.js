/*

  In this file, I will build a function that allows the home page to be full screen when loaded.
  The nav bar will be at the bottom, and will fix to the top when scrolled to.


// */
$(function () {
 // Defining a function to set size for #hero
    function fullscreen(){
        jQuery('#home-top').css({
          height: (jQuery(window).height() - 50)
        });
    }

    fullscreen();

  // Run the function in case of window resize
  jQuery(window).resize(function() {
       fullscreen();
    });

  var navbar = $('.navbar');
  var origOffsetY = navbar.offset().top;

  function scroll() {
    if ($(window).scrollTop() >= origOffsetY) {
      $('.navbar').addClass('sticky');
      $('.content').addClass('navbar-padding');
    } else {
      $('.navbar').removeClass('sticky');
      $('.content').removeClass('navbar-padding');
    }

  }

  document.onscroll = scroll;
});
