<?php
/**
 * Template Name: Template: Donate
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
    <h1>Donate</h1>
    <h3>Donate to the mission</h3>

    <div class="row justify-content-center">
        <div class="col-md-11 col-lg-9">
            <p class="text pt-0">WE ARE A MASSACHUSETTS  501 C 3 NONPROFIT ORG.</br>
            Thank you from the bottom of our hearts for all your donations. Every dollar helps another dog in need!
            </p>
            <img class="img-fluid" 
                src="<?php echo get_template_directory_uri(); ?>/images/donatebutton.svg" 
                alt="Gals Best Pal logo"
                height="250"
                width="250"/>
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
            <h2>Amazon Wishlist</h2>
        </div>
        <div class="col">
            <h2>Amazon Smile</h2>
        </div>
    </div>
</div>

<?php
get_footer();