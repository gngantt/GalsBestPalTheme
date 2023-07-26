<?php
/**
 * Template Name: Template: Events
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
	
	<h1 style="font-size:55px">GBP Events!</h1>
<div class="row banner justify-content-center align-baseline">
			<div class="col-md-3">
			
				
				<img class="img-fluid" 
				style="padding: 10px"
                src="<?php echo get_template_directory_uri(); ?>/images/july-drink.jpg" 
                alt="Gals Best Pal logo"
                height="800"
                width="800"/>
				

			<a target="_blank" href="https://www.facebook.com/galsbestpal">
			
			<img class="img-fluid" 
				style="padding: 10px"
                src="<?php echo get_template_directory_uri(); ?>/images/8-12-natural_dog.jpg" 
                alt="Gals Best Pal logo"
                height="800"
                width="800"/>
				</a>
	
</div>

<?php
get_footer();