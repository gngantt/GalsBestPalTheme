<?php
/**
 * Template Name: Template: Foster
 *
 * Foster Page Template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="container my-5">
	
    <h1>Foster Hero</h1>
    <hr style="height:3px;border-width:0;color:black;background-color:black">
    <h2 class="subHeader">Be a Dog's Hero</h2>
	
	 <div class="row justify-content-center">

        <div class="col-md-11 col-lg-9">
            <p class="text py-5" style="font-size:20px">FOSTERING SAVES LIVES! Our GBP team has years of foster programming experience. 
                We are hands on and want to support our fosters through every step. Fostering should be fun, 
                and it is, if you are prepared and set up for success. Submit an application to start the process. 
                Our team will reach out to you in 1-2 days & set up a call to chat about the in's and outs of 
                becoming a foster HERO!</p>
		 </div>
			
			<div class="row justify-content-center"><br>
			<h2><a href="https://galsbestpal.com/wp-content/uploads/2022/10/steps-to-fostering.pdf" target="_blank" style="font-size:24px; padding: 10px; border: 3px solid black;">Steps to Fostering</a></h2><br><br><br>
        </div>		
		
    </div>
        <div class="row justify-content-center">
       
    <div class="row justify-content-center">
        <h2>About Our Program</h2>
    </div>
    <div class="row justify-content-center align-items-center">
        
    <div class="row text-center justify-content-center align-items-center buttonImage">
        <div class="col-sm-3 col-md-2">
            <a href="https://galsbestpal.com/wp-content/uploads/2023/01/foster.pdf">
                <img class="img-fluid m-4" 
                    src="<?php echo get_template_directory_uri(); ?>/images/CllickHere.png" 
                    alt="Gals Best Pal logo"
                    height="150"
                    width="150"/>
            </a>
        </div>
    </div>
    <div class="row justify-content-center">
		<h2><br>Foster Heroes</h2>
    </div>
    <div class="row justify-content-center">
       
    
    <div class="row text-center justify-content-center align-items-center buttonImage">
        <div class="cols-sm-3 col-md-2">
            <a href="https://galsbestpal.com/wp-content/uploads/2022/08/Foster-Hero.pdf">
                <img class="img-fluid m-4" 
                    src="<?php echo get_template_directory_uri(); ?>/images/CllickHere.png" 
                    alt="Gals Best Pal logo"
                    height="150"
                    width="150"/>
            </a>
        </div>
    </div>
		</div>
    <div class="row justify-content-center">
        <h2><br>Foster Application</h2>
    </div>
    <div class="row justify-content-center">
		
      
    <div class="row text-center justify-content-center align-items-center buttonImage">
        <div class="col-sm-3 col-md-2">
            <a href="https://petstablished.com/foster_form/40982/generic" target="_blank">
                <img class="img-fluid m-4" 
                    src="<?php echo get_template_directory_uri(); ?>/images/CllickHere.png" 
                    alt="Gals Best Pal logo"
                    height="150"
                    width="150"/>
            </a>
			
			 </div>
		</div>
		</div>
		
			<div class="row justify-content-center">
        <br><br><h2>Donate to Help a Dog</h2>
    </div>
			 <div class="row justify-content-center">
			<div class="row text-center justify-content-center align-items-center buttonImage">
         <div class="col-sm-3 col-lg-2">
            <a role="button" class="photo-btn" href="/donate">
                <img class="img-fluid m-4" 
                    src="<?php echo get_template_directory_uri(); ?>/images/DonateClick.png" 
                    alt="Gals Best Pal logo"
                    height="100"
                    width="100"/>
            </a>
			</div>
				 </div>
		</div>
       
		
	</div>
		
	
	
</div>

<?php
get_footer();