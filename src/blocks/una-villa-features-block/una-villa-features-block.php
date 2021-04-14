<?php

	/**
	 * Una Villa Features Template.
	 *
	 * @param array $block The block settings and attributes.
	 * @param string $content The block inner HTML (empty).
	 * @param bool $is_preview True during AJAX preview.
	 * @param   (int|string) $post_id The post ID this block is saved to.
	 */
	$block_id    = ign_get_block_anchor( $block );
	$col_2_img = get_field( 'right_column_image' );
	$col_2_img_size = 'medium';

	$template = array(

		array( 'core/columns', array(), array(
			array( 'core/column', array(), array(
				array( 'core/heading', array() ),
				array( 'core/list', array() ),
			) ),
			array( 'core/column', array(), array(
				array( 'core/image', array() ),

				array( 'core/spacer', array() ),

                array( 'acf/una-button', array() ),

                array( 'core/spacer', array() ),

                array( 'acf/una-button', array() ),
			) ),
		) )

	);

?>

<div <?php ign_block_attrs( $block ); ?>>

	<?php echo '<InnerBlocks template="' . esc_attr( wp_json_encode( $template ) ) . '" templateLock="all" />'; ?>

</div>