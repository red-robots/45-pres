<?php
/**
 * The header for theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

<div class="teaser">
	Coming <br> Nov. 9
</div>

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'acstarter' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="wrapper">
			
			<div class="sub-hero">
				All NEW! Includes Election 2016
			</div>
		
           

            <section class="hero">
	             <h1 class="logo">
	            	<a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
	            </h1>
            	<h2>Sing, Laugh &amp; Learn about the 45 Presidents</h2>
            	<div class="tagline">
            		A multi-media approach to make learning fun!
            	</div>
            </section>



			
	</div><!-- wrapper -->
	</header><!-- #masthead -->

	<div id="content" class="site-content wrapper">