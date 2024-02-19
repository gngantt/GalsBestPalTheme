<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>



<div class="wrapper" id="index-wrapper">

	<div class="container">
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-5 col-lg-3 logo-holder">
				<img class="img-fluid" 
					src="<?php echo get_template_directory_uri(); ?>/images/logo.png" 
					alt="Gals Best Pal logo"
					height="500"
					width="500"/>
			</div>
		</div>
		
		<div class="row banner">
			<h1>Our Mission</h1>
		</div>

		<div class="row justify-content-center">
			<div class="col-9">
				<p class="text"><b>The Gals Best Pal Rescue Mission is to be a voice for the voiceless as it advocates for the dogs in its care while finding them safe, suitable, caring homes. The organization works with likeminded partners across the country and throughout the state of Massachusetts to rescue unwanted animals experiencing neglect, abuse, homelessness or at risk of euthanasia. The rescue also strives to make a difference for many unwanted dogs from different unfortunate situations. It does this by providing nurturing foster homes, promoting the importance of responsible dog ownership and, most importantly, spaying and neutering every dog that comes through the rescue as it aims to cut back on the overpopulation crisis occurring in many shelters and rescues across the nation. 501(c)3 Non-profit Organization
				<br>
					MA License #0036</b>
					</p>
			</div>

		

		<div class="row justify-content-center">

		<div class="tab">
			<div class="sec1 order-md-2">
				<div class="row justify-content-center my-5">
					<div class="col-xs-6 col-sm-5 col-md-8 col-lg-3 my-3 p-5">
						<a role="button" class="photo-btn" href="/adoption">
							<div class="photo-image">
								<div class="polaroid">
									<img class="img-fluid" 
										src="<?php echo get_template_directory_uri(); ?>/images/adoptdog.svg" 
										alt="Silhouette of a dog looking upwards"
										height="150"
										width="150"
									/>
								</div>
								<p class="hand">Adopt</p>
							</div>
						</a>
					</div>
					<div class="col-xs-6 col-sm-5 col-md-8 col-lg-3 my-3 p-5">
						<a role="button" class="photo-btn" href="/foster">
							<div class="photo-image">
								<div class="polaroid">
									<img class="img-fluid" 
										src="<?php echo get_template_directory_uri(); ?>/images/fosterdog.svg" 
										alt="Silhouette of a dog standing to the right"
										height="150"
										width="150"/>
								</div>
								<p class="hand">Foster</p>
							</div>
						</a>
					</div>
					<div class="col-xs-6 col-sm-5 col-md-8 col-lg-3 my-3 p-5">
						<a role="button" class="photo-btn" href="/volunteer">
							<div class="photo-image">
								<div class="polaroid">
									<img class="img-fluid volunteersvg" 
										src="<?php echo get_template_directory_uri(); ?>/images/volunteerdog.svg" 
										alt="Silhouette of a dog running"
										height="150"
										width="150"/>
								</div>
								<p class="hand">Volunteer</p>
							</div>
						</a>
					</div>
				</div>
			</div>
			
			
	
    </div>
    <div class="row text-center justify-content-center align-items-center">
        <div class="col-sm-3 col-md-2 arrow">
            <img class="img-fluid" 
                src="<?php echo get_template_directory_uri(); ?>/images/arrowcrop.gif" 
                alt="Gals Best Pal logo"
                height="200"
                width="200"/>
        </div>
        <div class="col-sm-1 col-md-4">
            <h2 class="subHeader"><a href="/faq" target="_blank" style="font-size:34px; padding: 10px; border: 3px solid black;">Frequently Asked Questions</a></h2><br>
               
        </div>
	<div class="row justify-content-center align-baseline py-5 sec2">
			<div class="col-xs-3 col-sm-3 col-md-4">
				<a href="/donate">
				<img class="img-fluid pupPhoto" 
					src="<?php echo get_template_directory_uri(); ?>/images/DonateClick.png" 
					alt="Silhouette of a dog barking"
					 height="150"
					 width="150"/>
				</a>
			</div>
				<div class="col-xs-12 col-sm-10 col-md-3 col-lg-6 mailing">
					<p>			<img class="filter-white envelope"
											src="<?php echo get_template_directory_uri(); ?>/images/mailinglist.svg" 
											alt="envelope with heart on it"
											height="90"
											width="90"/>
						<a href="http://eepurl.com/h4RqFX" target="_blank">Join our mailing list!</a></p>
				</div>
			
			
				
				
		</div>
	</div>

</div><!-- #index-wrapper -->

<?php
get_footer();
