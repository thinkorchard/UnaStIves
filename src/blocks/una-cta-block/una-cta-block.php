<?php

	/**
	 * Call To Action Template.
	 *
	 * @param array $block The block settings and attributes.
	 * @param string $content The block inner HTML (empty).
	 * @param bool $is_preview True during AJAX preview.
	 * @param   (int|string) $post_id The post ID this block is saved to.
	 */
	$block_id    = ign_get_block_anchor( $block );
	$image_position = get_field( 'image_position' );
	$image = get_field( 'image' );
	$left_img_size = 'medium';
	$right_img_size = 'large';


	$template = array(

		array( 'core/heading', array(
			'level' => 3,
			'placeholder' => 'Add a heading',
		) ),

		array( 'core/paragraph', array(
			'placeholder' => 'Add a short paragraph',
		) ),

		array( 'acf/una-button' ),

	);

?>

<style type="text/css">
    <?php if ( $image_position == 'left' ) : echo '.flex-grid.left' ?>  {
    /* Add styles that use ACF values here */
        flex-direction: row-reverse;
    }
    <?php endif; ?>

</style>

<div <?php ign_block_attrs( $block ); ?>>
    <div class="flex-grid <?php echo $image_position; ?>">
        <div class="span-6 cta">
	        <?php echo '<InnerBlocks template="' . esc_attr( wp_json_encode( $template ) ) . '" templateLock="all" />'; ?>

        </div>
        <!-- /.col-left -->
        <div class="span-6">
			<?php if ( $image_position == 'left' ) :

				 echo wp_get_attachment_image( $image, $left_img_size );

			elseif ( $image_position == 'right' ) :

                echo wp_get_attachment_image( $image, $right_img_size );
			 endif; ?>
        </div>
        <!-- /.col-right -->
    </div>
    <!-- /.grid -->
</div>