<div class="jumbotron container-fluid ">
        <h1>careers</h1>
    </div>

    <?php if( have_rows('career_top_section') ): ?>

    	<?php while( have_rows('career_top_section') ): the_row();

    		// vars
    		$career_header = get_sub_field('career_heading');
        $careers_content = get_sub_field('career_content');

    		?>
    <div class="container-fluid text-center dark careers-cont about">
        <h3 class="white"><?php echo "$career_header" ?></h3>
        <p class="white contentMargin"><?php echo "$careers_content" ?></p>
    </div>
  <?php endwhile; ?>

<?php endif; ?>

    <div class="container-fluid text-center blue">
        <h3 class="white">available positions</h3>
    </div>
    <!--<div class="container text-center spontaneous"> 
        <p>None yet!</p>
    </div>-->
    <?php if( have_rows('job_section_repeater') ): ?>

      <?php while( have_rows('job_section_repeater') ): the_row();

        // vars
        $job_title_var = get_sub_field('job_title');
        $job_description_var = get_sub_field('job_description');
        $application_link_var = get_sub_field('application_link');
        $job_title_id = str_replace(' ', '_', $job_title_var);

        ?>
        <div class="container-fluid job">
            <div class="row">
                <div class="career col-md-6">
                    <h4 type="button" data-toggle="collapse" data-target="<?php  echo '#'. $job_title_id ?>"><?php echo "$job_title_var"?></h4>
                    <div id="<?php echo $job_title_id ?>" class="collapse">
                        <?php echo "$job_description_var"?>
                    </div>
                </div>
                <button class="btn col-md-1 apply"><a target="_blanck" href="<?php echo $application_link_var?>">Apply</a></button>
            </div>
        </div>
      <?php endwhile; ?>

    <?php endif; ?>



  <!--  <div class="container-fluid job">
        <div class="row">
            <div class="career col-md-6">
                <h4 type="button" data-toggle="collapse" data-target="#description1">SAP IS Banking Consultants</h4>
                <div id="description1" class="collapse">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>
            </div>
            <button class="btn col-md-1 apply"><a target="_blanck" href="mailto:info@abasterconsulting.com">Apply</a></button>
        </div>
    </div>
    <div class="container-fluid job">
        <div class="row">
            <div class="career col-md-6">
                <h4 type="button" data-toggle="collapse" data-target="#description2">SAP FICO Consultants</h4>
                <div id="description2" class="collapse">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>
            </div>
            <button class="btn col-md-1 apply"><a target="_blanck" href="mailto:info@abasterconsulting.com">Apply</a></button>
        </div>
    </div>
    <div class="container-fluid job">
        <div class="row">
            <div class="career col-md-6">
                <h4 type="button" data-toggle="collapse" data-target="#description3">SAP HR Consultants</h4>
                <div id="description3" class="collapse">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>
            </div>
            <button class="btn col-md-1 apply"><a target="_blanck" href="mailto:info@abasterconsulting.com">Apply</a></button>
        </div>
    </div>
    <div class="container-fluid job">
        <div class="row">
            <div class="career col-md-6">
                <h4 type="button" data-toggle="collapse" data-target="#description4">SAP Project Managers</h4>
                <div id="description4" class="collapse">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>
            </div>
            <button class="btn col-md-1 apply"><a target="_blanck" href="mailto:info@abasterconsulting.com">Apply</a></button>
        </div>
    </div>
    <div class="container-fluid job">
        <div class="row">
            <div class="career col-md-6">
                <h4 type="button" data-toggle="collapse" data-target="#description5">Business Process Consultants</h4>
                <div id="description5" class="collapse">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>
            </div>
            <button class="btn col-md-1 apply"><a target="_blanck" href="mailto:info@abasterconsulting.com">Apply</a></button>
        </div>
    </div>
    <div class="container-fluid job">
        <div class="row">
            <div class="career col-md-6">
                <h4 type="button" data-toggle="collapse" data-target="#description6">SAP Trainers</h4>
                <div id="description6" class="collapse">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>
            </div>
            <button class="btn col-md-1 apply"><a target="_blanck" href="mailto:info@abasterconsulting.com">Apply</a></button>
        </div>
    </div>-->

    <div class="container-fluid text-center blue">
        <h3 class="white"><?php echo get_field(bottom_section_heading) ?></h3>
    </div>
    <div class="container text-center spontaneous">
        <p><?php echo get_field(bottom_section_content) ?></p>
        <button class="btn apply"><a target="_blanck" href="mailto:info@abasterconsulting.com">Apply</a></button>
    </div>
