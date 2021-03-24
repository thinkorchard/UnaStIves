<article id="post-<?php echo get_the_ID(); ?>" <?php post_class( 'event-item' ); ?>>
	<div class="header-image cover-image">
		<?php
			if ( has_post_thumbnail() ) {
				the_post_thumbnail( 'medium' );
			}
			$event_date = get_field( 'event_start_date', $post->ID );
			echo '<span class="event-date">' . $event_date . '</span>';
		?>
	</div>

	<header class="card-header">
		<div class="header-content">
			<h2 class="h3 card-title">
				<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
					<?php echo the_title(); ?>
				</a>
			</h2>
		</div>
        <div class="event-meta flex">


            <?php
                $event_start_time = get_field( 'event_start_time', $post->ID );
	            $event_end_time = get_field( 'event_end_time', $post->ID );
	            $event_location = get_field( 'event_location', $post->ID );
            ?>
            <div class="span-6">
                <?php if ( $event_start_time ) : ?>
                    <span><i class="fas fa-circle" aria-disabled="true" aria-hidden="true"></i></span>
                <span><?php echo $event_start_time; ?></span>
                <?php endif; ?>
	            <?php if ( $event_end_time ) : ?>
                    <span> - <?php echo $event_end_time; ?></span>
	            <?php endif; ?>
            </div>
            <!-- /.span-6 -->
            <div class="span-6">
	            <?php if ( $event_location ) : ?>
                    <span><i class="fas fa-map-marker" aria-disabled="true" aria-hidden="true"></i></span>
                    <span><?php echo $event_location; ?></span>
	            <?php endif; ?>
            </div>
            <!-- /.span-6 -->
        </div>
        <!-- /.event-meta -->
	</header>

	<div class="card-content">
		<?php the_excerpt(); ?>
        <a class="button una-button" href="<?php the_permalink(); ?>"><?php _e( 'Read more', 'una' ) ?></a>
	</div><!-- .card-content -->

</article><!-- #post-## -->