<?php

/*
Plugin Name: Slick Carousel for Cornerstone
Description: Adds a Carousel Element to Cornerstone based on slick.js
Author: Bryce Hamrick
Author URI: https://bhamrick.com
Version: 0.0.1
*/

define( 'SLICK_CAROUSEL_PATH', plugin_dir_path( __FILE__ ) );
define( 'SLICK_CAROUSEL_URL', plugin_dir_url( __FILE__ ) );
define( 'SLICK_CAROUSEL_VERSION', '0.0.1');

add_action( 'wp_enqueue_scripts', 'slick_carousel_enqueue' );
add_action( 'cornerstone_register_elements', 'slick_carousel_register_elements' );
add_filter( 'cornerstone_icon_map', 'slick_carousel_icon_map' );

function slick_carousel_register_elements() {

	cornerstone_register_element( 'Slick_Carousel_Element', 'slick-carousel-element', SLICK_CAROUSEL_PATH . 'includes/slick-carousel-element' );
	cornerstone_register_element( 'Slick_Carousel_Element_Item', 'slick-carousel-element-item', SLICK_CAROUSEL_PATH . 'includes/slick-carousel-element-item' );

}

function slick_carousel_enqueue() {
	wp_enqueue_style( 'slick-carousel-style', SLICK_CAROUSEL_URL . '/assets/styles/slick.css', array(), SLICK_CAROUSEL_VERSION );
  wp_enqueue_script( 'slick-carousel-script', SLICK_CAROUSEL_URL . '/assets/scripts/slick.min.js', array('jquery'), SLICK_CAROUSEL_VERSION, TRUE );
}

function slick_carousel_icon_map( $icon_map ) {
	$icon_map['slick-carousel'] = SLICK_CAROUSEL_URL . '/assets/svg/icons.svg';
	return $icon_map;
}
