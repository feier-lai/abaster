<div id="who-we-are">

    <div class="jumbotron container-fluid">
        <h1>who we are</h1>
    </div>

<?php

// check if the repeater field has rows of data
if( have_rows('about_us_repeater') ): 

    // loop through the rows of data
    while ( have_rows('about_us_repeater') ) : the_row();

        // display a sub field value
        $about_heading = get_sub_field('about_us_heading');
        $about_content = get_sub_field('about_us_content');
        $about_image = get_sub_field('about_us_image'); 
        $about_bgcolor = get_sub_field('about_us_bg_color'); 
        $h3class = "";

        if( $about_bgcolor ){

            $h3class = "white";

        }

        ?>


        <div class="container-fluid text-center text-muted about content-padding" style="background-color:<?php echo $about_bgcolor;?>">
        <h3 class="<?php echo $h3class;?>"><?php echo $about_heading; ?> </h3>
        <img src="<?php echo $about_image;?>">
        <p class="contentMargin">
            <?php echo $about_content; ?>
        </p>
        </div>


    <?php endwhile;

    // no rows found

endif;

?>


    <!--<div class="container-fluid text-center text-muted about content-padding">
        <h3>the team</h3>
        <p class="contentMargin">The complexity of running on multiple systems and technicalities that surrounds the implementation  across various departments and organizations  have made system integration a critical part of information technology  and application deployment.  <br/><br/>
        With well integrated ERP applications like SAP, Oracle, and others, it is important that organizations involve experienced  system integrators. Abaster’s team prides itself  as a first class system integrator of ERP applications.  <br/><br/>
        We understand the significance of a well integrated system to the business of our clients.
        </p>
    </div>
    <div class="container-fluid text-center text-muted about blue content-padding">
        <h3 class="white">our policy</h3>
        <p class="white contentMargin">
            The Abaster Consultancy Firm is committed to ensuring customer satisfaction, integrity, and transparency in all its business transactions with clients. Abaster consulting is a dynamic global services corporation. Customer satisfaction, integrity, and solution orientation are the cornerstones of our business.
        </p>
        <p class="white contentMargin">
            Abaster provides a catalogue of SAP solutions to meet the increasing demand for more consolidated and integrated systems. Our SAP consulting services embrace areas like SAP, ECC, Business One, and new dimension products — CRM, SRM, SCM, and other IS solutions. 
        </p>
        </div>
    <div class="container-fluid text-center text-muted about content-padding">
        <h3>the president </h3>
        
        <p class="contentMargin">Yomi Olalere, the president of Abaster, is an experienced ERP consultant for over eight years and ten years in Information Technology. Added to his experience, is an academic qualification in Management, Economics, and Technology.
        </p>
    </div>-->

</div>