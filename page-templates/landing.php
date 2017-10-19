<?php 

/* Template Name: Landing */

get_header(); ?>


<div class="container-fluid" id="TopSection" style="background-image:url('<?php echo get_template_directory_uri(). '/assets/images/businessImage.jpg' ?>');">

  <div class="row landing-blocks">
    <div class="col-md-8 pull-right">test1</div>
  </div>

</div>

<div class="container-fluid landing-container-0top" id="WhatWeDo">

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

<div class="container landing-container" id="Industries">

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
    <div class="col-md-4 industriesTiles">
    	<img src="<?php echo get_template_directory_uri(). '/assets/images/BlueWallpaper.jpg' ?>">
    </div>
    <div class="col-md-4 industriesTiles">
    	<img src="<?php echo get_template_directory_uri(). '/assets/images/BlueWallpaper.jpg' ?>">
    </div>
    <div class="col-md-4 industriesTiles">
    	<img src="<?php echo get_template_directory_uri(). '/assets/images/BlueWallpaper.jpg' ?>">
    </div>
  </div>
</div>

<div class="container landing-container" id="Support">

  <div class="row landing-blocks">
    <div class="col-md-12">
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

<div class="container landing-container" id="OurClients">

  <div clas="row landing-blocks">
    <div class="col-md-12"><h1>OUR CLIENTS</h1></div>
  </div>
  <div class="row">
    <div class="col-md-7 col-centered">
      <div class="row landing-blocks">
        <div class="col-md-1 OurClientsTiles">test1</div>
        <div class="col-md-1 OurClientsTiles">test2</div>
        <div class="col-md-1 OurClientsTiles">test3</div>
        <div class="col-md-1 OurClientsTiles">test4</div>
        <div class="col-md-1 OurClientsTiles">test5</div>
        <div class="col-md-1 OurClientsTiles">test6</div>
        <div class="col-md-1 OurClientsTiles">test7</div>
      </div>
    </div>
  </div>

</div>

<div class="container landing-container" id="News">

  <div class="row landing-blocks">
    <div class="col-md-12"><h1>NEWS</h1></div>
  </div>
  <div class="row landing-blocks">
    <div class="col-md-4">pic1</div>
    <div class="col-md-4">pic2</div>
    <div class="col-md-4">pic3</div>
  </div>

</div>


<?php get_footer();?>