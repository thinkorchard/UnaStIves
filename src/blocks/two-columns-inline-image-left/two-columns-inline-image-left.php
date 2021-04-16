<?php

	/**
	 * Two Columns With Inline Image Left Template.
	 *
	 * @param array $block The block settings and attributes.
	 * @param string $content The block inner HTML (empty).
	 * @param bool $is_preview True during AJAX preview.
	 * @param   (int|string) $post_id The post ID this block is saved to.
	 */
	$block_id    = ign_get_block_anchor( $block );

	$col_2_bg = get_field( 'column_2_background_colour' );
	$col_1_image = get_field( 'column_1_image' );
	$image_size = 'full';
	$img_pos = get_field( 'image_position' );

	$col_1_inline_image = wp_get_attachment_image( $col_1_image, $image_size );

?>

<style type="text/css">
	<?php if ( $col_2_bg ) : ?>
    .acf-two-columns-inline-image-left .col-2 {
        background-color: <?php echo $col_2_bg; ?>;
    }
	<?php endif; ?>
</style>

<section <?php ign_block_attrs( $block ); ?>>
	<div class="grid">
		<div class="span-6 small-span-12 col-1 <?php if ( $img_pos ) { echo $img_pos; } ?>">
            <?php echo $col_1_inline_image; ?>

		</div>
		<!-- /.col-left -->
		<div class="span-6 small-span-12 col-2">

				<InnerBlocks />

		</div>
		<!-- /.col-right -->
	</div>
	<!-- /.grid -->
</section>
