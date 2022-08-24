<?php
/**
 * Template Name: Template: Shop
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
	
	<h1 style="font-size:55px">Shop</h1>
	<hr style="height:3px;border-width:0;color:black;background-color:black">
    <h2 class="subHeader">Shopping Supports our Mission</h2>
	

	<br><br>
	<div class="row justify-content-center"><br>
			<h2><a href="https://galsbestpal.com/wp-content/uploads/2022/08/AMAZON-SHOP.pdf" target="_blank" style="font-size:24px; padding: 10px; border: 3px solid black;">Amazon Affiliate Shop</a></h2><br><br><br>
        </div>
	
   
	<br><div class="row justify-content-center">
        <h2>Other Ways to Support us Through Amazon</h2>
    </div>
  
	<div class="row ustify-content-center">
			<a href="https://galsbestpal.com/wp-content/uploads/2022/08/AmazonAngles.pdf">
			<img class="img-fluid" 
				style="padding: 10px"
                src="<?php echo get_template_directory_uri(); ?>/images/Amazon.jpeg" 
                alt="Gals Best Pal logo"
                height="175"
                width="175"/>
						</a><br><br>
			</div>
</div>

<?php
get_footer();