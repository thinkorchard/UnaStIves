<?php

	/**
	 * Plan Your Stay Template.
	 *
	 * @param array $block The block settings and attributes.
	 * @param string $content The block inner HTML (empty).
	 * @param bool $is_preview True during AJAX preview.
	 * @param   (int|string) $post_id The post ID this block is saved to.
	 */
	$block_id    = ign_get_block_anchor( $block );
	$col_no = get_field( 'number_of_columns_to_show' );
	$size = 'medium';
	$col_class = '';

	if ( $col_no === 'two' ) {
	    $col_class = 'span-6 small-span-12';
    } elseif ( $col_no === 'three' ) {
	    $col_class = 'span-4 small-span-12';
    }
?>

<div <?php ign_block_attrs( $block ); ?>>

	<?php if ( have_rows( 'column_content' ) ) : ?>
        <div class="flex-grid">
		<?php while ( have_rows( 'column_content' ) ) : the_row(); $column_link_url = get_sub_field( 'column_link_url' ); ?>
            <div class="<?php echo $col_class; ?>">
                <a href="<?php echo esc_url( $column_link_url); ?>">
                <?php
                    $column_image = get_sub_field( 'column_image' );
                    $size = 'medium';
                 ?>
                <?php if ( $column_image ) : ?>
                    <?php echo wp_get_attachment_image( $column_image, $size ); ?>
                <?php endif; ?>
                <h3><?php the_sub_field( 'column_title' ); ?></h3>
                <?php  ?>

                </a>

            </div>
            <!-- /.span- -->
		<?php endwhile; ?>

        </div>
        <!-- /.flex-grid -->
	<?php endif; ?>

</div>