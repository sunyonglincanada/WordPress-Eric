<?php
/**
 * Eric Theme functions and definitions
 *
 * @package WordPress
 * @subpackage Eric_Theme
 * @version 1.0
 */

/**
 * Enqueues Eric theme scripts and styles.
 */
function erictheme_scripts() {

    // Eric theme stylesheet.
    wp_enqueue_style( 'erictheme-style', get_stylesheet_uri() );
    // bootstrap 4 css
    wp_enqueue_style( 'bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), '4.0' );

    // bootstrap 4 js
    wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array( 'jquery' ), '4.0', true );
    // popper js
    wp_enqueue_script( 'popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array( 'jquery' ), '1.12.9', true );
}

add_action( 'wp_enqueue_scripts', 'erictheme_scripts' );
