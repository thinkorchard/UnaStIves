<?php
/**
 * The main template file
 *
 *
 * It is used to display a page when nothing more specific matches a query.
 *
 * The index page. Default for any archive not created. Duplicate this for new archive pages for post types and rename to archive-{post-type}.php.
 * For the 'post' post type you can duplicate this and rename it home.php
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link    https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Una St Ives
 * @since   1.0
 * @version 1.0
 *
 */

get_header( 'blog' );


?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <div class="container card-listing alignwide">
                <section class="card-holder card-grid">
					<?php
					if ( have_posts() ):
						while ( have_posts() ) : the_post();
							ign_template( 'card' );
						endwhile;
					endif;

					?>
                </section><!-- .entry-content -->

                <div class="container card-pagination text-center">
					<?php
					the_posts_pagination( array(
						'prev_text'          => '<span class="iconify" data-icon="carbon:chevron-left"></span><span class="screen-reader-text">' . __( 'Previous page', 'una' ) . '</span>',
						'next_text'          => '<span class="screen-reader-text">' . __( 'Next page', 'una' ) . '</span><span class="iconify" data-icon="carbon:chevron-right"></span>',
						'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'una' ) . ' </span>',
					) );
					?>
                </div>

            </div>

        </main><!-- #main -->
    </div><!-- #primary -->


<?php
get_footer();
