<?php  ?>

<section id="feeling_artsy">

  <div class="container-fluid">
    <div class="row">

      <div class="col-md-12 text-center">

        <h2>feeling artsy?</h2>
        <h5>browse our gallery and discover our artists</h5>
        <p>Our curators selected original pieces by artists we love and support.<br>Because your wall deserve more than a standard poster.</p>
      </div>

    </div>

    <div class="row">

      <div class="col-md-2">
      </div>

      <?php $the_query = new WP_Query( 'type=post&posts_per_page=4&category_name=gallery' ); ?>

        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); 
          if ( has_post_thumbnail() ) {
            $feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() );
          }

          $artistname = get_field('artist_name');
          $image = get_field('image');

          ?>

          <div class="col-md-2">
            <div class="flex">
              <a href="<?php echo get_permalink() ; ?>">
                <img class="landing-post-image" src="<?php echo $image['url']; ?>">
              </a>
            </div>
          </div>

        <?php
        endwhile;
        wp_reset_postdata();
        ?>

      <div class="col-md-2"></div>

    </div>

    <div class="row">
      <div class="col-md-12 text-center">
        <a href="#"><button class="main-button">Check it out</button></a>
      </div>
    </div>

  </div>

</section>
