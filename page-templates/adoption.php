<?php
/**
 * Template Name: Template: Adoption
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
    <h1>Adoption</h1>
	<hr style="height:3px;border-width:0;color:black;background-color:black">
    <h2 class="subHeader">Our Adoption Process</h2>

    <div class="row justify-content-center">
		
        <div class="col-md-11 col-lg-9">
            <p class="text py-4" style="font-size:20px">Our goal at GBP is to make rescuing a dog stress free and interactive, while 
                also setting our adopters up for success, by thoughtfully placing the dogs we 
                are adopting out. During the application process, our goal is to communicate 
                and educate each person we talk to, so that when you find your perfect match 
                and are ready to bring them home, you are prepared and ready for the next few 
                weeks to come! We will continue to provide thoughtful advice and emotional assistance 
				throughout the lifetime of each GBP adoption.</p>
				<h2><a href="https://galsbestpal.com/wp-content/uploads/2022/10/steps-to-adopting.pdf" target="_blank" style="font-size:24px; padding: 10px; border: 3px solid black;">Steps to Adopt</a></h2><br><br>
            
        </div>
    <!--<div class="row justify-content-center">
        <div class="col-sm-3 col-md-2 ">
                <img class="img-fluid pb-5" 
                    src="<?php echo get_template_directory_uri(); ?>/images/pgbreakdog.svg" 
                    alt="Gals Best Pal logo"
                    height="150"
                    width="150"/>-->
    </div>    
    <div class="row justify-content-center">
    </div>
    <div class="row justify-content-center">
        <h2>Available Dogs</h2>
    </div>
    <div class="row justify-content-center align-items-center">
        <!-- <div class="col-sm-12 col-md-8">
            <h3>Check out our available dogs</h3>
        </div> -->
    </div>
	
	
    <div class="row text-center justify-content-center align-items-center buttonImage">
        <div class="col-sm-3 col-md-2">
            <a href="https://www.adoptapet.com/shelter190185-dogs.html" target="_blank">
                <img class="img-fluid m-4" 
                    src="<?php echo get_template_directory_uri(); ?>/images/CllickHere.png" 
                    alt="Gals Best Pal logo"
                    height="150"
                    width="150"/>
            </a>
        </div>
    </div>
	
	
	
	
	
	
	
    <div class="row justify-content-center">
        <h2>Adoption Application</h2>
    </div>
    <div class="row justify-content-center">
       <!-- <div class="col-sm-12 col-md-8">
            <h3>Fill Out an Adoption Application</h3>
        </div> -->
    </div>
    <div class="row text-center justify-content-center align-items-center buttonImage">
        <div class="cols-sm-3 col-md-2">
        <a role="button" class="photo-btn sg-popup-id-179" href="https://petstablished.com/adoption_form/40983/generichttps://petstablished.com/adoption_form/40983/generic">
            <img class="img-fluid m-4" 
                src="<?php echo get_template_directory_uri(); ?>/images/CllickHere.png" 
                alt="Gals Best Pal logo"
                height="150"
                width="150"/>
        </a>
        </div>
    </div>
    <div class="row justify-content-center">
        <h2>Helpful Resources</h2>
    </div>
    <div class="row justify-content-center">
       <!-- <div class="col-sm-12 col-md-8">
            <h3>Setting Adopters Up for Success</h3>
        </div> -->
    </div>
    <div class="row text-center justify-content-center align-items-center buttonImage">
        <div class="col-sm-3 col-md-2">
            <a href="/helpful-resources" target="_blank"><br>
                <img class="img-fluid tennisBall" 
                    src="<?php echo get_template_directory_uri(); ?>/images/CllickHere.png" 
                    alt="Gals Best Pal logo"
                    height="150"
                    width="150"/>
            </a>
		</div><br>
			<div class="row justify-content-center">
        <br><br><h2>Donate to Help a Dog</h2>
    </div>
			
			<div class="row text-center justify-content-center align-items-center buttonImage">
        <div class="col-sm-3 col-lg-2">
            <a role="button" class="photo-btn" href="/donate">
                <img class="img-fluid" 
                    src="<?php echo get_template_directory_uri(); ?>/images/DonateClick.png" 
                    alt="Gals Best Pal logo"
                    height="150"
                    width="150"/>
            </a>
			</div>
			

    </div>
</div>

<?php
get_footer();