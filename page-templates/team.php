<?php
/**
 * Template Name: Template: Team
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
	
	<h1 style="font-size:55px">Meet the Team</h1>
	<hr style="height:3px;border-width:0;color:black;background-color:black">
    <h2 class="subHeader">The faces behind GBP</h2>
	
	<div class="row justify-content-center">
        <div class="col-md-11 col-lg-9">
            <p class="text py-5" style="font-size:20px">We are all volunteers! Each volunteer at GBP has a special skillset that they bring to the rescue. We wouldn't be able to do what we do with out the help of all these amazing volunteers! 
            </p>
        </div>
    </div>
	
	<h2>
		Our Founders
	</h2>
		<div class="col-sm-3 col-md-3">
		<img class="img-fluid" 
					src="<?php echo get_template_directory_uri(); ?>/images/pgbreakdog.svg" 
					alt="Silhouette of a dog barking"
					 height="150"
					 width="150"/>
		<h3>Felicia</h3>
			</div>

		<div class="col-sm-3 col-md-3">
    	<img class="img-fluid" 
					src="<?php echo get_template_directory_uri(); ?>/images/pgbreakdog.svg" 
					alt="Silhouette of a dog barking"
					 height="150"
					 width="150"/>
		<h3>Marissa</h3><br><br>
			</div>
    
			</div>
		
	<h2>
        Dircetors
	</h2>
		<div class="row text-center justify-content-center align-items-center buttonImage">
        <div class="col-sm-3 col-md-3">
		<img class="img-fluid" 
					src="<?php echo get_template_directory_uri(); ?>/images/pgbreakdog.svg" 
					alt="Silhouette of a dog barking"
					 height="150"
					 width="150"/>
		<h3>Gabby</h3>
			</div>		
	
    	 
</div>

<?php
get_footer();