<?php

	function events_slider_register_block() {
// Section Menu Block
		acf_register_block_type( array(
			'name'            => 'events-slider',
			'title'           => __( 'Events Slider' ),
			'description'     => __( 'shows a slider of posts for a post type or an archive page' ),
			'render_template' => 'src/blocks/events-slider/events-slider.php',
			'category'        => 'una-blocks',
			'icon'            => '
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="18px" height="18px"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 8v8l5-4-5-4zm9-5H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14z"/></svg>',
			'keywords'        => array( 'carousel', 'events', 'slider' ),
			'supports'        => array(
				'align'  => array( 'full' ),
				'anchor' => true
			),
			'align'           => 'full'
		) );

	}

// Check if function exists and hook into setup and adds all blocks.
	if ( function_exists( 'acf_register_block_type' ) ) {
		add_action( 'acf/init', 'events_slider_register_block' );
	}


	function acf_odblocks_load_post_types( $field ) {

		$post_types = get_post_types( array( 'public' => true ), 'objects' );

		// reset choices
		$field['choices'] = array();

		// loop through array and add to field 'choices'
		if ( is_array( $post_types ) ) {

			foreach ( $post_types as $post_type ) {
				if ( $post_type->name == 'attachment' ) {
					continue;
				}
				$field['choices'][ $post_type->name ] = $post_type->labels->name;

			}

		}


		// return the field
		return $field;

	}

	add_filter( 'acf/load_field/name=post_types', 'acf_odblocks_load_post_types' );