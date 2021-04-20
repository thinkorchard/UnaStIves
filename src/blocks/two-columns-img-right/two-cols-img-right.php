<?php

	/**
	 * Two Columns Image Right Template.
	 *
	 * @param array $block The block settings and attributes.
	 * @param string $content The block inner HTML (empty).
	 * @param bool $is_preview True during AJAX preview.
	 * @param   (int|string) $post_id The post ID this block is saved to.
	 */
	$block_id    = ign_get_block_anchor( $block );
	$col_1_bg = get_field( 'column_1_background_colour' );
	$col_2_bg = get_field( 'column_2_background_colour' );
	$col_1_title = get_field( 'left_column_title' );
	$col_1_content = get_field( 'left_column_content' );
	$col_2_img = get_field( 'right_column_image' );
	$col_2_img_size = 'medium';

?>

<style type="text/css">
    <?php if ( $col_1_bg ) : echo '.col-left' ?>  {
    /* Add styles that use ACF values here */
        background-color: <?php echo $col_1_bg; ?>;
    }
    <?php endif; ?>
    <?php if ( $col_2_bg ) : echo '.col-right' ?> {
    background-color: <?php echo $col_2_bg; ?>;
    }
    <?php endif; ?>
</style>

<div <?php ign_block_attrs( $block ); ?>>
    <div class="grid">
        <div class="span-6 col-left">
            <div class="text-container">
                <h2><?php echo $col_1_title; ?></h2>
	            <?php echo $col_1_content ?>
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