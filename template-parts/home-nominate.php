<?php
/**
 * Nominate Section on Home Page
 *
 * @package Top_PE_Firms
 */
$nomination_form_url = get_field('nomination_form_url');
?>

<div id="home-nominate" class="home-section">
  <a name="nomination-form" class="scroll-destination"></a>
  <div class="container">
    <h2>Nominate Your Firm</h2>
    <div class="header-bottom-border"></div>
    <h4>Tell us why your firm is a top 50 firm!</h4>
    <div class="row">
      <div class="col-xs-12 col-sm-6 left">
        <img class="nominate" src="<?php bloginfo('stylesheet_directory'); ?>/img/nominate-your-firm.jpg" alt="Nominate Your Firm">
      </div>
      <div class="col-xs-12 col-sm-6 right">
        <div class="download-container">
          <img class="hurry" src="<?php bloginfo('stylesheet_directory'); ?>/img/hurry-the-nomination-process-ends-soon.png" alt="Hurry! The nomination process ends soon!">
          <a class="button-container" href="<?php echo $nomination_form_url; ?>" target="_blank">
            <h4>Download your PDF nomination form now.</h4>
            <img class="download-icon" src="<?php bloginfo('stylesheet_directory'); ?>/img/download-icon.png" alt="Download your PDF nomination form now.">
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
