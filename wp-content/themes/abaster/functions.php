<?php
/**
 * blankspace functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package blankspace
 */

 require get_template_directory() . '/functions/setup.php';
 require get_template_directory() . '/functions/enqueues.php';
 require get_template_directory() . '/functions/typography.php';
 require get_template_directory() . '/functions/sidebars.php';
 require get_template_directory() . '/functions/widgets.php';

 /**
  * Implement the Custom Header feature.
  */
 require get_template_directory() . '/inc/custom-header.php';

 /**
  * Custom template tags for this theme.
  */
 require get_template_directory() . '/inc/template-tags.php';

 /**
  * Functions which enhance the theme by hooking into WordPress.
  */
 require get_template_directory() . '/inc/template-functions.php';

 /**
  * Customizer additions.
  */
 require get_template_directory() . '/inc/customizer.php';

 /**
  * Image upload.
  */
 require get_template_directory() . '/inc/image-upload.php';

 /**
  * Random colour scheme.
  */
 require get_template_directory() . '/inc/colour-scheme.php';

 /**
  * Load Jetpack compatibility file.
  */
 if ( defined( 'JETPACK__VERSION' ) ) {
 	require get_template_directory() . '/inc/jetpack.php';
 }

 /**
  * Load WooCommerce compatibility file.
  */
 if ( class_exists( 'WooCommerce' ) ) {
 	require get_template_directory() . '/functions/woocommerce.php';
 }
