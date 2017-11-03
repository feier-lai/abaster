<div class="main" id="industries-page">

    <div class="margin0 jumbotron container-fluid">
        <h1>industries</h1>
    </div>

    <div class="section-nav blue">
		<nav class="page-navigation">
			<ul>
				<li><a href="#oil-and-gas">OIL AND GAS</a></li>
				<li><a href="#telecommunication">TELECOMMUNICATION</a></li>
				<li><a href="#financial-institutions">FINANCIAL INSTITUTIONS</a></li>
				<li><a href="#manufacturing">MANUFACTURING</a></li>
				<li><a href="#education">EDUCATION</a></li>
				<li><a href="#aerospace">AEROSPACE</a></li>
				<li><a href="#public-service">PUBLIC SERVICE</a></li>
			</ul>
		</nav>
	</div>

	<div id="industries-content">


<?php if( have_rows('industries_content_repeater') ): ?>

	<?php while( have_rows('industries_content_repeater') ): the_row();

		// vars
		$repeater_header = get_sub_field('industries_content_heading');
    $repeater_text = get_sub_field('industries_content_text');
		$repeater_image = get_sub_field('industries_content_image');
    $repeater_textdir = get_sub_field('industries_text_side');

		?>
  <?php if($repeater_textdir=='right'): ?>
    <div class="container padding30vh" id="public-service">
      <div class="row">
        <div class="col-md-12 col-sm-12 picture-container-smallscreens" alt="" style="background-image:url('<?php echo $repeater_image; ?>');"></div>
      </div>
      <div class="row">
        <div class="col-md-5 col-sm-5">
          <div class="row">
            <div class="col-md-12 col-sm-12 picture-container-tablet" alt="" style="background-image:url('<?php echo $repeater_image; ?>');"></div>
          </div>
          <div class="row">
            <div class="col-md-12 col-sm-12 picture-container" alt="" style="background-image:url('<?php echo $repeater_image; ?>');"></div>
          </div>
        </div>
        <div class="col-md-7 col-sm-7 content-padding industries-tile-text">
          <h2 class="industries-heading"><?php echo $repeater_header; ?></h2>
          <?php echo $repeater_text; ?>
        </div>
      </div>
    </div>
  <?php endif;?>


<?php if($repeater_textdir=='left'): ?>
    <div class="container padding30vh" id="aerospace">
      <div class="row">
        <div class="col-md-12 col-sm-12 picture-container-smallscreens" alt="" style="background-image:url('<?php echo $repeater_image; ?>');"></div>
      </div>
			<div class="row">
				<div class="col-md-7 col-sm-7 content-padding industries-tile-text">
          <h2 class="industries-heading"><?php echo $repeater_header; ?></h2>
          <?php echo $repeater_text; ?>
          <?php echo $repeater_textdir; ?>
				</div>
        <div class="col-md-5 col-sm-5">
					<div class="row">
            <div class="col-md-12 col-sm-12 picture-container-tablet" alt="" style="background-image:url('<?php echo $repeater_image; ?>');"></div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12 picture-container" alt="" style="background-image:url('<?php echo $repeater_image; ?>');"></div>
					</div>
				</div>
			</div>
		</div>
<?php endif;?>
	<?php endwhile; ?>

<?php endif; ?>

  </div>

</div>
