<?php
/**
 * Template Name: Template: Helpful Resources
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
    <h1>Useful Tips and Handouts</h1>
    <hr/>
    <h2>Set Yourself Up For Success</h2>

    <div class="row justify-content-center">
        <div class="col-md-11 col-lg-9">
            <p class="text py-3">
                <a href="https://www.akc.org/expert-advice/puppy-information/puppy-proofing-tips-for-your-home-and-yard">Puppy Proofing your Home and Yard</a></br>
                <a href="https://thebark.com/content/making-introductions-dog-dog">Introducing your New Dog to your Resident Dog</a></br>
                <a href="https://youtu.be/BRlxhvQ8I9g">Introducing your New Dog to your Resident Cat</a>
            </p>
        </div>
    <div class="row justify-content-center">
    </div>
    <div class="row justify-content-center">
        <h3>Videos to Watch as a Family</h3>
    </div>
    <div class="row justify-content-center align-items-center">
        <div class="col-sm-12 col-md-8">
            <p class="text py-3">
                <a href="https://www.youtube.com/watch?v=ZBRAE7eGzpw">Dog Body Language</a></br>
                <a href="https://youtu.be/siy0eog48ys">Additional Body Language</a></br>
                <a href="https://www.thefamilydog.com/stop-the-77">Stop the 77</a>
            </p>    
        </div>
    </div>
    <div class="row justify-content-center">
        <h3>The First Two Weeks</h3>
    </div>
    <div class="row justify-content-center align-items-center">
        <div class="col-sm-12 col-md-8">
            <p class="text py-3">
                <a href="https://www.fearfreehappyhomes.com/kit/puppies-101/download/23714/">Puppy Schedule Guide</a></br>
                <a href="https://www.apartmenttherapy.com/daily-schedule-for-dogs-37063896">Adult Dog Routine</a></br>
                <a href="https://www.reboundhounds.org/the-first-two-weeks.html">Decompression Phase</a></br>
                <a href="https://static1.squarespace.com/static/5acd6d2a3e2d09e44728ddca/t/5cc65c52ee6eb05d619f8dcf/1556503635104/A+Guide+to+the+First+Two+Weeks.pdf">"Two Week Shutdown"</a>
            </p>    
        </div>
    </div>
    </div>
</div>

<?php
get_footer();