<?php

	/**
	 * Title & Button Template.
	 *
	 * @param array $block The block settings and attributes.
	 * @param string $content The block inner HTML (empty).
	 * @param bool $is_preview True during AJAX preview.
	 * @param   (int|string) $post_id The post ID this block is saved to.
	 */
	$block_id    = ign_get_block_anchor( $block );

	if ( ! $container ) {
		$container = 'container';
	}

	$template = array(

		array( 'core/heading', array(
			'placeholder' => 'Add a long heading to introduce highlight content',
		) ),

		array( 'acf/una-button' ),

	);

?>
<div <?php ign_block_attrs( $block ); ?>>
	<div class="title-button">

		<?php echo '<InnerBlocks template="' . esc_attr( wp_json_encode( $template ) ) . '" templateLock="all" />'; ?>

	</div>
</div>