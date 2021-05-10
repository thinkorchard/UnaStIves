<?php

	/**
	 * Two Columns With Kitchen Booking Template.
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

	$col_1_image_bg = wp_get_attachment_image_url( $col_1_image, $image_size );
	?>

<style type="text/css">
	<?php if ( $col_2_bg ) : echo '#' . $block_id . '.acf-kitchen-booking .col-2'; ?>  {
        background-color: <?php echo $col_2_bg; ?>;
    }
	<?php endif; ?>
	<?php if ( $col_1_image ) : echo '#' . $block_id . '.acf-kitchen-booking .col-1';  ?> {
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
			<h3 class="has-white-color">Book A Table Online</h3>

            <iframe src="https://booking.resdiary.com/widget/Standard/UnaKitchen/24732?" allowtransparency="true" frameborder="0" style="width:100%; border:none; max-width: 540px; height: 740px; "></iframe>
		</div>
		<!-- /.col-right -->
	</div>
	<!-- /.grid -->
</section>
