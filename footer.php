<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="wrap">
				<div class="container">
				    <div class="row">
				      <div class="col-md-12"><h1 id="ContactUs">CONTACT US</h1></div>
				    </div>
				  <div class="row">
				  	<div class="col-md-6">
				  		Email: <a href="mailto:<?php echo the_field('footer_email', 'option');?>"><?php echo the_field('footer_email', 'option');?></a><br>
				  		Phone: <?php echo the_field('footer_phone', 'option');?>
				  	</div>
				  	<div class="col-md-3">
				  		<!--privacy policy-->
				  	</div>
				  	<div class="col-md-3">
				  		<!--careers-->
				  	</div>
				  </div>
				    <div class="row" id="CopyrightRow">
				      <div class="col-md-12">Copyright 2017, Abaster Consulting</div>
				    </div>
				</div>
			</div><!-- .wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
