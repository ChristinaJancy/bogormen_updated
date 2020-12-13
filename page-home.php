<?php
get_header(); // This fxn gets the header.php file and renders it 
?>

<div  class="banner pc-only">
	<h1 style="text-align:center;"><?php the_field('col1-h2'); ?></h1>
<p><?php 'bloginfo'('description'); // Display the blog description, found in General Settings ?></p>
</div>

	<div  class="banner mobile-only">
	<div class="row">
		<div class="col-s-12">
		<h1 style="text-align:center;">Velkommen til 
			<div id="logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"> <img src="<?php the_field('logo'); ?>" width="60" height="40"></a>
			</div>
		</h1>
	<p><?php 'bloginfo'('description'); // Display the blog description, found in General Settings ?></p>
		</div>

	</div>
</div>
<br><br>
<div class="sub-banner">
 <h2><?php the_field('video-header'); ?></h2>
</div>
<br><br>

<div class="video row">
    <div class="container-box col-12 col-s-12">
      <article class="container-iframe">
        <iframe width="560" height="315" class="resp-iframe"
         src="<?php the_field('video'); ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </article>
    </div>
</div>
<br><br><br><br>

  <div class="background">
	<div id="icons">
	  <img src="<?php the_field('icons'); ?>" alt="">
	  </div>  
  </div>




<?php 'get_footer'(); // This fxn gets the footer.php file and renders it 
?>