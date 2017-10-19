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

?>


<?php get_footer(); ?>