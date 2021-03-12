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
	$img_size = 'full';
	$img_shape = get_field( 'image_shape' );
	$id = $block['id'];


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
    <?php if ( $img_shape == 'circle' ) : echo '#' . $id . ' .left img' ?> {
        clip-path: circle();
    }
    <?php endif; ?>
</style>

<div <?php ign_block_attrs( $block ); ?>>
    <div class="flex-grid <?php echo $image_position; ?>">
        <div class="span-6 cta">
            <div class="text-container">
	            <?php echo '<InnerBlocks template="' . esc_attr( wp_json_encode( $template ) ) . '" templateLock="all" />'; ?>
            </div>
            <!-- /.text-container -->
        </div>
        <!-- /.col-left -->
        <div class="span-6 image">
			<?php if ( $image_position == 'left' ) :

				 echo wp_get_attachment_image( $image, $img_size );

			elseif ( $image_position == 'right' ) :

                echo wp_get_attachment_image( $image, $img_size );
			 endif; ?>
        </div>
        <!-- /.col-right -->
    </div>
    <!-- /.grid -->
</div>