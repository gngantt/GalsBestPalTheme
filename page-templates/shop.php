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
	<h2>Shop Amazon Products</h2>
	<p class="text">Shop our Amazon Affiliate store for suggested products for your new PAL and a portion of the sales will help GBP!</p>
	
	<div class="row justify-content-center"><br>
			<h2><a href="https://galsbestpal.com/wp-content/uploads/2023/01/AMAZON-SHOP.pdf" target="_blank" style="font-size:24px; padding: 10px; border: 3px solid black;">Amazon Affiliate Shop</a></h2><br><br><br>
        </div><br>
	
   
	<h2>Bonfire Store</h2>
	<p class="text">Click the link below to shop GBP Swag! Each item ships directly to you!</p>
	
	<div class="row justify-content-center">
					<a target="_blank" href="https://www.bonfire.com/store/gals-best-pal/">
			<img class="img-fluid" 
                src="<?php echo get_template_directory_uri(); ?>/images/bonfire.jpeg" 
                alt="Gals Best Pal logo"
                height="250"
                width="250"/>
						</a>
       	 			</div>
				
	
</div>

<?php
get_footer();