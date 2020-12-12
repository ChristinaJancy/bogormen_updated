<?php
get_header(); // This fxn gets the header.php file and renders it 
?>

<div  class="banner-products">
	<h1 style="text-align:center;">Produkter</h1>
	<div id="products-tab">
<?php wp_nav_menu( array( 'container_class' => 'main-nav', 'theme_location' => 'products-tab' ) ); // Display the user-defined menu in Appearance > Menus ?>
			</div>
</div>
	<h2 class="sub-banner">DVD</h2>


<div class="row" id="products">
	<div class="col-6 col-s-12 product">
		<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSR206wPSakOQVYdV76aviGok1K4IBPayTgmw&usqp=CAU">
	</div>
	<div class="col-6 col-s-12 product">
		<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSR206wPSakOQVYdV76aviGok1K4IBPayTgmw&usqp=CAU">
	</div>
	<div class="col-6 col-s-12 product">
		<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSR206wPSakOQVYdV76aviGok1K4IBPayTgmw&usqp=CAU">
	</div>
	<div class="col-6 col-s-12 product">
		<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSR206wPSakOQVYdV76aviGok1K4IBPayTgmw&usqp=CAU" >
	</div>
</div>

<?php 'get_footer'(); // This fxn gets the footer.php file and renders it 
?>