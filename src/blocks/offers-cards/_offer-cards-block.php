<?php

	function ign_offers_card_register_block() {
// Section Menu Block
		acf_register_block_type( array(
			'name'            => 'offer-post-cards',
			'title'           => __( 'Offers Cards' ),
			'description'     => __( 'shows a listing of items for the offers post type or an archive page' ),
			'render_template' => 'src/blocks/offers-cards/offer-cards-block.php',
			'category'        => 'ign-custom',
			'icon'            => 'editor-table',
			'keywords'        => array( 'archive', 'cards', 'listing' ),
			'supports'        => array(
				'align'  => array( 'wide', 'full' ),
				'anchor' => true
			)
		) );

	}

// Check if function exists and hook into setup and adds all blocks.
	if ( function_exists( 'acf_register_block_type' ) ) {
		add_action( 'acf/init', 'ign_offers_card_register_block' );
	}


	function acf_load_offer_post_types( $field ) {

		$post_types = get_post_types(array('public' => true),'objects');

		// reset choices
		$field['choices'] = array();

		// loop through array and add to field 'choices'
		if( is_array($post_types) ) {

			foreach( $post_types as $post_type ) {
				if($post_type->name == 'attachment'){
					continue;
				}
				$field['choices'][ $post_type->name ] = $post_type->labels->name;

			}

		}


		// return the field
		return $field;

	}

	add_filter('acf/load_field/name=post_types', 'acf_load_offer_post_types');