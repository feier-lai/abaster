<div class="jumbotron container-fluid careers-cont">
    <h1>news</h1>
</div>
<div class="container-fluid text-center blue news-title">
    <h3 class="white">what is new at abaster</h3>
</div>
<div class="news">

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

<div class="container-fluid careers-cont news-post">
        <div class="row">
            <div class="career col-md-12">
                <h4 type="button" data-toggle="collapse" data-target="#description2"><?php echo the_title(); ?></h4>
                <div id="description2" class="collapse">
                       <?php echo the_excerpt();?>
                </div>
            </div>
        </div>
    </div>

<?php endwhile;endif; wp_reset_postdata();?>
<!--
    <div class="container-fluid careers-cont news-post">
        <div class="row">
            <div class="career col-md-12">
                <h4 type="button" data-toggle="collapse" data-target="#description1">Abaster Consultant Inc. is launching its training center in Nigeria</h4>
                <div id="description1" class="collapse">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>
            </div>
        </div>
    </div>-->

    <div class="container text-center spontaneous">
        <p>Bookmark our website and return periodically to see notifications and announcements about this event.</p>            
    </div>
</div>