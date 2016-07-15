<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_directory'); ?>/images/favicon.png">
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/modernizr.custom.js"></script>
<?php wp_head(); ?>
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