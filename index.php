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
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<?php /*if ( is_home() && ! is_front_page() ) : ?>
		<header class="page-header">
			<h1 class="page-title"><?php single_post_title(); ?></h1>
		</header>
	<?php else : ?>
	<header class="page-header">
		<h2 class="page-title"><?php _e( 'Posts', 'twentyseventeen' ); ?></h2>
	</header>
	<?php endif; */ ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php /*
			if ( have_posts() ) :

			
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/post/content', get_post_format() );

				endwhile;

				the_posts_pagination( array(
					'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
					'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
				) );

			else :

				get_template_part( 'template-parts/post/content', 'none' );

			endif;*/
			?>


<?php if( have_rows('slider_repeater', 'option') ): 
	$slidernumber=0; ?>

<div class="container-fluid padding0" id="TopSection">

  <div class="row landing-blocks padding0">
    <div class="owl-carousel" id="top-slider">

    <?php while( have_rows('slider_repeater', 'option') ): the_row(); 


    	$slidernumber ++;
        $title = get_sub_field('slider_title');
        $slidercontent = get_sub_field('slider_text', false, false);
        $sliderImage = get_sub_field('slider_image');
        $slideroverlay = get_sub_field('slider_has_overlay');
        $slidertextcolor = get_sub_field('slider_text_color');

        ?>

        <div id="slider<?php echo $slidernumber; ?>" class="slider-content" style="background-image:url('<?php echo $sliderImage ?>');">
        	<?php if ($slideroverlay == 'true' ): ?>
        		<div class="overlay"></div>
        	<?php endif;?>
          <div class="slider-internal-content" style="color:<?php echo $slidertextcolor; ?>">
            <h1><?php echo $title; ?></h1>
            <h2 class="header-subline"><?php echo $slidercontent;?></h2>
          </div>
        </div>

    <?php 

    endwhile; ?>

        </div>
    </div>
</div>

<?php endif; ?>

<?php if( have_rows('what_we_do_section', 'option') ): ?>

<div class="container-fluid landing-container-0top text-center" id="WhatWeDo">

  <div class="row landing-blocks">
    <div class="col-md-12"><h1>WHAT WE DO</h1></div>
  </div>
  	<div class="row landing-blocks">

    <?php while( have_rows('what_we_do_section', 'option') ): the_row(); 


        $whatwedo_title = get_sub_field('what_we_do_section_title');
        $whatwedo_link = get_sub_field('what_we_do_section_link');

        ?>

        <div class="col-md-4"><a href="<?php echo $whatwedo_link; ?>" ><?php echo $whatwedo_title; ?></a></div>    

    <?php 

    endwhile; ?>

   	</div>
</div>

<?php endif; ?>

<?php if( have_rows('industries_section', 'option') ): ?>

<div class="container landing-container text-center" id="Industries">

  <div class="row landing-blocks">
    <div class="col-md-12"><h1>INDUSTRIES</h1></div>
  </div>
  	<div class="row landing-blocks">

    <?php while( have_rows('industries_section', 'option') ): the_row(); 


        $industries_title = get_sub_field('industries_section_title');
        $industries_link = get_sub_field('industries_section_link');
        $industries_image = get_sub_field('industries_section_image');

        ?>

         <div class="col-md-3 industriesTiles" alt="<?php echo $industries_title;?>" style="background-image:url('<?php echo $industries_image;?>');">
      		<a href="<?php echo $industries_link; ?>"><?php echo $industries_title;?></a>
    	</div>

    <?php 

    endwhile; ?>

   	</div>
</div>

<?php endif; ?>


<div class="container-fluid text-center padding10vh landing-container" id="Support" style="background-image:url('<?php echo the_field('support_section_background_image', 'option');?>');">

  <div class="row landing-blocks">
    <div class="col-md-12 SupportContainer">
      <h1><?php echo the_field('support_section_title', 'option');?></h1>
      <?php echo the_field('support_section_text', 'option');?>
    <a href="<?php echo the_field('support_section_cta_link', 'option');?>"><button id="LearnMore"><?php echo the_field('support_section_cta_text', 'option');?></button></a>
    </div>
  </div>

</div>


<?php if( have_rows('clients_section', 'option') ): ?>

<div class="container landing-container text-center" id="OurClients">

  <div class="row landing-blocks">
    <div class="col-md-12"><h1>OUR CLIENTS</h1></div>
  </div>
  <div class="owl-carousel owl-theme" id="clientsSlider">

    <?php while( have_rows('clients_section', 'option') ): the_row(); 

        $clients_icon = get_sub_field('clients_icon');

        ?>

         <div class="OurClientsTiles">
      		<img src="<?php echo $clients_icon; ?>">
    	</div>

    <?php 

    endwhile; ?>

   	</div>
</div>

<?php endif; ?>


<div class="container landing-container text-center" id="News">

  <div class="row landing-blocks">
    <div class="col-md-12"><h1>NEWS</h1></div>
  </div>
  <div class="row landing-blocks">

    <?php

    $args = array(
      type=>'post',
      posts_per_page=>'3',
      category_name=>'News'
    );

    $query = new WP_Query($args);

    if ($query->have_posts()):
      while($query->have_posts()):
        $query->the_post();

    ?>

    <div class="col-md-4">
      <a href="<?php echo get_permalink();?>"><?php echo the_post_thumbnail('post-thumbnail', ['class' => 'NewsImage']);?></a>
      <h4><?php echo the_title(); ?></h4>
      <p><?php echo the_excerpt(); ?></p>
    </div>

<?php endwhile;
else: echo 'none yet';

endif; wp_reset_postdata();?>



  </div>

</div>


		</main><!-- #main -->
	</div><!-- #primary -->
	<?php //get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer();
