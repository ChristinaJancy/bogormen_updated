<?php
get_header(); // This fxn gets the header.php file and renders it 
?>

<div  class="banner-products">
	<h1 style="text-align:center;">Produkter</h1>
	<div id="products-tab">
<?php wp_nav_menu( array( 'container_class' => 'main-nav', 'theme_location' => 'products-tab' ) ); // Display the user-defined menu in Appearance > Menus ?>
			</div>
</div>
	<h2 class="sub-banner">Spil</h2>

<section class="section-products">
<div class="row" id="products">
	<div class="col-6 col-s-12 product-container">
		<div class="row product">
			<div class="col-8 col-s-12 product-col1">
			<img src="https://www.zoom.co.uk/assets/images/site/product/8320448_1.jpg?width=1200">
			<p><b>Peppa pig</b></p>
			</div>
			<div class="col-4 col-s-12 product-col2">
			<p>På lager</p>
			<p>100 dkk.-</p>
			</div>
		</div>	
	</div>
	
<!-- 	 -->
	
	<div class="col-6 col-s-12 product-container">
		<div class="row product">
			<div class="col-8 col-s-12 product-col1">
			<img src="https://www.zoom.co.uk/assets/images/site/product/8320448_1.jpg?width=1200">
			<p><b>Peppa pig</b></p>
			</div>
			<div class="col-4 col-s-12 product-col2">
			<p>På lager</p>
			<p>100 dkk.-</p>
			</div>
		</div>	
	</div>
	
	
<!-- 	 -->
	
	<div class="col-6 col-s-12 product-container">
		<div class="row product">
			<div class="col-8 col-s-12 product-col1">
			<img src="https://www.zoom.co.uk/assets/images/site/product/8320448_1.jpg?width=1200">
			<p><b>Peppa pig</b></p>
			</div>
			<div class="col-4 col-s-12 product-col2">
			<p>På lager</p>
			<p>100 dkk.-</p>
			</div>
		</div>	
	</div>
	
	
<!-- 	 -->
	
	<div class="col-6 col-s-12 product-container">
		<div class="row product">
			<div class="col-8 col-s-12 product-col1">
			<img src="https://www.zoom.co.uk/assets/images/site/product/8320448_1.jpg?width=1200">
			<p><b>Peppa pig</b></p>
			</div>
			<div class="col-4 col-s-12 product-col2">
			<p>På lager</p>
			<p>100 dkk.-</p>
			</div>
		</div>	
	</div>
	
	
<!-- 	 -->
	
	<div class="col-6 col-s-12 product-container">
		<div class="row product">
			<div class="col-8 col-s-12 product-col1">
			<img src="https://www.zoom.co.uk/assets/images/site/product/8320448_1.jpg?width=1200">
			<p><b>Peppa pig</b></p>
			</div>
			<div class="col-4 col-s-12 product-col2">
			<p>På lager</p>
			<p>100 dkk.-</p>
			</div>
		</div>	
	</div>
	
	
<!-- 	 -->
	
	<div class="col-6 col-s-12 product-container">
		<div class="row product">
			<div class="col-8 col-s-12 product-col1">
			<img src="https://www.zoom.co.uk/assets/images/site/product/8320448_1.jpg?width=1200">
			<p><b>Peppa pig</b></p>
			</div>
			<div class="col-4 col-s-12 product-col2">
			<p>På lager</p>
			<p>100 dkk.-</p>
			</div>
		</div>	
	</div>
	</div>
	</section>

<?php 'get_footer'(); // This fxn gets the footer.php file and renders it 
?>