<?php ?>

<section id="new_and_noteworthy">

  <!--<div class="container-fluid">
    <div class="row">
      <div class="col-md-6"></div>
      <div class="col-md-6"></div>
    </div>
  </div>-->

  <div class="container">

    <div class="row">

      <div class="col-md-12">
        <h2>new &amp; noteworthy</h2>
      </div>

    </div>

    <div class="row text-center">

      <?php $the_query = new WP_Query( 'type=post&posts_per_page=3&category_name=new-and-noteworthy' ); ?>

        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); 
          if ( has_post_thumbnail() ) {
            $feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() );
          }

          $headline = get_field('headline');
          $image = get_field('image');
          $price = get_field('price');

          ?>

          <div class="col-lg-4 text-center">
            <div class="post-container">
              <h6><a href="<?php echo get_permalink() ; ?>"><?php echo $headline; ?></a></h6>
              <p><?php the_field('description', false, false); ?></p>
              <div class="post-image-container">
                <img class="landing-post-image" src="<?php echo $image['url']; ?>">
                <span><button class="small-button">view +</button></span>
              </div>
              <div class="text-right">
                <h6>Starting at</h6>
                <p><?php echo $price; ?></p>
              </div>
            </div>
          </div>

        <?php
        endwhile;
        wp_reset_postdata();
        ?>


    </div>

    <div class="row">
      <div class="col-md-12 text-center">
        <a href="#"><button class="main-button">More ways to print</button></a>
      </div>
    </div>

  </div>

</section>
