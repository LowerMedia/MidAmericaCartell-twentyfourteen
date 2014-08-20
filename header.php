<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">

		<?php if ( get_header_image() ) : ?>
		<div id='header-img-wrap' class='header-img-wrap'>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<img src="<?php header_image(); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" />
			</a>
		</div>
		<?php endif; ?>

		<hgroup id='header-hgroup' class='header-hgroup'>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h4 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			<h2 class='site-slogan'>
				<span class='first-row spanrow grey'>tales of car</span>
				<span class='second-row spanrow grey'>culture from</span>
				<span class='third-row spanrow green'>the midwest</span></h2>
		</hgroup>
		<!-- <nav id='social-media-nav' class='social-media-nav' >
				<li id='' class='social-media-li' ><a id='' class='' href=''>Facebook</a></li>
			</ul>
			<ul id='social-media-ul' class='social-media-ul' >
		</nav> -->
		<div class='green whitebk menu-slogan'><a href='/contact'>we want to tell your story</a></div>
		<nav id="social-navigation" class="main-navigation" role="navigation">
			<ul id='social-media-ul' class='social-media-ul' >
				<li id='li-facebook' class='social-media-li li-facebook' ><a target='_blank' id='facebook-link' class='facebook-link social-media-link' href='http://facebook.com/MidAmericaCarTell'>Facebook</a></li>
				<li id='li-twitter' class='social-media-li li-twitter' ><a target='_blank' id='twitter-link' class='twitter-link social-media-link' href='http://twitter.com/mid_cartell'>Twitter</a></li>
				<li id='li-instagram' class='social-media-li li-instagram' ><a target='_blank' id='instagram-link' class='instagram-link social-media-link' href='http://instagram.com/mid_america_cartell'>Instagram</a></li>
			</ul>
		</nav>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h3 class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></h3>
			<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
			<!-- <ul id='social-media-ul' class='social-media-ul' >
				<li id='li-facebook' class='social-media-li li-facebook' ><a target='_blank' id='facebook-link' class='facebook-link social-media-link' href='http://facebook.com/MidAmericaCarTell'>Facebook</a></li>
				<li id='li-twitter' class='social-media-li li-twitter' ><a target='_blank' id='twitter-link' class='twitter-link social-media-link' href='http://twitter.com/mid_cartell'>Twitter</a></li>
				<li id='li-instagram' class='social-media-li li-instagram' ><a target='_blank' id='instagram-link' class='instagram-link social-media-link' href='http://instagram.com/mid_america_cartell'>Instagram</a></li>
			</ul> -->
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu greybk' ) ); ?>
		</nav><!-- #site-navigation -->

		
	</header><!-- #masthead -->

	<div id="main" class="wrapper">