<?php
	/**
	 * Show the loop for this page and output the events slider
	 *
	 * @param array $block The block settings and attributes.
	 * @param string $content The block inner HTML (empty).
	 * @param bool $is_preview True during AJAX preview.
	 * @param   (int|string) $post_id The post ID this block is saved to.
	 */

	/**
	 * Reset post data just in case it was touched, or is pointing to something else and then put it back.
	 * This can be used to get cards for an archive page.
	 */

	$block_id          = ign_get_block_anchor( $block );
	$ob_post_types     = get_field( 'post_types' );
	$skip_this_id   = get_field( 'skip_this_id' );
?>

<section <?php ign_block_attrs( $block ); ?>>

	<div class="events-slider swiper-container">
		<div class="events-slider__wrp swiper-wrapper">
			<?php
				$slides = new WP_Query( array(
					'post_status'    => 'publish',
					'post_type'      => $ob_post_types,
					'posts_per_page' => -1,
				) );

				if ( $slides->have_posts() ):
					while ( ( $slides->have_posts() ) ): $slides->the_post();
						if ( get_the_ID() == $post_id && $skip_this_id ) {
							continue;
						} ?>
						<div class="events-slider__item swiper-slide">
							<a href="<?php echo esc_attr( get_the_permalink( $post ) ); ?>" class="events__item">
								<?php
									if ( has_post_thumbnail() ) {
										the_post_thumbnail( 'medium' );
									} ?>

								<h3 class="event__title">
									<?php echo get_the_title( $post ); ?>
								</h3>

                                <?php
	                                $event_date = get_field( 'event_start_date', get_the_ID() );
	                                echo '<span class="event-date">' . $event_date . '</span>';
                                ?>

							</a>
						</div>

					<?php endwhile; ?>


				<?php endif;
				wp_reset_postdata();
			?>


		</div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- /.una-villa-slider-wrapper -->
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>


