<?php

	/**
	 * Campaign Monitor Template.
	 *
	 * @param array $block The block settings and attributes.
	 * @param string $content The block inner HTML (empty).
	 * @param bool $is_preview True during AJAX preview.
	 * @param   (int|string) $post_id The post ID this block is saved to.
	 */
	$block_id    = ign_get_block_anchor( $block );
	$container      = get_field( 'container_class' );

	if ( ! $container ) {
		$container = 'container';
	}

?>


<div <?php ign_block_attrs( $block ); ?>>
    <div class="<?php echo esc_attr( $container ); ?>">
        <form class="js-cm-form flex-grid" id="subForm" action="https://www.createsend.com/t/subscribeerror?description=" method="post" data-id="5B5E7037DA78A748374AD499497E309E447578C558F27663B5B68FC638AAB262F1B8DF046DAC1A8687637D877A0985A5CE68F8B6AED1B680AD3FC22EF0BF49FB">
            <div class="span-4 small-span-12">
                <label class="screen-reader-text">Name </label><input class="cm-input" aria-label="Name" placeholder="Your Name" id="fieldName" maxlength="200" name="cm-name">
            </div>
            <!-- /.span-4 -->
            <div class="span-4 small-span-12">
                <label class="screen-reader-text">Email </label><input class="cm-input" autocomplete="Email" aria-label="Email" placeholder="Email" class="js-cm-email-input qa-input-email" id="fieldEmail" maxlength="200" name="cm-onirb-onirb" required="" type="email">
            </div>
            <!-- /.span-4 -->
            <div class="span-2 small-span-12">
                <button class="button button-una" type="submit">Subscribe</button>
            </div>
            <!-- /.span-4 -->
        </form>
    </div>
</div>

