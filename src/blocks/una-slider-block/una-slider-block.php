<?php

	/**
	 * UNA Slider Template.
	 *
	 * @param array $block The block settings and attributes.
	 * @param string $content The block inner HTML (empty).
	 * @param bool $is_preview True during AJAX preview.
	 * @param   (int|string) $post_id The post ID this block is saved to.
	 */
	$block_id    = ign_get_block_anchor( $block );




?>
<div <?php ign_block_attrs( $block ); ?>>

    <div class="swiper-container single-slider">
        <div class="single__wrp swiper-wrapper">
			<?php if ( have_rows( 'una_slider' ) ) : ?>
				<?php while ( have_rows( 'una_slider' ) ) : the_row(); ?>
					<?php
					$slide_image = get_sub_field( 'slide_image' );
					$size = 'large';
					$medium = $slide_image['sizes'][ $size ];
					$slide_title = get_sub_field( 'slide_title' );
					?>

					<?php if ( $slide_image ) : ?>

                        <div class="swiper-slide slider__item">
	                        <?php if ( $slide_title ) : ?>
                                <h3 class="h2 slider__title">
                                    <?php echo $slide_title; ?>
                                </h3>
	                        <?php endif; ?>
                            <div class="single__item">
                                <img src="<?php echo esc_url($medium); ?>" alt="" class="entity-img">
                            </div>
                            <!-- /.slider__item -->

                        </div>

					<?php endif;
				endwhile;
			endif; ?>
        </div>
        <!-- /.una-villa-slider-wrapper -->
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>