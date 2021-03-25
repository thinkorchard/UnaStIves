<article id="post-<?php echo get_the_ID(); ?>" <?php post_class( 'offer-item' ); ?>>
	<div class="header-image cover-image">
		<?php
			if ( has_post_thumbnail() ) {
				the_post_thumbnail( 'medium' );
			}
			$offer_date = get_field( 'offer_start_date', $post->ID );
			echo '<span class="offer-date">' . $offer_date . '</span>';
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
        <div class="offer-meta flex">


            <?php
                $offer_start_time = get_field( 'offer_start_time', $post->ID );
	            $offer_end_time = get_field( 'offer_end_time', $post->ID );
            ?>
            <div class="span-12">
                <?php if ( $offer_start_time ) : ?>
                    <span><i class="fas fa-circle" aria-disabled="true" aria-hidden="true"></i></span>
                <span><?php echo $offer_start_time; ?></span>
                <?php endif; ?>
	            <?php if ( $offer_end_time ) : ?>
                    <span> - <?php echo $offer_end_time; ?></span>
	            <?php endif; ?>
            </div>
            <!-- /.span-6 -->

        </div>
        <!-- /.offer-meta -->
	</header>

	<div class="card-content">
		<?php the_excerpt(); ?>
        <div class="button-group">
            <a class="button una-button" href="<?php the_permalink(); ?>"><?php _e( 'Read more', 'una' ) ?></a>
            <?php $book_now_url = get_field( 'book_now_url', $post->ID ); ?>
            <a class="button una-button button--dark" href="<?php echo $book_now_url; ?>"><?php _e( 'Book Now', 'una' ) ?></a>
        </div>
        <!-- /.flex -->
	</div><!-- .card-content -->

</article><!-- #post-## -->