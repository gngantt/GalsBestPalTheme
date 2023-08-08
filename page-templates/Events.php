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
                src="<?php echo get_template_directory_uri(); ?>/images/drink-august.jpg" 
                alt="Gals Best Pal logo"
                height="800"
                width="800"/>
				

			<a target="_blank" href="https://www.facebook.com/events/1999702820398027?acontext=%7B%22event_action_history%22%3A[%7B%22mechanism%22%3A%22your_upcoming_events_unit%22%2C%22surface%22%3A%22bookmark%22%7D]%2C%22ref_notif_type%22%3Anull%7D">
			<img class="img-fluid" 
				style="padding: 10px"
                src="<?php echo get_template_directory_uri(); ?>/images/8-12_NaturalDog.jpg" 
                alt="Gals Best Pal logo"
                height="800"
                width="800"/>
				</a>
				
				
			<a target="_blank" href="https://www.facebook.com/galsbestpal">
			<img class="img-fluid" 
				style="padding: 10px"
                src="<?php echo get_template_directory_uri(); ?>/images/9_16_TractorSupply.jpg" 
                alt="Gals Best Pal logo"
                height="800"
                width="800"/>
				</a>
				
			<a target="_blank" href="https://www.facebook.com/galsbestpal">
			<img class="img-fluid" 
				style="padding: 10px"
                src="<?php echo get_template_directory_uri(); ?>/images/9_21_YappyHour.jpg" 
                alt="Gals Best Pal logo"
                height="800"
                width="800"/>
				</a>
	
</div>

<?php
get_footer();