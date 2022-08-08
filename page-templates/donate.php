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
    <hr style="height:3px;border-width:0;color:black;background-color:black">
    <h2 class="subHeader">Donate to the mission</h2>

    <div class="row justify-content-center">
        <div class="col-md-11 col-lg-9">
            <p class="text pt-0 ">WE ARE A MASSACHUSETTS  501 C 3 NONPROFIT ORG.</br>
            Thank you from the bottom of our hearts for all your donations. Every dollar helps another dog in need!
            </p>
	<h2><a href="https://petlover.petstablished.com/online_donations/organization/2654835?pet_id=1491549&_ga=2.163410300.1530045006.1659823076-1089981098.1655487524" style="font-size:24px; padding: 10px; border: 3px solid black;">Donate Here!</a></h2>

        </div>
    </div>
        </div>
    </div> 

			<div class="row justify-content-center">
					<h2>Become a GBP VIP</h2>
				<div class="col-md-11 col-lg-9">
					<a href="https://galsbestpal.com/wp-content/uploads/2022/08/GBP_Donate.pdf">
			<img class="img-fluid" 
                src="<?php echo get_template_directory_uri(); ?>/images/GBP_VIP.png" 
                alt="Gals Best Pal logo"
                height="200"
                width="200"/>
						</a>
       	 	</div>
</div>




    <br><div class="row justify-content-center">
        <h2>Will your employer match your donation?</h2>
		<h3>Double the donation!</h3>
    </div>
  

    <div class="row">
		<div class="row justify-content-center">
        <div class="col">
            <h2>Amazon Wishlist</h2>
        </div>
        <div class="col">
            <h2>Amazon Smile</h2>
        </div>
    </div>

 
		<div class="row text-center justify-content-center align-items-center">
        <div class="col-md-3 col-md-3">
			<a href="https://smile.amazon.com/hz/wishlist/ls/15VG4OWTTWM3V/ref=nav_wishlist_lists_2">
        <img class="img-fluid" 
                src="<?php echo get_template_directory_uri(); ?>/images/amazonlogo.svg" 
                alt="amazon logo"
                height="100"
                width="100"/>
			</a>
        </div>
	
			<div class="col-md-3 col-md-3">
			<a href="https://galsbestpal.com/wp-content/uploads/2022/08/GBP_Donate.pdf">
			<img class="img-fluid" 
                src="<?php echo get_template_directory_uri(); ?>/images/GBP_VIP.png" 
                alt="Gals Best Pal logo"
                height="100"
                width="100"/>
						</a>
			</div>
	
        <div class="col-md-3 col-md-3">
			<a href="https://smile.amazon.com/charity/select/search?q=Gal+S+Best+Pal+Incorporated&orig=&ie=UTF-8">
        <img class="img-fluid" 
                src="<?php echo get_template_directory_uri(); ?>/images/amazonlogo.svg" 
                alt="amazon logo"
                height="100"
                width="100"/>
			</a>
        </div>
	</div>
    </div>
	
</div>

<?php
get_footer();