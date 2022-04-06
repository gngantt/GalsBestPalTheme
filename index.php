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
			<h1>Our Story</h1>
		</div>

		<div class="row justify-content-center">
			<div class="col-9">
				<p class="text">Fresh out of business school and feeling unfulfilled by the typical 9-5 job, Felicia felt the desire to make a difference outside of the corporate world. The pandemic hit and everyone had time to foster- so she signed up! Immediately, she was hooked on being involved in rescue and started a blog about her fosters and dogs she had come in contact with. 
Being a young newbie at fostering and rescue- Felicia met Molleen and Marissa, who had YEARS of experience between the two of them and together have placed & fostered over 300 dogs! The first year of working together, the three worked tirelessly on harder to place dogs and local surrenders as they fell more and more in love with the misunderstood dogs needing homes. After months of working together and many successful adoptions/fosters, they decided creating Gals Best Pal would be the perfect step to assist more of these dogs at a pace we can keep up with.
</p>
			</div>
		</div>

		<div class="row justify-content-center my-5">
			<div class="col-xs-12 col-sm-7 col-lg-2 m-5">
				<div class="photo-image">
					<div class="polaroid">
						<img class="img-fluid" 
							src="<?php echo get_template_directory_uri(); ?>/images/adoptdog.svg" 
							alt="Silhouette of a dog looking upwards"
							height="150"
							width="150"/>
					</div>
					<p class="hand">Adopt</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-7 col-lg-2 m-5">
				<div class="photo-image">
					<div class="polaroid">
						<img class="img-fluid" 
							src="<?php echo get_template_directory_uri(); ?>/images/fosterdog.svg" 
							alt="Silhouette of a dog standing to the right"
							height="160"
							width="160"/>
					</div>
					<p class="hand">Foster</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-7 col-lg-2 m-5">
				<div class="photo-image">
					<div class="polaroid">
						<img class="img-fluid" 
							src="<?php echo get_template_directory_uri(); ?>/images/volunteerdog.svg" 
							alt="Silhouette of a dog running"
							height="150"
							width="150"/>
					</div>
					<p class="hand">Volunteer</p>
				</div>
			</div>
		</div>

		<div class="row banner">
			<h2>Our Mission</h2>
		</div>

		<div class="row justify-content-center">
			<div class="col-9">
				<p class="text">The Gals Best Pal Rescue Mission is to support locally displaced dogs in Massachusetts while also making an impact on the lives of homeless dogs nationwide. We are committed to supporting our dogs, fosters, volunteers, and adopters needs. The focus will always be on the quality of the work we are doing, while making an impact on the lives of homeless dogs.</p>
			</div>
		</div>

		<div class="row justify-content-center align-baseline py-5">
			<div class="col-xs-3 col-sm-3 col-lg-3">
				<img class="img-fluid" 
					src="<?php echo get_template_directory_uri(); ?>/images/dogsilhouette1.svg" 
					alt="Silhouette of a dog barking"/>
			</div>
			<div class="col-xs-12 col-sm-10 col-lg-6 mailing">
				<i class="fa fa-envelope-o fa-4x"></i>
				<p>Join our mailing list!</p>
			</div>
		</div>
	</div>

</div><!-- #index-wrapper -->

<?php
get_footer();
