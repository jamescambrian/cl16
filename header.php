<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,700|Lato:400,300,700|Open+Sans:800" rel="stylesheet" type="text/css">
<link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_directory'); ?>/images/favicon.png">
<?php wp_head(); ?>
</head>
<body id="top">
<nav id="menu" role="navigation" class="pushy pushy-left">
<img class="" style="max-width:200px; margin-left:2rem;" src="<?php echo get_bloginfo('template_directory'); ?>/images/logo.svg" data-pin-nopin="true">
<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
<ul class="social-sidebar">
    <li><a href="https://soundcloud.com/cambrian-line" target="_blank"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/icons/icon-soundcloud.svg"/></a></li>
    <li><a href="https://www.mixcloud.com/jamescambrian/" target="_blank"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/icons/icon-mixcloud.svg"/></a></li>
    <li><a href="https://cambrianline.bandcamp.com" target="_blank"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/icons/icon-bandcamp.svg"/></a></li>
 </ul>
</nav>
<div class="site-overlay"></div>
<!-- Site Wrap -->
<div id="container">
<header id="header" class="header"><div class="menu-btn">&#9776;</div>
	<a class="" href="<?php echo site_url(); ?>"><img class="logo" src="<?php echo get_bloginfo('template_directory'); ?>/images/logo.png" data-pin-nopin="true"></a>
</header>
<!-- Top Nav Ends -->
<div id="container">