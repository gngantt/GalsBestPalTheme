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
				<p class="text">The Gals Best Pal Rescue Mission is to support locally displaced dogs in Massachusetts while also making an impact on the lives of homeless dogs nationwide. We are committed to supporting our dogs, fosters, volunteers, and adopters needs. The focus will always be on the quality of the work we are doing, while making an impact on the lives of homeless dogs.
				</p>
			</div>
		</div>

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
		<div class="row justify-content-center align-baseline py-5 sec2">
			<div class="col-xs-3 col-sm-3 col-lg-3">
				<img class="img-fluid pupPhoto" 
					src="<?php echo get_template_directory_uri(); ?>/images/dogsilhouette1.svg" 
					alt="Silhouette of a dog barking"/>
			</div>
			<a href="http://eepurl.com/h4RqFX" target="_blank">
				<div class="col-xs-12 col-sm-10 col-md-5 col-lg-6 mailing">
					<p>			<img class="filter-white envelope"
											src="<?php echo get_template_directory_uri(); ?>/images/mailinglist.svg" 
											alt="envelope with heart on it"
											height="90"
											width="90"/>
						
					Join our mailing list!</p>
				</div>
			</a>
		</div>
	</div>

</div><!-- #index-wrapper -->

<?php
get_footer();
