<?php

/**
 * Enqueue scripts and styles.
 */

function alexa_scripts() {

  // -------------------- Styles --------------------

  // Add Fonts
  //  wp_enqueue_style( 'alexa-fonts', alexa_fonts_url() );

  // Bootstrap 4.0
  wp_enqueue_style( 'bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css' );

  // Font awesome
  wp_enqueue_style( 'font_awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );

  // Used for animations
  wp_enqueue_style( 'animate_css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css' );

  //owl corousel stylesheets
  wp_enqueue_style( 'blankspace-owlcarousel', get_template_directory_uri() . '/src/css/owlcarousel/owl.carousel.min.css' );

  wp_enqueue_style( 'blankspace-owlcarousel-theme', get_template_directory_uri() . '/src/css/owlcarousel/owl.theme.default.min.css' );

  // !!--- Must be the last stylesheet ---!!
  wp_enqueue_style( 'alexa-style', get_stylesheet_uri() );

  // load the custom colour scheme randonly
  wp_enqueue_style( 'blankspace-random-colour-scheme', get_template_directory_uri() . '/css-variations/' . get_random_color_scheme() );


  // -------------------- Scripts --------------------

  // Tether for bootstrap 4.0
  wp_enqueue_script( 'bootstrap_tether', 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js', array('jquery') );

  // jquery for bootstrap 4.0
  wp_enqueue_script( 'bootstrap_jquery', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js', array('jquery') );

  wp_enqueue_script( 'blankspace-navigation', get_template_directory_uri() . '/src/js/navigation.js', array(), '20151215', true );

  wp_enqueue_script( 'blankspace-skip-link-focus-fix', get_template_directory_uri() . '/src/js/skip-link-focus-fix.js', array(), '20151215', true );

  wp_enqueue_script( 'scroll_reveal', get_template_directory_uri() . '/src/js/lib/scrollreveal.min.js', array('jquery') );

  wp_enqueue_script( 'javaScriptStd', get_template_directory_uri() . '/src/js/helpers/javascriptAlt.js', array('jquery') );

  // owl carousel
  wp_enqueue_script( 'js-owl-carousel', get_template_directory_uri() . '/src/js/lib/owlcarousel/owl.carousel.min.js', array('jquery') );
  wp_enqueue_script( 'js-owl-carousel-settings', get_template_directory_uri() . '/src/js/lib/owlcarousel/owl.carousel.settings.js', array('jquery') );


  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'wp_enqueue_scripts', 'alexa_scripts');
