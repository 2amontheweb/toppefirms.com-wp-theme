$(function(){function n(){$("#home-top, #home-top .overlay").css({height:$(window).height()-50})}function o(){$(window).scrollTop()>=a?($(".navbar").addClass("sticky"),$(".content").addClass("navbar-padding")):($(".navbar").removeClass("sticky"),$(".content").removeClass("navbar-padding"))}n(),$(window).resize(function(){n()});var t=$(".navbar"),a=t.offset().top;document.onscroll=o}),$(function(){$(".smooth-scroll[href*=#]:not([href=#])").click(function(){if(window.location.pathname.replace(/^\//,"")===this.pathname.replace(/^\//,"")&&window.location.hostname===this.hostname){var n=$(this.hash);if(n=n.length?n:$("[name="+this.hash.slice(1)+"]"),n.length)return $("html,body").animate({scrollTop:n.offset().top},1e3),!1}})});