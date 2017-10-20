<?php 

/* Template Name: Single Column */

get_header();


?>



<?php 

if( is_page('what-we-do') || is_page('abaster-what-we-do') || is_page('services') ){

	get_template_part('template-parts/page/content-services');

}

if( is_page('industries') || is_page('abaster-industries') ){

	get_template_part('template-parts/page/content-industries');

}

if ( is_page('careers') ){
	get_template_part('template-parts/page/content-careers');
}

if ( is_page('who-we-are') || is_page('about') || is_page('about-us')){
	get_template_part('template-parts/page/content-who-we-are');
}

?>


<?php get_footer(); ?>