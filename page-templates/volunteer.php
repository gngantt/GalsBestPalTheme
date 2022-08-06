<?php
/**
 * Template Name: Template: Volunteer
 *
 * Foster Page Template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="container my-5">
    <h1>Volunteer</h1>
    <hr style="height:3px;border-width:0;color:black;background-color:black">
    <h2 class="subHeader">Be part of the mission!</h2>
	
    <div class="row justify-content-center">
        <div class="col-md-11 col-lg-9">
            <p class="text py-5" style="font-size:20px">We are all volunteers! The GBP RESCUE MISSION was formed on that very idea. This rescue has so many moving parts and the more the merrier is the way we look at it! We love our volunteers and believe every person has a place in rescue! We believe in communication and mutual respect throughout the organization. Everyone is equally as important here from the dog walkers, to the Directors. We want to hear your ideas and utilize everyone's personal strengths! Join us! 

            </p>
			
        </div>
    </div>
	
	
	
	
    <div class="row justify-content-center">
        <div class="col-sm-3 col-md-2 ">
            <img class="img-fluid pb-5" 
                src="<?php echo get_template_directory_uri(); ?>/images/peekaboodog.svg" 
                alt="Gals Best Pal logo"
                height="150"
                width="150"/>
    </div>       
    <div class="row justify-content-center">
    </div>
    <div class="row justify-content-center">
        <h2>About the Program</h2>
    </div>
    <div class="row justify-content-center align-items-center">
    </div>
    <div class="row text-center justify-content-center align-items-center my-5">
        <div class="col-sm-3 col-md-1 arrow">
            <img class="img-fluid" 
                src="<?php echo get_template_directory_uri(); ?>/images/arrowcrop.gif" 
                alt="Gals Best Pal logo"
                height="100"
                width="100"/>
        </div>
        <div class="col-sm-3 col-md-2">
            <a href="https://www.canva.com/design/DAFC1sJ55g0/hDrrQeW_n4OY5gkaisJXrg/view?utm_content=DAFC1sJ55g0&utm_campaign=designshare&utm_medium=link&utm_source=publishsharelink" target="_blank">
                <img class="img-fluid m-4" 
                    src="<?php echo get_template_directory_uri(); ?>/images/tennisball.svg" 
                    alt="Gals Best Pal logo"
                    height="100"
                    width="100"/>
            </a>
        </div>
    </div>
    <div class="row justify-content-center">
        <h2>Volunteer Application</h2>
    </div>
    <div class="row justify-content-center">
    </div>
    <div class="row text-center justify-content-center align-items-center my-5">
        <div class="col-sm-3 col-md-1 arrow">
            <img class="img-fluid" 
                src="<?php echo get_template_directory_uri(); ?>/images/arrowcrop.gif" 
                alt="Gals Best Pal logo"
                height="100"
                width="100"/>
        </div>
        <div class="col-sm-3 col-md-2">
            <a href="https://petstablished.com/petlover/general_form/42975" target="_blank">
                <img class="img-fluid m-4" 
                    src="<?php echo get_template_directory_uri(); ?>/images/tennisball.svg" 
                    alt="Gals Best Pal logo"
                    height="100"
                    width="100"/>
            </a>
			
			</div>
			<div class="row justify-content-center">
        <br><br><h2>Donate to Help a Dog</h2>
    </div>
			
			<div class="row text-center justify-content-center align-items-center buttonImage">
        <div class="col-sm-3 col-md-1 arrow">
            <img class="img-fluid" 
                src="<?php echo get_template_directory_uri(); ?>/images/arrowcrop.gif" 
                alt="Gals Best Pal logo"
                height="200"
                width="200"/>
       </div>
         <div class="col-sm-3 col-lg-2">
            <a role="button" class="photo-btn" href="/donate">
                <img class="img-fluid" 
                    src="<?php echo get_template_directory_uri(); ?>/images/DonateClick.png" 
                    alt="Gals Best Pal logo"
                    height="150"
                    width="150"/>
            </a>
			</div>
			
        </div>
    </div>
</div>

<?php
get_footer();
get_footer();