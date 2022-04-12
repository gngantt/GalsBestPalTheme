<?php
/**
 * Template Name: Template: Volunteer
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
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
    <h3>Become part of the mission</h3>

    <div class="row justify-content-center">
        <div class="col-md-11 col-lg-9">
            <p class="text pt-0 ">We are all volunteers! The GBP RESCUE MISSION was formed on that very idea. This rescue has so many moving parts and the more the merrier is the way we look at it! We love our volunteers and believe every person has a place in rescue! We believe in communication and mutual respect throughout the organization. Everyone is equally as important here from the dog walkers, to the Directors. We want to hear your ideas and utilize everyone's personal strengths! Join us! 
            </p>
        </div>
    </div>
        </div>
    </div>    
    <div class="row justify-content-center">
        <h2>Will your employer match your donation?</h2>
    </div>
    <div class="row justify-content-center align-items-center">
        <div class="col-sm-12 col-md-8">
            <h3>Double the donation!</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h2>About the Program</h2>
        </div>
        <div class="col">
        <img class="img-fluid" 
                src="<?php echo get_template_directory_uri(); ?>/images/tennisball.svg" 
                alt="Tennis ball button"
                height="250"
                width="250"/>
        </div>
    </div>
    <div class="row">
        <div class="col">
        <img class="img-fluid" 
                src="<?php echo get_template_directory_uri(); ?>/images/amazonlogo.svg" 
                alt="amazon logo"
                height="100"
                width="100"/>
        </div>
        <div class="col">
        <img class="img-fluid" 
                src="<?php echo get_template_directory_uri(); ?>/images/amazonlogo.svg" 
                alt="amazon logo"
                height="100"
                width="100"/>
        </div>
    </div>
</div>

<?php
get_footer();