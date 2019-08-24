<?php
/**
 * The home page template file
 *
 * @package WordPress
 * @subpackage Eric_Theme
 * @version 1.0
 */

get_header(); ?>

    <div id="primary" class="container">
        <div class="row">
            <main id="main" class="site-main col-12" role="main">
                <?php
                // Show the selected front page content.
                if ( have_posts() ) :
                    while ( have_posts() ) :
                        the_post();
                        get_template_part( 'template-parts/post/content', '' );
                    endwhile;
                else :
                    get_template_part( 'template-parts/post/content', 'none' );
                endif;
                ?>
            </main><!-- #main -->
        </div>
    </div><!-- #primary -->

<?php
get_footer();