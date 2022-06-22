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
    <h2 class="subHeader">We are an all volunteer run 501 C3 nonprofit org</h2>

    <div class="row justify-content-center">
        <div class="col-md-11 col-lg-9">
            <p class="text py-5">We are all volunteers here at The GBP Rescue Mission. 
                Please allow us 48 hours to respond to your email. We do our absolute 
                best to respond in a timely manner.
            </p>
        </div>
    </div>  
    <div class="sec2 order-md-1">
				<div class="row banner">
					<h2>Our Story</h2>
				</div>

				<div class="row justify-content-center">
					<div class="col-9">
						<p class="text text-1">Fresh out of business school and feeling unfulfilled by the typical 9-5 job, Felicia felt the desire to make a difference outside of the corporate world. The pandemic hit and everyone had time to foster- so she signed up! Immediately, she was hooked on being involved in dog rescue and started a blog about her fosters and the dogs she met through rescue. 
                        Being brand new to fostering and rescue- Felicia met Molleen and Marissa, who had YEARS of experience between the two of them. The first year of working together, the three worked tirelessly on harder to place dogs and local surrenders as they fell more and more in love with the misunderstood dogs needing homes. After months of working together and many successful adoptions/fosters, they decided creating The Gals Best Pal Rescue Mission would be the perfect next step, to assist more of these dogs in need.</p>
						<button class="btn readMore">Read more</button>
						<p class=" text signature">Love,<br/> Felicia, Molleen, and Marissa</p>
					</div>
				</div>
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
            <a href="https://www.canva.com/design/DAFC1Q20WT0/1cIV0Ns1ziuMG9tXCluftQ/view?utm_content=DAFC1Q20WT0&utm_campaign=designshare&utm_medium=link&utm_source=publishsharelink" target="_blank">
                <img class="img-fluid" 
                    src="<?php echo get_template_directory_uri(); ?>/images/envelope.svg" 
                    alt="Gals Best Pal logo"
                    height="200"
                    width="200"/>
            </a>
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
            <a href="https://petstablished.com/petlover/general_form/41738" target="_blank">
                <img class="img-fluid" 
                    src="<?php echo get_template_directory_uri(); ?>/images/envelope.svg" 
                    alt="Gals Best Pal logo"
                    height="200"
                    width="200"/>
            </a>
        </div>
    </div>
</div>

<?php
get_footer();