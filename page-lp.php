<?php
get_header(); // This fxn gets the header.php file and renders it 
?>

<div  class="banner-products">
	<h1 style="text-align:center;">Produkter</h1>
	<div id="products-tab">
<?php wp_nav_menu( array( 'container_class' => 'main-nav', 'theme_location' => 'products-tab' ) ); // Display the user-defined menu in Appearance > Menus ?>
			</div>
</div>
	<h2 class="sub-banner">LP</h2>


<div class="row" id="products">
	<div class="col-6 col-s-12 product">
		<img src="https://content.gucca.dk/covers/big/andet/andet/21_344877.jpg">
	</div>
	<div class="col-6 col-s-12 product">
		<img src="https://content.gucca.dk/covers/big/andet/andet/21_344877.jpg">
	</div>
	<div class="col-6 col-s-12 product">
		<img src="https://content.gucca.dk/covers/big/andet/andet/21_344877.jpg">
	</div>
	<div class="col-6 col-s-12 product">
		<img src="https://content.gucca.dk/covers/big/andet/andet/21_344877.jpg" >
	</div>
</div>

<?php 'get_footer'(); // This fxn gets the footer.php file and renders it 
?>