<?php

/**
 * Shortcode handler
 */

$class = "slick-carousel-element " . $class;

?>

<div <?php cs_atts( array( 'id' => $id, 'class' => $class, 'style' => $style ), true ); ?>>
<?php echo do_shortcode( $content ); ?>
</div>
