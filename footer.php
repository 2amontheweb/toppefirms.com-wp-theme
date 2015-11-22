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
  </body>
</html>
