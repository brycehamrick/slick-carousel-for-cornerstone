<?php

/**
 * Element Definition: "Slick Carousel Element Item"
 */

class Slick_Carousel_Element_Item {

	public function ui() {
		return array(
      'title' => __( 'Slick Carousel Item', 'slick-carousel' )
    );
	}

	public function flags() {
		return array(
      'child' => true
    );
	}

	public function update_build_shortcode_atts( $atts, $parent ) {

		if ( ! is_null( $parent ) ) {
			$atts['linked'] = $parent['linked'];
		}

		return $atts;

	}


}
