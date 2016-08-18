<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_directory'); ?>/images/favicon.png">
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/modernizr.custom.js"></script>
<?php wp_head(); ?>
<!-- GOOGLE ANALYTICS -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-52175573-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body id="top">
	<div class="overlay overlay-contentpush">
			<button type="button" class="overlay-close">Close</button>
			<nav>
				
				<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>

			</nav>
		</div>
<div class="wrap">
<!-- Site Wrap -->
<div id="container">
<header id="header" class="header"><div id="trigger-overlay" class="menu-btn"></div>
	<a class="" href="<?php echo site_url(); ?>"><img class="logo" src="<?php echo get_bloginfo('template_directory'); ?>/images/logo.png" data-pin-nopin="true"></a>
</header>
<!-- Top Nav Ends -->
<div id="container"></p>