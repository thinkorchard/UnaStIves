<?php

	/**
	 * Two Columns Grid With Background Images Template.
	 *
	 * @param array $block The block settings and attributes.
	 * @param string $content The block inner HTML (empty).
	 * @param bool $is_preview True during AJAX preview.
	 * @param   (int|string) $post_id The post ID this block is saved to.
	 */
	$block_id    = ign_get_block_anchor( $block );
	$col_1_image = get_field( 'column_1_background_image' );
	$col_1_bg_size = get_field( 'column_1_background_size' );
	$col_2_image = get_field( 'column_2_background_image' );
	$image_size = 'large';
	$title_1 = get_field( 'column_1_image_title' );
	$title_2 = get_field( 'column_2_image_title' );

	$col_1_bg_image = wp_get_attachment_image_url( $col_1_image, $image_size );
	$col_2_bg_image = wp_get_attachment_image_url( $col_2_image, $image_size );


?>

<style type="text/css">
	<?php if ( $col_1_image && $col_1_bg_size == 'cover' ) : echo '#' . $block_id . '.acf-two-columns-grid-background-images .col-1'; ?> {
        background-image: url(<?php echo $col_1_bg_image; ?>);
        background-size:  cover;
    }
	<?php endif; ?>
    <?php if ( $col_1_image && $col_1_bg_size == 'contain' ) : echo '#' . $block_id . '.acf-two-columns-grid-background-images .col-1'; ?> {
        background-image: url(<?php echo $col_1_bg_image; ?>);
        background-size:  contain;
    }
    <?php endif; ?>
	<?php if ( $col_2_image ) : echo '#' . $block_id . '.acf-two-columns-grid-background-images .col-2'; ?> {
        background-image: url(<?php echo $col_2_bg_image; ?>);
    }
	<?php endif; ?>
</style>

<div <?php ign_block_attrs( $block ); ?>>
	<div class="grid">
		<div class="span-6 col-1">
			<?php if ( $title_1 ) : ?>
				<h3 class="h2"><?php echo $title_1; ?></h3>
			<?php endif; ?>
		</div>
		<!-- /.col-left -->
		<div class="span-6 col-2">
			<?php if ( $title_2 ) : ?>
				<h3 class="h2"><?php echo $title_2; ?></h3>
			<?php endif; ?>
		</div>
		<!-- /.col-right -->
	</div>
	<!-- /.grid -->
</div>
