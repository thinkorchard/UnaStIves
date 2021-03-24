<?php

	/**
	 * UNA Villa Slider Template.
	 *
	 * @param array $block The block settings and attributes.
	 * @param string $content The block inner HTML (empty).
	 * @param bool $is_preview True during AJAX preview.
	 * @param   (int|string) $post_id The post ID this block is saved to.
	 */
	$block_id    = ign_get_block_anchor( $block );



?>
<div <?php ign_block_attrs( $block ); ?>>
	<div class="swiper-container villa-slider">
		<div class="villa__wrp swiper-wrapper">
			<?php if ( have_rows( 'una_villa_slider' ) ) : ?>
				<?php while ( have_rows( 'una_villa_slider' ) ) : the_row(); ?>
					<?php
                    $villa_slide_image = get_sub_field( 'villa_slide_image' );
                    $size = 'villa-slide';
                    $medium = $villa_slide_image['sizes'][ $size ];

					?>

					<?php if ( $villa_slide_image ) : ?>

                                <div class="swiper-slide villa-slider__item">
                                    <div class="villa__item">
                                        <img src="<?php echo esc_url($medium); ?>" alt="" class="entity-img">
                                    </div>
                                    <!-- /.villa__item -->

                                </div>

		            <?php endif;
		        endwhile;
		    endif; ?>
		</div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
		<!-- /.una-villa-slider-wrapper -->
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
	</div>
</div>