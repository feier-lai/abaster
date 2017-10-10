<?php
/**
 *
 * @package blankspace
 */

 // colour scheme folder
 define( "COLOR_SCHEME_FOLDER", get_theme_root(). "/blankspace/css-variations" );

 function get_random_color_scheme() {

  if( is_dir( COLOR_SCHEME_FOLDER ) ) {

     if( $dh = opendir( COLOR_SCHEME_FOLDER ) ) {

      $colour_scheme = array();

       while ( ( $file = readdir( $dh ) ) !== false ) {

         if( strpos( $file, '.css' ) ) {
           array_push( $colour_scheme, $file );
         }
       }

       if( count( $colour_scheme ) ) {
          return $colour_scheme[ rand( 0, count( $colour_scheme ) - 1 ) ];
       }
     }
  }
}
