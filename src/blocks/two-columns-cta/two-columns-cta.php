<?php

	/**
	 * Two Columns With CTAs Template.
	 *
	 * @param array $block The block settings and attributes.
	 * @param string $content The block inner HTML (empty).
	 * @param bool $is_preview True during AJAX preview.
	 * @param   (int|string) $post_id The post ID this block is saved to.
	 */
	$block_id    = ign_get_block_anchor( $block );
	$col_1_image = get_field( 'column_1_background_image' );
	$col_2_bg = get_field( 'column_2_background_colour' );
	$image_size = 'large';
	$title_1 = get_field( 'column_1_image_title' );
	$title_2 = get_field( 'column_2_image_title' );
	$cta_1_url = get_field( 'column_1_url' );
	$cta_2_url = get_field( 'column_2_url' );

	$col_1_bg_image = wp_get_attachment_image_url( $col_1_image, $image_size );

    $col_order = get_field( 'column_order' );


?>

<style type="text/css">
	<?php if ( $col_1_image  ) : echo '#' . $block_id . ' .col-1'; ?>  {
        background-image: url(<?php echo $col_1_bg_image; ?>);
    }
	<?php endif; ?>
	<?php if ( $col_2_bg  ) : echo '#' . $block_id . ' .col-2'; ?> {
        background-color: <?php echo $col_2_bg; ?>;
    }
	<?php endif; ?>
    <?php if ( $col_order == 'column2'  ) : echo '#' . $block_id . ' .col-1'; ?>  {
        order: 2;
    }
    <?php endif; ?>
</style>

<div <?php ign_block_attrs( $block ); ?>>
	<div class="grid">
		<div class="span-6 col-1">
            <?php
	            $post1 = $cta_1_url;
	            setup_postdata( $post1 )
            ?>
			<a href="<?php the_permalink(); ?>">
			<?php if ( $title_1 ) : ?>
				<h3 class="h2"><?php echo $title_1; ?></h3>
			<?php endif; ?>
			</a>
            <?php wp_reset_postdata(); ?>
		</div>
		<!-- /.col-left -->
		<div class="span-6 col-2">
			<?php
				$post2 = $cta_2_url;
				setup_postdata( $post2 )
			?>
			<a href="<?php the_permalink(); ?>">
				<?php if ( $title_2 ) : ?>
					<h3 class="h2"><?php echo $title_2; ?></h3>
				<?php endif; ?>
			</a>
			<?php wp_reset_postdata(); ?>
		</div>
		<!-- /.col-right -->
	</div>
	<!-- /.grid -->
</div>
