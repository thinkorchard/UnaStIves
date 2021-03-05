<?php

	/**
	 * Una Button
	 *
	 * @param array $block The block settings and attributes.
	 * @param string $content The block inner HTML (empty).
	 * @param bool $is_preview True during AJAX preview.
	 * @param   (int|string) $post_id The post ID this block is saved to.
	 */
	$block;
	$block_id = ign_get_block_anchor( $block );
	$button_text = get_field( 'button_text' );
	$page_link = get_field( 'page_link' );
	$post_link = get_field( 'post_link' );
	$document_link = get_field( 'document_link' );
	$archive_link = get_field( 'archive_link' );
	$other_link = get_field( 'other_link' );

?>

<div <?php ign_block_attrs( $block ); ?>>
	<?php if ( $page_link ) : ?>
		<a class="button button-una" href="<?php echo esc_url( $page_link ); ?>"><?php echo $button_text ? $button_text : 'Enter text'; ?></a>

	<?php elseif ( $post_link ) : ?>
		<a class="button button-una" href="<?php echo esc_url( $post_link); ?>"><?php echo $button_text ? $button_text : 'Enter text'; ?></a>

	<?php elseif ( $document_link ) : ?>
		<a class="button button-una" href="<?php echo esc_url( $document_link); ?>"><?php echo $button_text ? $button_text : 'Enter text'; ?></a>

	<?php elseif ( $archive_link ) : ?>
		<a class="button button-una" href="<?php echo esc_url( $archive_link); ?>"><?php echo $button_text ? $button_text : 'Enter text'; ?></a>

	<?php elseif ( $other_link ) : ?>
		<a class="button button-una" href="<?php echo esc_url( $other_link); ?>"><?php echo $button_text ? $button_text : 'Enter text'; ?></a>
	<?php else : ?>
		<a class="button button-una" href="#">Enter text</a>
	<?php endif; ?>
</div>
