<?php
/**
 * Meet the Top 50 Program Producer Section on Home Page
 *
 * @package Top_PE_Firms
 */


$meet_header = get_field('meet_header');
$meet_subheader = get_field('meet_subheader');
$media_kit_url = get_field('media_kit_url');

?>
<div id="home-meet" class="home-section">
  <a name="media-kit" class="scroll-destination"></a>
  <div class="container">
    <h2><?php echo $meet_header; ?></h2>
    <div class="header-bottom-border"></div>
    <h4><?php echo $meet_subheader; ?></h4>
    <div class="row">
      <div class="col-xs-12 col-sm-6 left">
        <div class="download-container">
          <img class="download-our-media-kit" src="<?php bloginfo('stylesheet_directory'); ?>/img/download-our-media-kit.png" alt="Download Our Media Kit">
          <a class="button-container" href="<?php echo $media_kit_url; ?>" target="_blank">
            <h4>Download our Media Kit to learn more about Bauer Rock Media Group.</h4>
            <img class="download-icon" src="<?php bloginfo('stylesheet_directory'); ?>/img/download-icon.png" alt="Download your PDF nomination form now.">
          </a>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 right">
        <div class="connecting-container" style="background-image:url(<?php bloginfo('stylesheet_directory'); ?>/img/top-50-producers.jpg);">
          <div class="overlay">
            <div class="text-container">
              <h4><strong>Connecting nearly 60,000 Middle Market Dealmakers Every Single Week Across the US</strong></h4>
              <h4 class="orgs">
                <span class="first">M &amp; A Chicago</span>
                <span>SBIC Weekly</span>
              </h4>
              <h4 class="orgs">
                <span class="first">Dealmaker South</span>
                <span>The Top 50</span>
              </h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
