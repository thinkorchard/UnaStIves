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
	$lg_img_pos = get_field( 'large_image_position' );

	$img_1_link_type = get_field( 'image_one_link_type' );
	$img_2_link_type = get_field( 'image_two_link_type' );
	$img_3_link_type = get_field( 'image_three_link_type' );

	$doc_1_link = get_field( 'image_one_document_link' );
	$doc_2_link = get_field( 'image_two_document_link' );
	$doc_3_link = get_field( 'image_three_document_link' );

?>

<style type="text/css">
    <?php if ( $lg_img_pos == 'left' ) : echo '.order' ?>  {
    /* Add styles that use ACF values here */
        order: 2
    }
    <?php endif; ?>
</style>


<div <?php ign_block_attrs( $block ); ?>>
	<div class="grid">
        <div class="span-6 grid order">
            <div class="span-12">
		        <?php if ( $img_1_link_type == 'page' ) : ?>
			        <?php $post1 = $image_one_link; ?>
                    <a href="<?php echo $post1; ?>">

				        <?php if ( $image_one ) : ?>
					        <?php echo wp_get_attachment_image( $image_one, $size ); ?>
				        <?php endif; ?>
                        <h3><?php echo $img_1_title; ?></h3>
                    </a>
		        <?php elseif ( $img_1_link_type == 'document' ) : ?>
                    <a href="<?php echo esc_url( $doc_1_link ); ?>">

				        <?php if ( $image_one ) : ?>
					        <?php echo wp_get_attachment_image( $image_one, $size ); ?>
				        <?php endif; ?>
                        <h3><?php echo $img_1_title; ?></h3>
                    </a>
                <?php endif; ?>
            </div>
            <div class="span-12">
	            <?php if ( $img_2_link_type == 'page' ) : ?>
		            <?php $post2 = $image_two_link; ?>
                    <a href="<?php echo $post2; ?>">

			            <?php if ( $image_two ) : ?>
				            <?php echo wp_get_attachment_image( $image_two, $size ); ?>
			            <?php endif; ?>
                        <h3><?php echo $img_2_title; ?></h3>
                    </a>
	            <?php elseif ( $img_2_link_type == 'document' ) : ?>
                    <a href="<?php echo esc_url( $doc_2_link ); ?>">

			            <?php if ( $image_two ) : ?>
				            <?php echo wp_get_attachment_image( $image_two, $size ); ?>
			            <?php endif; ?>
                        <h3><?php echo $img_2_title; ?></h3>
                    </a>
	            <?php endif; ?>
            </div>
            <!-- /.span-12 -->

        </div>
        <!-- /.span-6 -->
        <div class="span-6 three" style="background-image: url(<?php echo wp_get_attachment_image_url( $image_three, $size ); ?>); background-size: cover; background-position: center;">
	        <?php if ( $img_3_link_type == 'page' ) : ?>
		        <?php $post3 = $image_three_link; ?>

                <a href="<?php echo $post3; ?>">


                    <h3><?php echo $img_3_title; ?></h3>
                </a>
	        <?php elseif ( $img_3_link_type == 'document' ) : ?>
                <a href="<?php echo esc_url( $doc_3_link ); ?>">
			        <h3><?php echo $img_3_title; ?></h3>
                </a>
	        <?php endif; ?>
        </div>
        <!-- /.span-6 -->
    </div>
	<!-- /.grid -->
</div>