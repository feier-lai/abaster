<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blankspace
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="footer-container-logo">
							<?php the_custom_logo(); ?>
						</div>
						<div class="">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'menu-2',
									'menu_id'        => 'footer-menu',
								) );
							?>
						</div>
					</div>
					<div class="col-md-12">
						<div id="smedia">
							<div id="btm-instagram" class="smedia-icon-con"><a href="#instagram" target="_blank"><i class="fa fa-instagram fa-2x footer-instagram" aria-hidden="true"></i></a></div>
							<div id="btm-facebook" class="smedia-icon-con"><a href="#facebook" target="_blank"> <i class="fa fa-facebook fa-2x footer-facebook" aria-hidden="true"></i> </a></div>
							<div id="btm-pinterest" class="smedia-icon-con"><a href="#pinterest" target="_blank"> <i class="fa fa-pinterest-p fa-2x footer-pinterest" aria-hidden="true"></i> </a></div>
							<div id="btm-youtube" class="smedia-icon-con"><a href="youtube" target="_blank"> <i class="fa fa-youtube-play fa-2x footer-youtube" aria-hidden="true"></i> </a></div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
