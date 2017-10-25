<?php

/* Template Name: Landing */

get_header(); ?>


<div class="container-fluid padding0" id="TopSection">

  <div class="row landing-blocks padding0">
    <div class="owl-carousel" id="top-slider">
      <div class="slider-content" style="background-image:url('<?php echo get_template_directory_uri(). '/assets/images/pexels-business-road.jpg' ?>');"></div>
      <div class="slider-content" style="background-image:url('<?php echo get_template_directory_uri(). '/assets/images/people-woman-coffee-meeting.jpg' ?>');"></div>
      <div class="slider-content" style="background-image:url('<?php echo get_template_directory_uri(). '/assets/images/pexels-photo-258160.jpeg' ?>');"></div>
    </div>
  </div>

</div>

<div class="container-fluid landing-container-0top text-center" id="WhatWeDo">

  <div class="row landing-blocks">
    <div class="col-md-12"><h1>WHAT WE DO</h1></div>
  </div>
  <div class="row landing-blocks">
    <div class="col-md-4">System Integration</div>
    <div class="col-md-4">Help desk and Support</div>
    <div class="col-md-4">Business Process Management</div>
  </div>
  <div class="row landing-blocks">
    <div class="col-md-4">Outsourcing</div>
    <div class="col-md-4">Identity and Access Management</div>
    <div class="col-md-4">Training</div>
  </div>

</div>

<div class="container landing-container text-center" id="Industries">

  <div class="row landing-blocks">
    <div class="col-md-12"><h1>INDUSTRIES</h1></div>
  </div>
  <div class="row landing-blocks">
    <div class="col-md-3 industriesTiles">
    	<img src="<?php echo get_template_directory_uri(). '/assets/images/BlueWallpaper.jpg' ?>">
    </div>
    <div class="col-md-3 industriesTiles">
    	<img src="<?php echo get_template_directory_uri(). '/assets/images/BlueWallpaper.jpg' ?>">
    </div>
    <div class="col-md-3 industriesTiles">
    	<img src="<?php echo get_template_directory_uri(). '/assets/images/BlueWallpaper.jpg' ?>">
    </div>
    <div class="col-md-3 industriesTiles">
    	<img src="<?php echo get_template_directory_uri(). '/assets/images/BlueWallpaper.jpg' ?>">
    </div>
  </div>
  <div class="row landing-blocks">
    <div class="col-md-3 industriesTiles">
    	<img src="<?php echo get_template_directory_uri(). '/assets/images/BlueWallpaper.jpg' ?>">
    </div>
    <div class="col-md-3 industriesTiles">
    	<img src="<?php echo get_template_directory_uri(). '/assets/images/BlueWallpaper.jpg' ?>">
    </div>
    <div class="col-md-3 industriesTiles">
    	<img src="<?php echo get_template_directory_uri(). '/assets/images/BlueWallpaper.jpg' ?>">
    </div>
  </div>
</div>

<div class="container-fluid text-center padding10vh landing-container" id="Support" style="background-image:url('<?php echo get_template_directory_uri(). '/assets/images/pexels-photo-110473.jpeg' ?>');">

  <div class="row landing-blocks">
    <div class="col-md-12 SupportContainer">
      <h1>Support</h1>
      <p>
      Our support system is characterized with excellent customer service, brilliant performance and on-time service delivery.<br/>
      Our client support specialists are properly trained to act timely and professionally. We honor the service agreement with our clients as well as adhereing to the turn-around, as staated in the Service Level Agreement.<br/>
      Client support requires technical experties to diagnose issues and respond promptly. At Abaster we undrestand this critical requirement hence; we have recruited the best brains to respond to your system issues with possible quick resolution. Supporting your business to achive your organizational goal is our responsibility.<br/>
      </p>
    <button id="LearnMore">LEARN MORE</button>
    </div>
  </div>

</div>

<div class="container landing-container text-center" id="OurClients">

  <div class="row landing-blocks">
    <div class="col-md-12"><h1>OUR CLIENTS</h1></div>
  </div>
  <div class="owl-carousel owl-theme" id="clientsSlider">
    <div class="OurClientsTiles">test1</div>
    <div class="OurClientsTiles">test2</div>
    <div class="OurClientsTiles">test3</div>
    <div class="OurClientsTiles">test4</div>
    <div class="OurClientsTiles">test5</div>
    <div class="OurClientsTiles">test6</div>
    <div class="OurClientsTiles">test7</div>
  </div>
</div>

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
      <img src="<?php echo get_template_directory_uri(). '/assets/images/BlueWallpaper.jpg' ?>" class="NewsImage">
      <p><?php echo the_title(); ?></p>
      <p><?php echo the_content(); ?></p>
    </div>

<?php endwhile;endif; wp_reset_postdata();?>

  </div>

</div>


<?php get_footer();?>
