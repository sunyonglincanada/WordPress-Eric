<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Eric_Theme
 * @version 1.0
 */

get_header(); ?>

    <div class="wrap">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                <?php
                /* Start the Loop */
                while ( have_posts() ) :
                    the_post();

                    get_template_part( 'template-parts/post/content', 'post' );

                    the_post_navigation(
                        array(
                            'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'erictheme' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'erictheme' ) . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper"></span>%title</span>',
                            'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'erictheme' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'erictheme' ) . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper"></span></span>',
                        )
                    );

                endwhile; // End of the loop.
                ?>

            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!-- .wrap -->

<?php
get_footer();
