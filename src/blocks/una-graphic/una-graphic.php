<?php

	/**
	 * UNA Graphic Template.
	 *
	 * @param array $block The block settings and attributes.
	 * @param string $content The block inner HTML (empty).
	 * @param bool $is_preview True during AJAX preview.
	 * @param   (int|string) $post_id The post ID this block is saved to.
	 */
	$block_id    = ign_get_block_anchor( $block );
	$size = 'full';
?>

<div <?php ign_block_attrs( $block ); ?>>

	<?php if ( have_rows( 'columns' ) ) : ?>
		<div class="flex-grid">
			<?php while ( have_rows( 'columns' ) ) : the_row(); $graphic_link = get_sub_field( 'graphic_link' ); ?>
				<div class="span-4">
                    <a href="<?php echo esc_url( $graphic_link); ?>">
	                    <?php
		                    $graphic_image = get_sub_field( 'graphic_image' );
		                    $size = 'full';
		                    if ( $graphic_image ) :
			                    echo wp_get_attachment_image( $graphic_image, $size );
		                    endif; ?>
	                    <?php
		                    $title = get_sub_field( 'graphic_title' );
		                    if ( $title ) : ?>
                                <h3><?php echo $title; ?></h3>
		                    <?php endif; ?>
                    </a>

				</div>
				<!-- /.span- -->
			<?php endwhile; ?>

		</div>
		<!-- /.flex-grid -->
	<?php endif; ?>

</div>