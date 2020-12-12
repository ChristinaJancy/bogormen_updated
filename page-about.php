<?php 

get_header(); // This fxn gets the header.php file and renders it ?> 
   
<div class="banner">
  <h1><?php the_field('about-banner-header'); ?></h1>
 	<?php the_field('about-banner-text'); ?>
</div>
<h2 style="text-align:center"><?php the_field('about-section1-header'); ?></h2>

<div class="row">
  <div class="col-6 col-s-12" >
	 <div id="about-img">
	
      <img src="<?php the_field('about-owner-image'); ?>" alt="Jesper">
	  </div>	
  </div>

  <div class="col-6 col-s-12">
  <div class="text-box">
        <h3><?php the_field('about-owner-name'); ?></h3>
        <p><?php the_field('about-owner-title'); ?></p>
        <?php the_field('about-owner-text'); ?>
      </div>
  </div>
</div>

<div class="mobile-section row">
  <div class="opening-hours mobile-only col-s-12">
    <h4><?php the_field('pc-footer-col1-header'); ?></h4>
    <?php the_field('pc-footer-col1-text'); ?>
  </div>
  <div class="find-us mobile-only col-s-12">
    <h4><?php the_field('pc-footer-col2-header'); ?></h4>
    <?php the_field('pc-footer-col2-text'); ?>
  </div>
</div>

<?php get_footer(); // This fxn gets the footer.php file and renders it ?>