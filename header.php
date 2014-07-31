<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package fauverism
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'fauverism' ); ?></a>

	<header id="masthead" class="site-header" role="banner">


		<nav id="site-navigation" class="main-navigation navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="site-branding">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</div>
			<!-- <button class="menu-toggle"><?php _e( 'Primary Menu', 'fauverism' ); ?></button> -->			
			<ul class="nav navbar-nav navbar-right">
	            <li><a href="#">Home</a></li>
	            <li><a href="/about/">About</a></li>
	            <li><a href="/portfolio/">Portfolio</a></li>		
				<li><a href="/author/fauverism/">Blog</a></li>			
	            <li><a href="/contact/">Contact</a></li>
          	</ul>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="container site-content">
