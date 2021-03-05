<?php

	/**
	 * Section Block Template.
	 *
	 * @param array $block The block settings and attributes.
	 * @param string $content The block inner HTML (empty).
	 * @param bool $is_preview True during AJAX preview.
	 * @param   (int|string) $post_id The post ID this block is saved to.
	 */
	$block_id    = ign_get_block_anchor( $block );
	$section_bg = get_field( 'background_colour' );

?>
<style type="text/css">
    <?php echo '#' . $block_id; ?> {
        /* Add styles that use ACF values here */
        <?php if ( $section_bg ) : ?>background-color: <?php echo $section_bg; endif; ?>;
        padding:  8rem 1.5rem;
    }
</style>

<section <?php ign_block_attrs( $block ); ?>>
	<InnerBlocks />
</section>