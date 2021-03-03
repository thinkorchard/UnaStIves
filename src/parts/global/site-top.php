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
	<?php

		$header_type = get_field('header_type');
		$page_header_image = get_field( 'page_header_image' );

		if ( $header_type == 'image' ) :
			if ( $page_header_image ) : ?>
    <div class="site-top-container" style="background-image:url(<?php echo $page_header_image; ?>);">
			<?php endif;
		endif;
	?>
        <h1><?php the_title(); ?></h1>
	    
        <div class="site-navigation horizontal-menu flex">

            <div class="dropdown-wrapper">
                <button class="dropdown-trigger" aria-haspopup="true" tabindex="1" aria-label="Toggle Main Menu">
                    <svg viewBox="0 0 100 80" width="30" height="38" fill="#ffffff">
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
        </div>
        <!-- site-navigation -->
    </div>
    <!-- site-top-container -->
</div>
<!-- site-top -->
