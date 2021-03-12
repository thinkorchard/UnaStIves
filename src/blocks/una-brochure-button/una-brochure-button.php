<?php

	/**
	 * Una Brochure Button
	 *
	 * @param array $block The block settings and attributes.
	 * @param string $content The block inner HTML (empty).
	 * @param bool $is_preview True during AJAX preview.
	 * @param   (int|string) $post_id The post ID this block is saved to.
	 */
	$block;
	$block_id = ign_get_block_anchor( $block );
	$button_text = get_field( 'button_text' );
	$document_link = get_field( 'document_link' );
	$btn_align = get_field( 'button_alignment' );
	$btn_color = get_field( 'button_colour' );

?>

<style>
	<?php if ($btn_align == 'right') : ?>
    <?php echo '#' . $block_id . '.acf-una-brochure-button'; ?> {
        text-align: right;
    }
	<?php elseif ( $btn_align == 'center' ) : ?>
	<?php echo '#' . $block_id . '.acf-una-brochure-button'; ?> {
        text-align: center;
    }
	<?php endif; ?>
	<?php if ( $btn_color ) : ?>
    <?php echo '#' . $block_id; ?> .button-brochure:link,
    <?php echo '#' . $block_id; ?> .button-brochure:visited,                               {
        border-color: <?php echo $btn_color; ?>;
		color: <?php echo $btn_color; ?>;
    }
    <?php endif; ?>
</style>

<div <?php ign_block_attrs( $block ); ?>>
		<?php if ( $document_link ) : ?>

		<a class="button button-brochure" href="<?php echo esc_url( $document_link); ?>"><?php echo $button_text ? $button_text : 'Enter text'; ?></a>

		<?php endif; ?>
</div>
