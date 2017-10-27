<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Montserrat|Poppins|Muli|Raleway" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	
	<header id="masthead" class="site-header" role="banner">


		<div class="header-container">
			<div class="row header-content">
				<div class="col-md-2">
					<div class="branding-container">
						testing logo logo
					</div>
				</div>
				<div class="col-md-10">
					<nav id="main-navigation">
						<!--<ul>
							<li><a href="#">HOME</a></li>
							<li><a href="#">WHAT WE DO</a></li>
							<li><a href="#">WHO WE ARE</a></li>
							<li><a href="#">INDUSTRIES</a></li>
							<li><a href="#">NEWS</a></li>
							<li><a href="#">CONTACT</a></li>
							<li><a href="#">CAREERS</a></li>
						</ul>-->

							<?php wp_nav_menu( array(
								/*'theme_location' => 'top',*/
								'container_id' => 'main-navigation',
								'menu'        => 'main menu',
							) ); ?>
					</nav>
				</div>
			</div>
			
		</div>

		<?php //get_template_part( 'template-parts/header/header', 'image' ); ?>


	</header><!-- #masthead -->

	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
