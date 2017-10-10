<?php
/*
 * Template Name: Photo-Upload
 */

get_header(); ?>

<section class="build-your-own">
  <h3>Buid your own</h3>
  <h2>Step by step tool to print<br> what ever you want</h2>
</section>

<section class="image-upload">
  <div class="col-md-6 text-center">
    <form action="<?php bloginfo('template_url'); ?>/inc/image-upload.php" method="post" enctype="multipart/form-data">
      <img src="<?php bloginfo('template_url'); ?>/src/images/no-image.png" >
      <p>Select image to upload:</p>
      <input type="file" id="imageupload" name="imageupload" />
      <input type="submit" value="Upload Image" name="submit">
    </form>
  </div>

  <div class="col-md-6">
  </div>
</section>

<?php
get_footer();
