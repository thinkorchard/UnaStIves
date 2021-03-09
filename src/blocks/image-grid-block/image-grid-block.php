<?php

	/**
	 * Image Grid Block Template.
	 *
	 * @param array $block The block settings and attributes.
	 * @param string $content The block inner HTML (empty).
	 * @param bool $is_preview True during AJAX preview.
	 * @param   (int|string) $post_id The post ID this block is saved to.
	 */
	$block_id    = ign_get_block_anchor( $block );
	$image_one = get_field( 'image_one' );
	$image_two = get_field( 'image_two' );
	$image_three = get_field( 'image_three' );
	$size = 'medium';
	$img_1_title = get_field( 'image_one_title' );
	$img_2_title = get_field( 'image_two_title' );
	$img_3_title = get_field( 'image_three_title' );
	$image_one_link = get_field( 'image_one_link' );
	$image_two_link = get_field( 'image_two_link' );
	$image_three_link = get_field( 'image_three_link' );

?>


<div <?php ign_block_attrs( $block ); ?>>
	<div class="grid">
        <div class="span-6 grid">
            <div class="span-12">
		        <?php if ( $image_one_link ) : ?>
			        <?php $post1 = $image_one_link; ?>
			        <?php setup_postdata( $post1 ); ?>
                    <a href="<?php the_permalink(); ?>">

				        <?php if ( $image_one ) : ?>
					        <?php echo wp_get_attachment_image( $image_one, $size ); ?>
				        <?php endif; ?>
                        <h3><?php echo $img_1_title; ?></h3>
                    </a>
			        <?php wp_reset_postdata(); ?>
		        <?php endif; ?>
            </div>
            <div class="span-12">
	            <?php if ( $image_two_link ) : ?>
		            <?php $post2 = $image_two_link; ?>
		            <?php setup_postdata( $post2 ); ?>
                    <a href="<?php the_permalink(); ?>">

			            <?php if ( $image_two ) : ?>
				            <?php echo wp_get_attachment_image( $image_two, $size ); ?>
			            <?php endif; ?>
                        <h3><?php echo $img_2_title; ?></h3>
                    </a>
		            <?php wp_reset_postdata(); ?>
	            <?php endif; ?>
            </div>
            <!-- /.span-12 -->

        </div>
        <!-- /.span-6 -->
        <div class="span-6 three" style="background-image: url(<?php echo wp_get_attachment_image_url( $image_three, $size ); ?>); background-size: cover;">
	        <?php if ( $image_three_link ) : ?>
		        <?php $post3 = $image_three_link; ?>
		        <?php setup_postdata( $post3 ); ?>
                <a href="<?php the_permalink(); ?>">


                    <h3><?php echo $img_3_title; ?></h3>
                </a>
		        <?php wp_reset_postdata(); ?>
	        <?php endif; ?>
        </div>
        <!-- /.span-6 -->
    </div>
	<!-- /.grid -->
</div>