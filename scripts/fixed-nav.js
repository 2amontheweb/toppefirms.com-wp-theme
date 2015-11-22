/* globals $: false */
/* jshint strict: false */

$(document).ready(function () {

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

/* affix the navbar after scroll below header */
// $('#nav').affix({
//       offset: {
//         top: $('header').height()-$('#nav').height()
//       }
// });

// /* highlight the top nav as scrolling occurs */
// $('body').scrollspy({ target: '#nav' })

// /* smooth scrolling for scroll to top */
// $('.scroll-top').click(function(){
//   $('body,html').animate({scrollTop:0},1000);
// })

// /* smooth scrolling for nav sections */
// $('#nav .navbar-nav li>a').click(function(){
//   var link = $(this).attr('href');
//   var posi = $(link).offset().top;
//   $('body,html').animate({scrollTop:posi},700);
// });
