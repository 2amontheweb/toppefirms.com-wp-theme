<?php
/**
 * Sponsor Section on Home Page
 *
 * @package Top_PE_Firms
 */


$sponsor_header = get_field('sponsor_header');
$sponsor_subheader = get_field('sponsor_subheader');

?>

<div id="home-sponsor" class="home-section">
  <a name="sponsor-the-program" class="scroll-destination"></a>
  <div class="container">
    <h2><?php echo $sponsor_header; ?></h2>
    <div class="header-bottom-border"></div>
    <h4><?php echo $sponsor_subheader; ?></h4>
    <div class="row">
      <div class="col-xs-6 col-sm-3 category">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/categories/investment-banking.jpg" alt="Hamilton &amp; Co. Investment Banking">
        <h4>Investment Banking</h4>
      </div>
      <div class="col-xs-6 col-sm-3 category">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/categories/banks.jpg" alt="Southern Bank">
        <h4>Banks</h4>
      </div>
      <div class="col-xs-6 col-sm-3 category">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/categories/private-jet.jpg" alt="Time Kills Deals Private Jet">
        <h4>Private Jet</h4>
      </div>
      <div class="col-xs-6 col-sm-3 category">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/categories/lenders.jpg" alt="Unitranche Lenders">
        <h4>Lenders</h4>
      </div>
      <div class="col-xs-6 col-sm-3 category">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/categories/law-firms.jpg" alt="Crenshaw and Hammond Law Firms" class="border">
        <h4>Law Firms</h4>
      </div>
      <div class="col-xs-6 col-sm-3 category">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/categories/consultancies.jpg" alt="Alpha Improvement Consultants">
        <h4>Consultancies</h4>
      </div>
      <div class="col-xs-6 col-sm-3 category">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/categories/wealth-management.jpg" alt="Private Equity Professionals Wealth Management" class="border">
        <h4>Wealth Management</h4>
      </div>
      <div class="col-xs-6 col-sm-3 category">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/categories/due-diligence.jpg" alt="Elliot West Due Diligence">
        <h4>Due Diligence</h4>
      </div>
    </div>
  </div>
</div>
