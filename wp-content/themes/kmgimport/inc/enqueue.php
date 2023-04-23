<?php
/**
 * Enqueue scripts and styles.
 */

function kmgimport_scripts() {
	// Theme stylesheet.
	wp_enqueue_style( 'kmgimport-style', get_stylesheet_uri() );

	// bootstrap.min.css
	wp_enqueue_style( 'kmgimport-bootstrap-min-css', get_theme_file_uri( '/assets/css/bootstrap.min.css' ), array( ), '1.0' );
	// owl.carousel.min.css
	wp_enqueue_style( 'kmgimport-owl-carousel-min-css', get_theme_file_uri( '/assets/css/owl.carousel.min.css' ), array( ), '1.0' );
	// style.css
	wp_enqueue_style( 'kmgimport-style-css', get_theme_file_uri( '/assets/css/style.css' ), array( ), '1.0' );
	// responsive.css
	wp_enqueue_style( 'kmgimport-responsive-css', get_theme_file_uri( '/assets/css/responsive.css' ), array( ), '1.0' );


	// jquery-min.js
	wp_enqueue_script( 'kmgimport-jquery-js', get_theme_file_uri( '/assets/js/jquery-min.js' ), array( ), '1.0', true );
	// bootstrap.bundle.min.js
	wp_enqueue_script( 'kmgimport-bootstrap-bundle-js', get_theme_file_uri( '/assets/js/bootstrap.bundle.min.js' ), array( ), '1.0', true );
	// owl.carousel.min.js
	wp_enqueue_script( 'kmgimport-owl-carousel-min-js', get_theme_file_uri( '/assets/js/owl.carousel.min.js' ), array( ), '1.0', true );
	// custom.js
	wp_enqueue_script( 'kmgimport-custom-js', get_theme_file_uri( '/assets/js/custom.js' ), array( ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'kmgimport_scripts' );