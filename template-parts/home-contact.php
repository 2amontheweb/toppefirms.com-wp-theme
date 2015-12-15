<?php
/**
 * Nominate Section on Home Page
 *
 * @package Top_PE_Firms
 */

$contact_header = get_field('contact_header');
$contact_subheader = get_field('contact_subheader');

?>
<div id="home-contact" class="home-section">
  <a name="contact" class="scroll-destination"></a>
  <div class="container">
    <h2><?php echo $contact_header; ?></h2>
    <div class="header-bottom-border"></div>
    <h4 class="subheader"><?php echo $contact_subheader; ?></h4>
    <div class="row">
      <div class="col-xs-12 col-sm-6 first">
        <h3><strong>Adriana Jimenez</strong></h3>
        <h4>Content Manager</h4>
        <h4><a href="mailto:adriana.j@groupbrm.com">adriana.j@groupbrm.com</a></h4>
      </div>
      <div class="col-xs-12 col-sm-6">
        <h3><strong>Joe DiPietro</strong></h3>
        <h4>Group Publisher</h4>
        <h4><a href="mailto:publisher@groupbrm.com">publisher@groupbrm.com</a></h4>
      </div>
    </div>
    <img class="telephone-icon" src="<?php bloginfo('stylesheet_directory'); ?>/img/telephone-icon.png" alt="Telephone Icon">
    <h4><a href="tel:17732945995">1.773.294.5995</a></h4>
  </div>
</div>
