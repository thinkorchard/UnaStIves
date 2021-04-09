<?php
/**
 * @package Una St Ives
 * @since 1.0
 * @version 1.0
 *
 * This shows the very top of the site with logo and navigation.
 * The navigation is using data-moveto to move itself into the left panel when the site hits a max-width of --nav-move, a css variable of 800px by default
 */

?>

<div class="site-top <?php echo ign_get_config( 'logo_position', 'logo-left' ); ?>">
    <div class="site-navigation-wrapper">
        <div class="dropdown-wrapper">
            <button class="dropdown-trigger" aria-haspopup="true" tabindex="1" aria-label="Toggle Main Menu">
                <svg viewBox="0 0 100 80" width="36" height="36" fill="#ffffff">
                    <rect width="100" height="8"></rect>
                    <rect y="30" width="100" height="8"></rect>
                    <rect y="60" width="100" height="8"></rect>
                </svg>
                <span class="screen-reader-text">Open Main Menu</span>
            </button>

            <nav class="dropdown" role="navigation"
                 aria-label="<?php _e( 'Top Menu', 'una' ); ?>">
                <a href="#O" class="close">Close</a>

				<?php wp_nav_menu( array(
					'theme_location' => 'top-menu',
					'menu_id'        => 'top-menu',
					'container'      => '',
					'fallback_cb'    => 'link_to_menu_editor',
					'walker'         => new Una_Walker_Nav()
				) ); ?>
            </nav>
        </div>
        <!-- site-navigation__nav-holder -->

	    <?php echo ign_logo(); ?>

        <div class="booking-wrapper">

            <nav class="book"
                 aria-label="<?php _e( 'Book', 'una' ); ?>" id="booking">

			    <?php wp_nav_menu( array(
				    'menu_class' => 'menu-booking',
				    'theme_location' => 'book',
				    'menu_id'        => 'book',
				    'container'      => '',
				    'fallback_cb'    => 'link_to_menu_editor',
			    ) ); ?>
            </nav>
        </div>
        <!-- /.booking-wrapper -->


    </div>
    <!-- /.site-navigation-wrapper -->
	<?php

		$header_type = get_field('header_type');
		$page_header_image = get_field( 'page_header_image' );
		$page_header_image_size = 'full';

		if ( $header_type == 'image' ) : ?>
        <div class="site-top-container">
        <?php if ( $page_header_image ) :

            $css = '';

            $srcset = getSrcSet($page_header_image);

            foreach ($srcset as $set) :

                // skip big ones
                if ($set['width'] > 1900) continue;

                $css .= '.image-container { background-image: url(' . $set['src'] . ');  }
                @media only screen and (min-width: ' . $set['width'] . 'px) {
                .image-container { background-image: url(' . $set['src'] . ');  }
                }';

            endforeach; ?>

            <div class="image-container">

            <?php $css = !empty($css) ? '<style>' . $css . '</style>' : ''; echo $css;

            endif; ?>

            </div>
            <!-- /.image-container -->
        <h1><?php the_title(); ?></h1>

        </div>
        <?php elseif ( $header_type == 'video' ) : ?>

            <div class="site-top-container embed-container">

            <?php

	            // Load value.
	            $iframe = get_field('page_header_video');

	            // Use preg_match to find iframe src.
	            preg_match('/src="(.+?)"/', $iframe, $matches);
	            $src = $matches[1];

	            // Add extra parameters to src and replace HTML.
	            $params = array(
		            'controls'  => 0,
		            'hd'        => 1,
                    'muted'     => 1,
                    'autoplay'  => 1,
	            );
	            $new_src = add_query_arg($params, $src);
	            $iframe = str_replace($src, $new_src, $iframe);

	            // Add extra attributes to iframe HTML.
	            $attributes = 'frameborder="0"';
	            $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

	            // Display customized HTML.
	            echo $iframe; ?>
                <h1><?php the_title(); ?></h1>
            </div>
            <?php elseif ( $header_type == 'slider' ) : ?>

            <div class="site-top-container slider-container">

	            <?php $counter = 0; if ( have_rows( 'page_header_slideshow' ) ) :
                    echo '<div class="swiper-container hero-slider">';
	                echo '<div class="swiper-wrapper">';
                    while ( have_rows( 'page_header_slideshow' ) ) : the_row();

	                    $counter++;
	                    $slide_title = get_sub_field( 'slide_title' );
	                    $slide_image = get_sub_field( 'slide_image' );

	                    if ( $slide_image ) :

                            $css = '';

                            $srcset = getSrcSet($slide_image);

                            foreach ($srcset as $set) :

                                // skip big ones
                                if ($set['width'] > 1900) continue;

                                $css .= '.swiper-slide-' . $counter . '{ background-image: url(' . $set['src'] . ');  } 
                                @media only screen and (min-width: ' . $set['width'] . 'px) {
                                    .swiper-slide-' . $counter . '{ background-image: url(' . $set['src'] . ');  } 
                                }';

                            endforeach; ?>

                                <div class="swiper-slide swiper-slide-<?php echo $counter; ?>"><h2><?php echo $slide_title; ?></h2></div>

	                            <?php $css = !empty($css) ? '<style>' . $css . '</style>' : ''; echo $css;

		                endif;
		            endwhile;
		                echo '</div>';
		                echo '<div class="swiper-pagination"></div>';
		            echo '</div>';
		        endif;
        endif; ?>
        </div>

</div>
<!-- site-top -->
<script>
    window.addEventListener("scroll", function(){
        let header = document.querySelector(".site-top");
        let navWrapper = document.querySelector(".site-navigation-wrapper")
        navWrapper.classList.toggle("sticky", window.scrollY > 0);
    })
</script>