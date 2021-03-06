<article id="post-<?php echo get_the_ID(); ?>" <?php post_class( 'card-item span-4' ); ?>>
	<div class="header-image cover-image">
		<?php
		if ( has_post_thumbnail() ) {
			the_post_thumbnail( 'medium' );
		}
		?>
	</div>

	<header class="card-header">
		<div class="header-content">
			<h2 class="card-title">
				<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
					<?php echo the_title(); ?>
				</a>
			</h2>

		</div>
	</header>

	<div class="card-content">
		<?php the_excerpt(); ?>
	</div><!-- .card-content -->

</article><!-- #post-## -->