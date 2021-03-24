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
	$section_bg_img = get_field( 'background_image' );
	$container      = get_field( 'container_class' );

	if ( ! $container ) {
		$container = 'container';
	}

?>
<style type="text/css">
    <?php echo '#' . $block_id; ?> {
        /* Add styles that use ACF values here */
        <?php if ( $section_bg ) : ?>background-color: <?php echo $section_bg; endif; ?>;
        padding-top:  8rem;
        padding-bottom:  8rem;

    }
    <?php if ( $section_bg ) :
    echo '#' . $block_id . ' .button-una'; ?> {
        color: var(--white);
    }

    <?php echo '#' . $block_id . ' .button-una'; ?>:hover,
    <?php echo '#' . $block_id . ' .button-una:active'; ?>,
    <?php echo '#' . $block_id . ' .button-una:focus'; ?> {
         color: var(--black) !important;
    }

    <?php echo '#' . $block_id . ' .button-una'; ?>  {
        border-color: var(--white);
    }
    <?php endif; ?>
    <?php if ( $section_bg_img ) : echo '#' . $block_id; ?> {
        background-image: url(<?php echo $section_bg_img; ?>);
        background-repeat:  no-repeat;
        background-size:  cover;
        background-position: center;
    }
    <?php endif; ?>

    <?php if ( $section_bg == '#60a5ff' ) : echo '#' . $block_id . ' a:not(.button)'; ?> {
        color: var(--white);
    }
    <?php endif; ?>
</style>

<section <?php ign_block_attrs( $block ); ?>>
    <div class="<?php echo esc_attr( $container ); ?>">
        <InnerBlocks />
    </div>
</section>