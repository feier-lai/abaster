<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package blankspace
 */

get_header();

// add modules
get_template_part( 'template-parts/landing-page/top-slider-section' );
get_template_part( 'template-parts/landing-page/strip-section' );
get_template_part( 'template-parts/landing-page/new-and-noteworthy' );
get_template_part( 'template-parts/landing-page/feeling-artsy' );
get_template_part( 'template-parts/landing-page/about-us' );
get_template_part( 'template-parts/landing-page/keep-in-touch' );

get_footer();
