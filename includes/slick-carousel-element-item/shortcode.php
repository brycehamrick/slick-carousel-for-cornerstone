<?php

/**
 * Shortcode handler
 */

$class = 'slick-carousel-element-item ' . $class;
?>

<div <?php cs_atts( array( 'id' => $id, 'class' => $class, 'style' => $style ), true ); ?>>
<?php echo $content ?>
</div>
