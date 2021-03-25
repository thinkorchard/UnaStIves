<?php

	/**
	 * @package Una St Ives
	 * @since   4.0
	 *
	 * Shows a single offer post or page
	 * ign_header_block only outputs a header block if the_content does not have a header block.
	 * a block is considered a header block if its name starts with header-
	 */

	$offer_start_date = get_field( 'offer_start_date' );
	$offer_start_time = get_field( 'offer_start_time' );
	$offer_end_date = get_field( 'offer_end_date' );
	$offer_end_time = get_field( 'offer_end_time' );
	$book_now_url = get_field( 'book_now_url' );

?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry-content container grow-font entry-content-events">
            <div class="event-meta flex-grid">
                <?php if ( $offer_start_date ) : ?>
                    <div class="span-12">
                    <p><span><?php echo $offer_start_date; ?></span> <span><?php if ( $offer_start_time ) { echo $offer_start_time; } ?></span><?php if ( $offer_end_time ) : ?><span> - <?php echo $offer_end_time; ?></span><?php endif; ?><?php if ( $offer_end_date ) : ?><span> - <?php echo $offer_end_date; ?></span><?php endif; ?></p>
                    </div>
                    <!-- /.span-4 -->
                <?php endif; ?>
            </div>
            <!-- /.event-meta -->
			<?php the_content(); ?>
            <div class="book-now">
                <a class="button una-button button--dark" href="<?php echo $book_now_url; ?>"><?php _e( 'Book Now', 'una' ) ?></a>
            </div>
            <!-- /.book-now -->
		</div>
	</article>


<?php if ( ! is_page() ): ?>
	<section class="after-article container-content">
		<?php
			the_post_navigation( array(
				'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Offer', 'una' ) . '</span><div class="nav-title"><span class="nav-title-icon-wrapper"><span class="iconify" data-icon="carbon:chevron-left"></span></span> <span>%title</span></div>',
				'next_text' => '<span class="screen-reader-text">' . __( 'Next Offer', 'una' ) . '</span><div class="nav-title"><span>%title</span> <span class="nav-title-icon-wrapper"><span class="iconify" data-icon="carbon:chevron-right"></span></span></div>',
			) );
		?>

	</section>
<?php
endif;
