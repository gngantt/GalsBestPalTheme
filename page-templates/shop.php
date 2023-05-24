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
	<p class="text">Shop our Amazon Affiliate store for some suggested products to buy your new PAL! A portion of the sales will help GBP!</p>
	
	<div class="row justify-content-center"><br>
					<a target="_blank" href="https://galsbestpal.com/wp-content/uploads/2023/01/AMAZON-SHOP.pdf">
			<img class="img-fluid" 
                src="<?php echo get_template_directory_uri(); ?>/images/Amazon Affiliates.png" 
                alt="Gals Best Pal logo"
                height="250"
                width="250"/>
						</a>
       	 			</div><br><br>
	
	
   
	<h2>Bonfire Store</h2>
	<p class="text">Click the bonfire image below to shop GBP Swag! Each item ships directly to you!</p>
	
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