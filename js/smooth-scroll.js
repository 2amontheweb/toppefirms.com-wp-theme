/*

  This is used throughout the app to allow for a smooth scroll
  when targetting an anchor on the same page as the link to.

*/

$(function() {
  $('.smooth-scroll[href*=#]:not([href=#])').click(function() {
    if (window.location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && window.location.hostname === this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
