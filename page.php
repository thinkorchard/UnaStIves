<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Una St Ives
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
        <div class="page-menu">
            <div class="container">
	            <?php

		            if ( has_children() OR $post->post_parent > 0 ) { ?>

                        <nav class="nav">



                            <ul class="sub-menu">

					            <?php

						            $args = array(
							            'child_of' => get_top_ancestor_id(),
							            'title_li' => '',
                                        'depth' => 1
						            );

					            ?>

					            <?php wp_list_pages($args); ?>
                            </ul>
                        </nav>

		            <?php } ?>
            </div>
            <!-- /.container -->
        </div>
        <!-- /.page-menu -->

		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();
				ign_template('content');
			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();
