<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Top_PE_Firms
 */

?>
      <a name="contact"></a>
      <footer id="footer" class="site-footer" role="contentinfo">
        <div id="footer-contact">
          <div class="container">
            <h2>Contact Us</h2>
            <div class="header-bottom-border"></div>
            <h4>We would love to answer any questions you may have!</h4>
            <div class="row">
              <div class="col-xs-12 col-sm-6">
                <h3>Adriana Jimenez</h3>
                <h4>Content Manager</h4>
                <h4><a href="mailto:adriana.j@groupbrm.com">adriana.j@groupbrm.com</a></h4>
              </div>
              <div class="col-xs-12 col-sm-6">
                <h3>Joe DiPietro</h3>
                <h4>Group Publisher</h4>
                <h4><a href="mailto:publisher@groupbrm.com">publisher@groupbrm.com</a></h4>
              </div>
            </div>
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/telephone-icon.png" alt="Telephone Icon">
            <h4><a href="tel:17732945995">1.773.294.5995</a></h4>
          </div>
        </div>
        <div class="bottom-logo-container">
          <div class="container">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-small.png" alt="2016 Top 50 Middle Market Private Equity Firms - Small">
          </div>
        </div>
      </footer><!-- #colophon -->
      <?php wp_footer(); ?>
    </div><!-- #page -->



<style>
  * {
      font-family:arial;
      margin:0;
      padding:0;
  }

  .logo, .intro, .navbar, .content {
      padding:10px;
  }
  .navbar {

      background:#428bca;
      color:#fff;
      height:50px;
      line-height:30px;
      letter-spacing:1px;
      width:100%;
  }
  .content {
      margin-top:10px;
  }
  .navbar-padding {
      padding-top:40px;
  }
  .content p {
      margin-bottom:20px;
  }
  .sticky {
      position:fixed;
      top:0;
  }

/*  html,
body {
 height: 100%;
  padding-top:50px;
}

.row {
  margin-left:0px;
  margin-right:0px;
}*/

/* Wrapper for page content to push down footer */
/*#wrap {
  min-height: 100%;
  height: auto !important;
  height: 100%;*/
  /* Negative indent footer by its height */
  /*margin: 0 auto -60px;*/
  /* Pad bottom by footer height */
  /*padding: 0 0 60px;*/
/*}*/

/* Set the fixed height of the footer here */
/*#footer {
  height: 60px;
  background-color: #f5f5f5;
  margin-top:50px;
  padding-top:20px;
  padding-bottom:20px;
}

header {
    height:100%;
  min-height:500px;
}

#wrap > .container {
  padding: 60px 15px 0;
}
.container .credit {
  margin: 20px 0;
}

#footer {
  background-color:#414141;
}

#footer a {
  color:#efefef;
}

#topNav {
  z-index:-1;
}

#nav {
  width: 100%;
}

#nav.affix-top {
   position: absolute;
   top:0;
   left:0;
   z-index:10;
   height:54px;
   background-color:transparent;
   border:0;
}

#nav.affix {
   position: fixed;
   top: 0;
   z-index:10;
   -webkit-transition: all .6s ease-in-out;
}

#footer > .container {

}

@media (min-width: 767px) {
  .navbar-nav.nav-justified > li{
      float:none;
  }
}

.navbar-nav {
  margin: 1px 1px;
}

.navbar-toggle {
  outline:0;
}

.divider {
  height:50px;
}

.panel {
  border-width:0;
}

@media (max-width: 768px) {
  header {

  }
}

.scroll-top {
   position:fixed;
   bottom:0;
   right:6%;
   z-index:100;
   background: #f2f3f2;
   font-size:24px;
   border-top-left-radius:3px;
   border-top-right-radius:3px;
}
.scroll-top a:link,.scroll-top a:visited {
  color:#222;
}

section {
  color: #ffffff;
  min-height: 400px;
  height: auto !important;
  height: 100%;
  padding-top:100px;
}*/

</style>

<script>

  // jshint ignore: start

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

</script>




  </body>
</html>
