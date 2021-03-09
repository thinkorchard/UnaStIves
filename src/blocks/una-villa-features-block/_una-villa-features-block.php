<?php

	function una_villa_features_block_register_block() {

		acf_register_block_type( array(
			'name'            => 'una-villa-features',
			'title'           => __( 'Villa Features Block' ),
			'description'     => __( 'Display a block with both with 2 columns with Image on right' ),
			'render_template' => 'src/blocks/una-villa-features-block/una-villa-features-block.php',
			'category'        => 'una-blocks',
			'icon'            => '<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M19 7h-8v6h8V7zm2-4H3c-1.1 0-2 .9-2 2v14c0 1.1.9 1.98 2 1.98h18c1.1 0 2-.88 2-1.98V5c0-1.1-.9-2-2-2zm0 16.01H3V4.98h18v14.03z"/></svg>',
			'keywords'        => array( 'layout', 'columns' ),
			'supports'        => array(
				'align'  => array( 'wide', 'full' ),
				'anchor' => true,
				'jsx'       => true
			)
		) );

	}

// Check if function exists and hook into setup and adds all blocks.
	if ( function_exists( 'acf_register_block_type' ) ) {
		add_action( 'acf/init', 'una_villa_features_block_register_block' );
	}
