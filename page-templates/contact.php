<?php
/**
 * Template Name: Template: Contact
 *
 * Contact Page Template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="container my-5">
    <h1>Get in Touch</h1>
    <hr/>
    <h2>We are an all volunteer run 501 C3 nonprofit org</h2>

    <div class="row justify-content-center">
        <div class="col-md-11 col-lg-9">
            <p class="text py-5">We are all volunteers here at The GBP Rescue Mission. 
                Please allow us 48 hours to respond to your email. We do our absolute 
                best to respond in a timely manner.
            </p>
        </div>
    </div>    
    <div class="row justify-content-center">
    </div>
    <div class="row justify-content-center">
        <h2>Contact us</h2>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-8">
            <div class="mail py-5">
                <?php echo do_shortcode('[contact-form-7 id="67" title="Contact form 1"]'); ?>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-4">
        <h2>Regarding Rehoming</h2>
    </div>
    <div class="row justify-content-center align-items-center">
        <div class="col-sm-12 col-md-8">
            <h3>Looking for options</h3>
        </div>
    </div>
    <div class="row text-center justify-content-center align-items-center buttonImage">
        <div class="col-sm-3 col-md-2">
            <img class="img-fluid" 
                src="<?php echo get_template_directory_uri(); ?>/images/envelope.svg" 
                alt="Gals Best Pal logo"
                height="200"
                width="200"/>
        </div>
    </div>
    <div class="row justify-content-center">
        <h2>Returning a dog</h2>
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-8">
            <h3>Rehoming your GBP dog</h3>
        </div>
    </div>
    <div class="row text-center justify-content-center align-items-center buttonImage">
        <div class="cols-sm-3 col-md-2">
            <img class="img-fluid" 
                src="<?php echo get_template_directory_uri(); ?>/images/envelope.svg" 
                alt="Gals Best Pal logo"
                height="200"
                width="200"/>
        </div>
    </div>
</div>

<?php
get_footer();