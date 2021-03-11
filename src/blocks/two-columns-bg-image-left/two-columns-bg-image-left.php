<?php

	/**
	 * Two Columns With Background Image Left Template.
	 *
	 * @param array $block The block settings and attributes.
	 * @param string $content The block inner HTML (empty).
	 * @param bool $is_preview True during AJAX preview.
	 * @param   (int|string) $post_id The post ID this block is saved to.
	 */
	$block_id    = ign_get_block_anchor( $block );

	$col_2_bg = get_field( 'column_2_background_colour' );
	$col_1_image = get_field( 'column_1_background_image' );
	$image_size = 'large';
	$add_title = get_field( 'add_title_to_image' );
	$title_2 = get_field( 'column_2_image_title' );

	$col_1_image_bg = wp_get_attachment_image_url( $col_1_image, $image_size );

	$template = array(

		array( 'core/heading', array(
		    'level' => 3,
			'placeholder' => 'Add a heading level 3',
		) ),

		array( 'core/paragraph', array(
			'placeholder' => 'Add a short paragraph',
		) ),

		array( 'core/heading', array(
			'level' => 3,
			'placeholder' => 'Add a heading level 3',
		) ),

		array( 'core/paragraph', array(
			'placeholder' => 'Add a short paragraph',
		) ),

	);
?>

<style type="text/css">
	<?php if ( $col_2_bg ) : ?>
    .acf-two-columns-background-image-left .col-2 {
        background-color: <?php echo $col_2_bg; ?>;
    }
	<?php endif; ?>
    <?php if ( $col_1_image ) :  ?>
    .acf-two-columns-background-image-left .col-1 {
        background-image: url(<?php echo $col_1_image_bg; ?>);
    }
    <?php endif; ?>
</style>

<section <?php ign_block_attrs( $block ); ?>>
	<div class="grid">
		<div class="span-6 col-1">


		</div>
		<!-- /.col-left -->
		<div class="span-6 col-2">
            <div class="text-container">
				<?php echo '<InnerBlocks template="' . esc_attr( wp_json_encode( $template ) ) . '" templateLock="all" />'; ?>
            </div>
            <!-- /.text-container -->
		</div>
		<!-- /.col-right -->
	</div>
	<!-- /.grid -->
</section>
