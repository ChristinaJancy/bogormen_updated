<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>
	<?php bloginfo('name'); // show the blog name, from settings ?> | 
	<?php is_front_page() ? bloginfo('description') : wp_title(''); // if we're on the home page, show the description, from the site's settings - otherwise, show the title of the post or page ?>
</title>

<!--font awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
	
<!--google analytics-->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-LB8CTFQ4CY"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-LB8CTFQ4CY');
</script>
	
<?php wp_head(); 
// This fxn allows plugins, and Wordpress itself, to insert themselves/scripts/css/files
// (right here) into the head of your website. 
// Removing this fxn call will disable all kinds of plugins and Wordpress default insertions. 
// Move it if you like, but I would keep it around.
?>
</head>
<body>


<header class="row">
	<div class="col-2 col-s-4" id="logo">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"> <img src="<?php the_field('logo'); ?>" width="60" height="40"></a>
	</div>

	<nav class="col-8 col-s-4">
		<?php wp_nav_menu( array( 'container_class' => 'main-nav', 'theme_location' => 'header' ) ); // Display the user-defined menu in Appearance > Menus ?>
    </nav>
	<div class="col-2 col-s-4" id="nav-fb">
		<a href="<?php echo esc_url( home_url( '/facebook-feed' ) ); ?>"> Facebook Feed</a>
	</div>

</header>
<main class="main-fluid">
    
