<?php
	add_theme_support( 'disable-custom-colors' );
	/**
	 * Set the theme colors
	 */
	add_action( 'after_setup_theme', 'una_register_colors' );
	function una_register_colors() {
		add_theme_support(
			'editor-color-palette', array(
				array(
					'name'  => esc_html__( 'White', 'una' ),
					'slug'  => 'white',
					'color' => '#ffffff',
				),
				array(
					'name'  => esc_html__( 'Dark Navy', 'una' ),
					'slug'  => 'dark-navy',
					'color' => '#282c51',
				),
				array(
					'name'  => esc_html__( 'Light Blue', 'una' ),
					'slug'  => 'light-blue',
					'color' => '#60a5ff',
				),
				array(
					'name'  => esc_html__( 'Blue', 'una' ),
					'slug'  => 'blue',
					'color' => '#0045b2',
				),
				array(
					'name'  => esc_html__( 'Mauve', 'una' ),
					'slug'  => 'mauve',
					'color' => '#8787ba',
				),
				array(
					'name'  => esc_html__( 'Purple', 'una' ),
					'slug'  => 'purple',
					'color' => '#aa479d',
				),
				array(
					'name'  => esc_html__( 'Dark Pink', 'una' ),
					'slug'  => 'dark-pink',
					'color' => '#ef307d',
				),
				array(
					'name'  => esc_html__( 'Peach', 'una' ),
					'slug'  => 'peach',
					'color' => '#ff7d80',
				),
				array(
					'name'  => esc_html__( 'Black', 'una' ),
					'slug'  => 'black',
					'color' => '#191919',
				),
				array(
					'name'  => esc_html__( 'Yellow', 'una' ),
					'slug'  => 'yellow',
					'color' => '#ffcc00',
				),
				array(
					'name'  => esc_html__( 'Mint Green', 'una' ),
					'slug'  => 'mint-green',
					'color' => '#06a9a6',
				),
				array(
					'name'  => esc_html__( 'Orange', 'una' ),
					'slug'  => 'orange',
					'color' => '#f88001',
				),
				array(
					'name'  => esc_html__( 'Red', 'una' ),
					'slug'  => 'red',
					'color' => '#f52217',
				),
				array(
					'name'  => esc_html__( 'Green', 'una' ),
					'slug'  => 'green',
					'color' => '#099534',
				),
			)
		);
	}

	function una_output_the_colors() {

		// get the colors
		$color_palette = current( (array) get_theme_support( 'editor-color-palette' ) );

		// bail if there aren't any colors found
		if ( ! $color_palette ) {
			return;
		}

		// output begins
		ob_start();

		// output the names in a string
		echo '[';
		foreach ( $color_palette as $color ) {
			echo "'" . $color['color'] . "', ";
		}
		echo ']';

		return ob_get_clean();

	}

	add_action( 'acf/input/admin_footer', 'una_register_acf_color_palette' );
	function una_register_acf_color_palette() {

		$color_palette = una_output_the_colors();
		if ( ! $color_palette ) {
			return;
		}

		?>
		<script type="text/javascript">
            (function ($) {
                acf.add_filter('color_picker_args', function (args, $field) {

                    // add the hexadecimal codes here for the colors you want to appear as swatches
                    args.palettes = <?php echo $color_palette; ?>

                    // return colors
                    return args;

                });
            })(jQuery);
		</script>
		<?php

	}

	add_filter( 'block_categories', 'una_block_category', 10, 2 );
	function una_block_category( $categories, $post ) {
		return array_merge(
			$categories,
			array(
				array(
					'slug'  => 'una-blocks',
					'title' => __( 'Una Blocks', 'una-blocks' ),
				),
			)
		);
	}