<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="footer" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="footer">

					<div class="footer">

						<a href="https://www.instagram.com/gals.best.pal/?hl=en">
							<i class="fa fa-instagram"></i>
						</a>
						<a href="https://m.facebook.com/pg/galsbestpal/posts/?ref=page_internal">	
							<i class="fa fa-facebook-square"></i>
						</a>
						<!-- comment out donate link until donations accepted
						 <a href="#" class="footertext">Donate</a> -->
						<p>Made with ❤ by <a class="greenfield" href="https://greenfield-org.github.io/">Greenfield Development</a> - Copyright &copy; <script>document.write(new Date().getFullYear())</script></p>

						<!--<a href="#" class="footertext">Donate</a>-->

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

