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
    <hr/>
    <h2>Be a Dog's Hero</h2>

    <div class="row justify-content-center">
        <div class="col-md-11 col-lg-9">
            <p class="text py-5">FOSTERING SAVES LIVES! Our GBP team has years of foster programming experience. 
                We are hands on and want to support our fosters through every step. Fostering should be fun, 
                and it is, if you are prepared and set up for success. Submit an application to start the process. 
                Our team will reach out to you in 1-2 days & set up a call to chat about the in's and outs of 
                becoming a foster HERO!
            </p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-3 col-md-2 ">
            <img class="img-fluid pb-5" 
                src="<?php echo get_template_directory_uri(); ?>/images/pgbreakdog.svg" 
                alt="Gals Best Pal logo"
                height="150"
                width="150"/>
    </div>       
    <div class="row justify-content-center">
    </div>
    <div class="row justify-content-center">
        <h2>About the Program</h2>
    </div>
    <div class="row justify-content-center align-items-center">
        <div class="col-sm-12 col-md-8">
            <h3>Our Foster Program</h3>
        </div>
    </div>
    <div class="row text-center justify-content-center align-items-center buttonImage">
    <div class="col-sm-3 col-md-2 arrow">
            <img class="img-fluid" 
                src="<?php echo get_template_directory_uri(); ?>/images/arrowcrop.gif" 
                alt="Gals Best Pal logo"
                height="100"
                width="100"/>
        </div>
        <div class="col-sm-3 col-md-2">
            <a href="/404.php">
                <img class="img-fluid" 
                    src="<?php echo get_template_directory_uri(); ?>/images/tennisball.svg" 
                    alt="Gals Best Pal logo"
                    height="100"
                    width="100"/>
            </a>
        </div>
    </div>
    <div class="row justify-content-center">
        <h2>Foster Heros</h2>
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-8">
            <h3>Foster Success Stories</h3>
        </div>
    </div>
    <div class="row text-center justify-content-center align-items-center buttonImage">
        <div class="col-sm-3 col-md-2 arrow">
            <img class="img-fluid" 
                src="<?php echo get_template_directory_uri(); ?>/images/arrowcrop.gif" 
                alt="Gals Best Pal logo"
                height="100"
                width="100"/>
        </div>
        <div class="cols-sm-3 col-md-2">
            <a href="/404.php">
                <img class="img-fluid" 
                    src="<?php echo get_template_directory_uri(); ?>/images/tennisball.svg" 
                    alt="Gals Best Pal logo"
                    height="100"
                    width="100"/>
            </a>
        </div>
    </div>
    <div class="row justify-content-center">
        <h2>Foster Application</h2>
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-8">
            <h3>Become a Foster Home</h3>
        </div>
    </div>
    <div class="row text-center justify-content-center align-items-center buttonImage">
        <div class="col-sm-3 col-md-2 arrow">
            <img class="img-fluid" 
                src="<?php echo get_template_directory_uri(); ?>/images/arrowcrop.gif" 
                alt="Gals Best Pal logo"
                height="100"
                width="100"/>
        </div>
        <div class="col-sm-3 col-md-2">
            <a href="https://petstablished.com/foster_form/40982/generic" target="_blank">
                <img class="img-fluid" 
                    src="<?php echo get_template_directory_uri(); ?>/images/tennisball.svg" 
                    alt="Gals Best Pal logo"
                    height="100"
                    width="100"/>
            </a>
        </div>
    </div>
</div>

<?php
get_footer();