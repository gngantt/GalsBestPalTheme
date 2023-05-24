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
    <h2 class="subHeader">Ways to Support GBP</h2>
	<br>

    <div class="row justify-content-center">
        <div class="col-md-9 col-lg-9">
            <p class="text pt-0">WE ARE A MASSACHUSETTS  501 C 3 NONPROFIT ORG.</br>
            Thank you from the bottom of our hearts for all your donations. Every dollar helps another dog in need!</p>
       
	
	<h2>Direct Paypal or Venmo Donation</h2>
	<p class="text">Click on the image or scan the QR code.</p>
	
		<div class="row banner justify-content-center align-baseline">
			<div class="col-xs-3 col-sm-3 col-md-3">
			<a target="_blank" href="https://account.venmo.com/u/galsbestpal">
			<img class="img-fluid" 
				style="padding: 10px"
                src="<?php echo get_template_directory_uri(); ?>/images/Venmo_QR.jpg" 
                alt="Gals Best Pal logo"
                height="175"
                width="175"/>
				</a>
			</div>
				<div class="col-xs-3 col-sm-3 col-md-3">
				<a target="_blank" href="https://www.paypal.com/donate/?hosted_button_id=ZBCWZXVGB7HPY" target="_blank">
			<img class="img-fluid" 
				style="padding: 10px"
                src="<?php echo get_template_directory_uri(); ?>/images/Paypal_QR.jpg" 
                alt="Gals Best Pal logo"
                height="175"
                width="175"/>
					</a>
					</div>
			</div>
	</div>


<div class="row banner justify-content-center">
<h2>Support us Through Amazon</h2>
	<p class="text">Help us with our rescue supplies by donating an item off our wishlist!</p>
			
			
	<div class="col-xs-3 col-sm-2 col-md-2">
	<h2><a target="_blank" href="https://www.amazon.com/hz/wishlist/ls/15VG4OWTTWM3V/ref=nav_wishlist_lists_1" style="font-size:18px; padding: 10px; border: 3px solid black;">Rescue Wishlist</a></h2><br><br>
	</div>
	
	<div class="col-xs-3 col-sm-2 col-md-2">
	<h2><a target="_blank" href="https://www.amazon.com/hz/wishlist/ls/3DBJHP59LHPVH?ref_=list_d_wl_lfu_nav_5" style="font-size:20px; padding: 10px; border: 3px solid black;">Puppy Wishlist</a></h2><br><br>
	</div>
	
	<div class="col-xs-3 col-sm-2 col-md-2">
	<h2><a target="_blank" href="https://www.amazon.com/hz/wishlist/ls/18BBT0XTV9VAU?ref_=list_d_wl_lfu_nav_3" style="font-size:20px; padding: 10px; border: 3px solid black;">Food Wishlist</a></h2><br><br>
		</div>
	</div>
	

<div class="row banner justify-content-center">
<h2>Buy a DNA Kit for your PAL</h2>
	<p class="text">A portion of each sale helps support GBP!</p>

<div class="col-md-11 col-lg-9">
					<a target="_blank" href="https://shareasale.com/r.cfm?b=878501&u=3408493&m=66364&urllink=&afftrack=">
			<img class="img-fluid" 
                src="<?php echo get_template_directory_uri(); ?>/images/Embark.jpeg" 
                alt="Gals Best Pal logo"
                height="250"
                width="250"/>
						</a>
       	 			</div>
				</div>



	
					

			<div class="row banner justify-content-center">
					<h2>Become a GBP VIP</h2>
				<div class="col-md-11 col-lg-9">
					<a href="https://galsbestpal.com/wp-content/uploads/2022/08/GBP_VIP.pdf">
			<img class="img-fluid" 
                src="<?php echo get_template_directory_uri(); ?>/images/GBP_VIP.png" 
                alt="Gals Best Pal logo"
                height="200"
                width="200"/>
						</a>
       	 	</div>
</div><br><br>




    <br><div class="row justify-content-center">
        <h2>Will your employer match your donation?</h2>
    </div>
  
	<div class="row ustify-content-center">
			<a href="https://doublethedonation.com/">
			<img class="img-fluid" 
                src="<?php echo get_template_directory_uri(); ?>/images/DoubleDonation.png" 
                alt="Gals Best Pal logo"
                height="150"
                width="150"/>
						</a>
			</div><br><br>


  
	

    </div>
	
</div>
</div>

<?php
get_footer();