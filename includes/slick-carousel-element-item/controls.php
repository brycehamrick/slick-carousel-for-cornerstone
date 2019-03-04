<?php

/**
 * Element Controls
 */

return array(

	'heading' => array(
		'type'    => 'title',
		'context' => 'content',
    'suggest' => __( 'Sortable Item', 'slick-carousel' ),
	),

	'content' => array(
    'type' => 'text',
    'ui'   => array(
      'title'   => __( 'Text', 'my-extension' ),
      'tooltip' => __( 'Optional tooltip. Shown when hovering over the control label', 'my-extension' )
    ),
  ),

  'context' => 'content'

);
