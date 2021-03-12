<?php

	/**
	 * Image CTA Grid Block Template.
	 *
	 * @param array $block The block settings and attributes.
	 * @param string $content The block inner HTML (empty).
	 * @param bool $is_preview True during AJAX preview.
	 * @param   (int|string) $post_id The post ID this block is saved to.
	 */
	$block_id    = ign_get_block_anchor( $block );
	$image_one = get_field( 'image_one' );
	$img_1_title = get_field( 'image_one_title' );
	$image_two = get_field( 'image_two' );
	$img_2_title = get_field( 'image_two_title' );
	$col_bg_colour = get_field( 'column_background_colour' );
	$content_align = get_field( 'content_alignment' );
	$size = 'large';
	$template = array(

		array( 'core/heading', array(
		        'level' => 3,
			'placeholder' => 'Add a heading 3',
		) ),

		array( 'core/paragraph', array(
			'placeholder' => 'Add a short paragraph',
		) ),

		array( 'core/paragraph', array(
			'placeholder' => 'Add a short paragraph',
		) ),

        array( 'acf/una-button' ),

	);
?>

<style type="text/css">
    <?php if ( $col_bg_colour ) : echo '.background' ?>  {
    /* Add styles that use ACF values here */
        background-color: <?php echo $col_bg_colour; ?>;
    }
    <?php endif; ?>
    <?php if ( $content_align == 'left' ) : echo '.grid-images' ?> {
        order: 2;
    }
    <?php endif; ?>
</style>

<div <?php ign_block_attrs( $block ); ?>>
	<div class="grid">
		<div class="span-6 grid grid-images">
			<div class="span-12 one" style="background-image: url(<?php echo wp_get_attachment_image_url( $image_one, $size ); ?>); background-size: cover;">
                <?php if ( $img_1_title ) : ?>
                <h3 class="h2">
                    <?php echo $img_1_title; ?>
                </h3>
                <!-- /.h2 -->
                <?php endif; ?>
			</div>
			<div class="span-12 one" style="background-image: url(<?php echo wp_get_attachment_image_url( $image_two, $size ); ?>); background-size: cover;">
				<?php if ( $img_2_title ) : ?>
                    <h3 class="h2">
						<?php echo $img_2_title; ?>
                    </h3>
                    <!-- /.h2 -->
				<?php endif; ?>
			</div>

		</div>
		<!-- /.span-6 -->
		<div class="span-6 background">
            <div class="text-container">
	            <?php echo '<InnerBlocks template="' . esc_attr( wp_json_encode( $template ) ) . '" templateLock="all" />'; ?>
            </div>
            <!-- /.text-container -->
		</div>
		<!-- /.span-6 -->
	</div>
	<!-- /.grid -->
</div>