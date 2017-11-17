<div class="jumbotron container-fluid">
    <h1>what we do</h1>
</div>
<div class="container-fluid service-div">
    <div class="row">
        <div class="col-md-6 space-left text-center" id="systemIntegration">
            <h3 class="service-h3 padding10vh"><?php echo the_field('what_we_do_system_title'); ?></h3>
            <p class="text-muted service-p">
            <?php echo the_field('what_we_do_system_content'); ?>
        </p>
        </div>
        <img class="col-md-6 service-img" src="<?php echo the_field('what_we_do_system_image') ?>" />
    </div>
</div>
<div class="container-fluid service-div">
    <img class="service-img col-md-6 text-muted " src=" <?php echo the_field('what_we_do_help_image'); ?>" />
        <div class="col-md-6 space-right text-center" id="helpSupport">
            <h3 class="service-h3"><?php echo the_field('what_we_do_help_title'); ?></h3>
            <p class="service-p text-muted">
             <?php echo the_field('what_we_do_help_content'); ?>
        </p>
        </div>
    </div>
</div>
<div class="container-fluid service-div">
    <div class="row blue">
        <div class="col-md-6 text-center space-left " id="businManagement">
            <h3 class="dark-title service-h3"><?php echo the_field('what_we_do_business_title'); ?></h3>
            <p class="text-muted service-p white">
             <?php echo the_field('what_we_do_business_content',false,false); ?>
        </p>
        </div>
        <img class="col-md-6" src="<?php echo the_field('what_we_do_business_image') ?>" />
    </div>
</div>
<div class="container-fluid service-div">
    <div class="row">
        <div class="col-md-6 col-sm-6  text-center space-left" id="outsourcing">
            <img class="icon-img" src="<?php echo the_field('what_we_do_outsourcing_image') ?>" />
            <h3 class="double first service-h3"><?php echo the_field('what_we_do_outsourcing_title'); ?></h3>
            <p class="text-muted service-p ">
            <?php echo the_field('what_we_do_outsourcing_content'); ?>
            </p>
        </div>
        <div class="col-md-6 col-sm-6  text-center space-right" id="identity">
            <img class="icon-img" src="<?php echo the_field('what_we_do_identity_image'); ?>" />
            <h3 class="double serivice-h3"><?php echo the_field('what_we_do_identity_title'); ?></h3>
            <p class="text-muted service-p">
                <?php echo the_field('what_we_do_identity_content'); ?>
            </p>
        </div>
    </div>
</div>
<div class="container-fluid service-div text-center">
        <img class="training-img col-md-6 text-muted" src="<?php echo the_field('what_we_do_training_image'); ?>" />
        <div class="col-md-6 space-right text-center" id="training">
            <h3 class="service-h3"><?php echo the_field('what_we_do_training_title'); ?></h3>
            <p class="text-muted service-p">
               <?php echo the_field('what_we_do_training_content'); ?>
            </p>
        </div>
    </div>
</div>

<?php if( have_rows('what_we_do_courses_content') ): ?>

<h3 class="courses text-center"><?php echo the_field('what_we_do_courses_title'); ?></h3>
    <div class="container-fluid service-div text-center">
        <div class="row courses-cont">

    <?php while( have_rows('what_we_do_courses_content') ): the_row(); 

        $content = get_sub_field('what_we_do_courses_repeater_content');

        ?>

        <div class="col-md-4 col-sm-4  text-center" id="training">

        <?php echo $content;?>

        </div>

    <?php endwhile; ?>

        </div>
    </div>
</h3>

<?php endif; ?>

<!--<h3 class="courses text-center">courses</h3>
<div class="container-fluid service-div text-center">
    <div class="row courses-cont">
        <div class="col-md-4 col-sm-4  text-center" id="training">
            <ul>
                <li>SAP FInance and Controlling</li>
                <li>SAP Material Management</li>
                <li>SAP Plant Maintenance</li>
                <li>SAP Warehouse Management</li>
                <li>SAP Supply Chain Management</li>
            </ul>
        </div>
        <div class="col-md-4 col-sm-4  text-center" id="training">
            <ul>
                <li>SAP Customer Relationship Management</li>
                <li>SAP Business Intelligence</li>
                <li>SAP Human Resources</li>
                <li>SAP Production Planning</li>
                <li>SAP ABAP</li>
            </ul>
        </div>
        <div class="col-md-4 col-sm-4 text-center" id="training">
            <ul>
                <li>SAP Basis and System Administration</li>
                <li>SAP Security and Identity Management</li>
                <li>Project Management</li>
                <li>Business Analysis</li>
                <li>Change Management</li>
            </ul>
        </div>
    </div>
</div>-->
    <!--
    <div class="row">
        <h3 class="col-md-12 col-sm-12">courses</h3>
    </div>
    
    <div class="row text-muted">
        <ul class="col-md-2 col-sm-4 service-ul">
            <li>SAP FInance and Controlling</li>
            <li>SAP Material Management</li>
            <li>SAP Plant Maintenance</li>
            <li>SAP Warehouse Management</li>
            <li>SAP Supply Chain Management</li>
        </ul>
        <ul class="col-md-2 col-sm-4 service-ul">
            <li>SAP Customer Relationship Management</li>
            <li>SAP Business Intelligence</li>
            <li>SAP Human Resources</li>
            <li>SAP Production Planning</li>
            <li>SAP ABAP</li>
        </ul>
        <ul class="col-md-2 col-sm-4 service-ul">
            <li>SAP Basis and System Administration</li>
            <li>SAP Security and Identity Management</li>
            <li>Project Management</li>
            <li>Business Analysis</li>
            <li>Change Management</li>
        </ul>
    </div>-->
</div>