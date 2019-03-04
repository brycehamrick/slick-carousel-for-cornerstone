<?php

/**
 * Element Controls
 */

return array(

	'elements' => array(
		'type'    => 'sortable',
		'options' => array(
			'element' => 'slick-carousel-element-item',
			'newTitle' => __( 'Item %s', 'slick-carousel' ),
			'floor'   => 1,
      'capacity' => 4,
      'title_field' => 'heading'
    ),
    'context' => 'content',
		'suggest' => array(
	    array( 'heading' => __( 'First Item', 'slick-carousel' ) ),
      array( 'heading' => __( 'Second Item', 'slick-carousel' ) ),
	  )
	),

	'linked' => array(
		'type'    => 'toggle',
		'ui' => array(
			'title'   => __( 'Linked', 'slick-carousel' ),
			'tooltip' => __( 'Link these items together.', 'slick-carousel' ),
		),
	)

);
