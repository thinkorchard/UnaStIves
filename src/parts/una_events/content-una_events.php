<?php

	/**
	 * @package Una St Ives
	 * @since   4.0
	 *
	 * Shows a single una_event post or page
	 * ign_header_block only outputs a header block if the_content does not have a header block.
	 * a block is considered a header block if its name starts with header-
	 */

	$event_start_date = get_field( 'event_start_date' );
	$event_start_time = get_field( 'event_start_time' );
	$event_end_date = get_field( 'event_end_date' );
	$event_end_time = get_field( 'event_end_time' );
	$event_location = get_field( 'event_location' );
	$event_speakers = get_field( 'event_speakers' );

?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry-content container grow-font entry-content-events">
            <div class="event-meta flex-grid">
                <?php if ( $event_start_date ) : ?>
                    <div class="span-4">
                    <p class="h4">
	                    <?php _e( 'Time', 'una' ) ?>
                    </p>
                    <p><span><?php echo $event_start_date; ?></span>, <span><?php if ( $event_start_time ) { echo $event_start_time; } ?></span><?php if ( $event_end_time ) : ?><span> - <?php echo $event_end_time; ?></span><?php endif; ?></p>
                    </div>
                    <!-- /.span-4 -->
                <?php endif; ?>
	            <?php if ( $event_location ) : ?>
                    <div class="span-4">
                        <p class="h4">
                            <?php _e( 'Location', 'una' ) ?>
                        </p>
                        <p><?php echo $event_location; ?></p>
                    </div>
                    <!-- /.span-4 -->
	            <?php endif; ?>
	            <?php if ( $event_speakers ) : ?>
                    <div class="span-4">
                        <p class="h4">
				            <?php _e( 'Speakers', 'una' ) ?>
                        </p>
                        <p><?php echo $event_speakers; ?></p>
                    </div>
                    <!-- /.span-4 -->
	            <?php endif; ?>
            </div>
            <!-- /.event-meta -->
			<?php the_content(); ?>
		</div>
	</article>


<?php if ( ! is_page() ): ?>
	<section class="after-article container-content">
		<?php
			the_post_navigation( array(
				'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'una' ) . '</span><div class="nav-title"><span class="nav-title-icon-wrapper"><span class="iconify" data-icon="carbon:chevron-left"></span></span> <span>%title</span></div>',
				'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'una' ) . '</span><div class="nav-title"><span>%title</span> <span class="nav-title-icon-wrapper"><span class="iconify" data-icon="carbon:chevron-right"></span></span></div>',
			) );
		?>

	</section>
<?php
endif;
