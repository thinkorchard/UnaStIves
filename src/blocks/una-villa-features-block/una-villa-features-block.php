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

		array( 'core/heading', array(
			'placeholder' => 'Add a long heading to introduce highlight content',
		) ),

		array( 'core/list', array(
			'placeholder' => 'Add a list of features',
		) ),

	);

?>

<div <?php ign_block_attrs( $block ); ?>>
	<div class="flex-grid">
		<div class="span-6 col-left">
			<div class="text-container">
				<?php echo '<InnerBlocks template="' . esc_attr( wp_json_encode( $template ) ) . '" templateLock="all" />'; ?>
			</div>
			<!-- /.text-container -->

		</div>
		<!-- /.col-left -->
		<div class="span-6 col-right">
			<?php if ( $col_2_img ) : ?>
				<?php echo wp_get_attachment_image( $col_2_img, $col_2_img_size ); ?>
			<?php endif; ?>
		</div>
		<!-- /.col-right -->
	</div>
	<!-- /.grid -->
</div>