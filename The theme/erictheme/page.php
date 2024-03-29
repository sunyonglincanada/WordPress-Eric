<?php
/**
 * The template for displaying all pages
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
                while ( have_posts() ) :
                    the_post();
                    get_template_part( 'template-parts/page/content', 'page' );
                endwhile; // End of the loop.
                ?>
            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!-- .wrap -->

<?php
get_footer();
