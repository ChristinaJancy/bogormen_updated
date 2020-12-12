<?php get_header(); // This fxn gets the header.php file and renders it ?>

<div id="snackbar">Some text some message..</div>
	<div class="banner">
		<h1><?php the_field('contact-banner-header'); ?></h1>
		<?php the_field('contact-banner-text'); ?>
	</div>

<div class="container" id="contact-page">
  <div class="row">
    <div class="col-6 col-s-12">
      <img src="<?php the_field('contact-col1-img'); ?>" style="width:100%">
    </div>
    <div class="col-6 col-s-12">
      <form action="https://formspree.io/f/xdopwzqo"  method="POST">
        <label for="fname"><?php the_field('contact-form-firstname'); ?></label>
        <input type="text" id="fname" name="firstname" placeholder="Dit fornavn..">
        <label for="lname"><?php the_field('contact-form-lastname'); ?></label>
        <input type="text" id="lname" name="lastname" placeholder="Dit efternavn..">
        <label for="_replyto">Email</label>
		<input type="text" name="_replyto" placeholder="Din email...">
        <label for="message">Besked </label>
    	<textarea name="message"></textarea>
        <input type="submit" value="Send">
      </form>
    </div>  
	  </div>
</div><!--.container -->

<?php get_footer(); // This fxn gets the footer.php file and renders it ?>