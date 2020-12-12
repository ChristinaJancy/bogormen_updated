<?php
get_header(); // This fxn gets the header.php file and renders it 
?>

<div  class="banner-products">
	<h1 style="text-align:center;">Products</h1>
	<div id="products-tab">
<?php wp_nav_menu( array( 'container_class' => 'main-nav', 'theme_location' => 'products-tab' ) ); // Display the user-defined menu in Appearance > Menus ?>
			</div>
</div>

<h2> </h2>

<div class="row">
	<div class="col-6 col-s-12 product">
		<img src="<?php the_field('logo'); ?>">
	</div>
	<div class="col-6 col-s-12 product">
		<img src="<?php the_field('logo'); ?>">
	</div>
	<div class="col-6 col-s-12 product">
		<img src="<?php the_field('logo'); ?>">
	</div>
	<div class="col-6 col-s-12 product">
		<img src="<?php the_field('logo'); ?>" >
	</div>
</div>

<?php 'get_footer'(); // This fxn gets the footer.php file and renders it 
?>