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
	$container = '';

	if ( ! $container ) {
		$container = 'container';
	}


?>
<section <?php ign_block_attrs( $block ); ?>>
	<div class="una-slider <?php echo esc_attr( $container ); ?>">


	</div>
</section>