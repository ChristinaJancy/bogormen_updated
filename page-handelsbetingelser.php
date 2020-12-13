<?php
get_header(); // This fxn gets the header.php file and renders it 
?>

<div  class="banner">
	<h1 style="text-align:center;">Handelsbetingelser</h1>
</div>

<section class="handelsbetingelser">
<?php the_field('handelsbetingelser'); ?>
</section>


<?php 'get_footer'(); // This fxn gets the footer.php file and renders it 
?>