<?php

	/**
	 * Una Menu Button
	 *
	 * @param array $block The block settings and attributes.
	 * @param string $content The block inner HTML (empty).
	 * @param bool $is_preview True during AJAX preview.
	 * @param   (int|string) $post_id The post ID this block is saved to.
	 */
	$block;
	$block_id = ign_get_block_anchor( $block );
	$document_link = get_field( 'document_link' );
	$button_text = get_field( 'button_text' );

?>

<div <?php ign_block_attrs( $block ); ?>>
	<?php if ( $document_link ) : ?>
		<a class="button button-menu" href="<?php echo esc_url( $document_link); ?>"><?php echo $button_text ? $button_text : 'Enter text'; ?><span class="arrow"></span>
		<!-- /.arrow --></a>

	<?php endif; ?>
</div>
