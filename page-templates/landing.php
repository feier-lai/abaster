<?php

/* Template Name: Landing */

get_header(); ?>


<div class="container-fluid padding0" id="TopSection">

  <div class="row landing-blocks padding0">
    <div class="owl-carousel" id="top-slider">
      <div class="slider-content" style="background-image:url('<?php echo get_template_directory_uri(). '/assets/images/pexels-photo-258160.jpeg' ?>');">
        <div class="slider-internal-content white">
          <h1>slogan 1</h1>
          <h2 class="header-subline">subline</h2>
        </div>
      </div>
      <div class="slider-content" style="background-image:url('<?php echo get_template_directory_uri(). '/assets/images/people-woman-coffee-meeting.jpg' ?>');">
        <div class="overlay"></div>
        <div class="slider-internal-content white">
          <h1>Training</h1>
          <h2 class="header-subline">
            Abaster Consultants are well experienced in delivering in-class and client-site training. Our training is tailored to our clients' needs but with a strong emphasis on quality.
          </h2>
        </div>
      </div>
      <div class="slider-content" style="background-image:url('<?php echo get_template_directory_uri(). '/assets/images/pexels-man-laptop.jpg' ?>');">
        <div class="slider-internal-content darkblue-text">
          <h1>slogan 3</h1>
          <h2 class="header-subline">subline</h2>
        </div>
      </div>
    </div>
  </div>

</div>

<div class="container-fluid landing-container-0top text-center" id="WhatWeDo">

  <div class="row landing-blocks">
    <div class="col-md-12"><h1>WHAT WE DO</h1></div>
  </div>
  <div class="row landing-blocks">
    <div class="col-md-4"><a href="<?php echo get_site_url() . '/what-we-do/#systemIntegration'; ?>" >System Integration</a></div>
    <div class="col-md-4"><a href="<?php echo get_site_url() . '/what-we-do/#helpSupport'; ?>" >Help desk and Support</a></div>
    <div class="col-md-4"><a href="<?php echo get_site_url() . '/what-we-do/#businManagement'; ?>" >Business Process Management</a></div>
  </div>
  <div class="row landing-blocks">
    <div class="col-md-4"><a href="<?php echo get_site_url() . '/what-we-do/#outsourcing'; ?>" >Outsourcing</a></div>
    <div class="col-md-4"><a href="<?php echo get_site_url() . '/what-we-do/#identity'; ?>" >Identity and Access Management</a></div>
    <div class="col-md-4"><a href="<?php echo get_site_url() . '/what-we-do/#training'; ?>" >Training</a></div>
  </div>

</div>

<div class="container landing-container text-center" id="Industries">

  <div class="row landing-blocks">
    <div class="col-md-12"><h1>INDUSTRIES</h1></div>
  </div>
  <div class="row landing-blocks">
    <div id="oil-gas-tile" class="col-md-3 industriesTiles" alt="Oil and Gas" style="background-image:url('<?php echo get_template_directory_uri(). '/assets/images/Industries/oil and gas.jpeg' ?>');">
      <div id="oil-gas-overlay" class="overlay-opaque"></div>
    </div>
    <div class="col-md-3 industriesTiles" alt="Telecommunication" style="background-image:url('<?php echo get_template_directory_uri(). '/assets/images/Industries/Telecommunication.jpeg' ?>');">
    </div>
    <div class="col-md-3 industriesTiles" alt="Financial Institution" style="background-image:url('<?php echo get_template_directory_uri(). '/assets/images/Industries/financial institution 4.jpg' ?>');">
    </div>
    <div class="col-md-3 industriesTiles" alt="Manufacturing" style="background-image:url('<?php echo get_template_directory_uri(). '/assets/images/Industries/manufacturing.jpg' ?>');">
    </div>
  </div>
  <div class="row landing-blocks">
    <div class="col-md-3 industriesTiles" alt="Education/Trainig" style="background-image:url('<?php echo get_template_directory_uri(). '/assets/images/Industries/education 2.jpeg' ?>');">
    </div>
    <div class="col-md-3 industriesTiles" alt="aerospace" style="background-image:url('<?php echo get_template_directory_uri(). '/assets/images/Industries/aerospace.jpg' ?>');">
    </div>
    <div class="col-md-3 industriesTiles" alt="Public Service" style="background-image:url('<?php echo get_template_directory_uri(). '/assets/images/Industries/public service 3.jpeg' ?>');">
    </div>
  </div>
</div>

<div class="container-fluid text-center padding10vh landing-container" id="Support" style="background-image:url('<?php echo get_template_directory_uri(). '/assets/images/pexels-red-phone.jpg' ?>');">

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
    <div class="OurClientsTiles">
      <img src="<?php echo get_template_directory_uri(). '/assets/images/clients/bearingpoint.svg' ?>">
    </div>
    <div class="OurClientsTiles">
      <img src="<?php echo get_template_directory_uri(). '/assets/images/clients/Bombardier.svg' ?>"> 
    </div>
    <div class="OurClientsTiles">
      <img src="<?php echo get_template_directory_uri(). '/assets/images/clients/brainbench.png' ?>">
    </div>
    <div class="OurClientsTiles">
      <img src="<?php echo get_template_directory_uri(). '/assets/images/clients/collTech.png' ?>">
    </div>
    <div class="OurClientsTiles">
      <img src="<?php echo get_template_directory_uri(). '/assets/images/clients/xstrata.png' ?>">
    </div>
    <div class="OurClientsTiles">
      <img src="<?php echo get_template_directory_uri(). '/assets/images/clients/IBM.svg' ?>">
    </div>
    <div class="OurClientsTiles">
      <img src="<?php echo get_template_directory_uri(). '/assets/images/clients/Siemens.svg' ?>">
    </div>
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
