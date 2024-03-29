<?php
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage Eric_Theme
 * @version 1.0
 */

get_header(); ?>

    <div class="wrap">
        <?php if ( is_home() && ! is_front_page() ) : ?>
            <header class="page-header">
                <h1 class="page-title"><?php single_post_title(); ?></h1>
            </header>
        <?php else : ?>
            <header class="page-header">
                <h2 class="page-title"><?php _e( 'Posts', 'erictheme' ); ?></h2>
            </header>
        <?php endif; ?>

        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

                <?php
                if ( have_posts() ) :

                    /* Start the Loop */
                    while ( have_posts() ) :
                        the_post();

                        /*
                         * Include the Post-Format-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                         */
                        get_template_part( 'template-parts/post/content', 'post' );

                    endwhile;

                    the_posts_pagination(
                        array(
                            'prev_text'          => '<span class="screen-reader-text">' . __( 'Previous page', 'erictheme' ) . '</span>',
                            'next_text'          => '<span class="screen-reader-text">' . __( 'Next page', 'erictheme' ) . '</span>',
                            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'erictheme' ) . ' </span>',
                        )
                    );

                else :

                    get_template_part( 'template-parts/post/content', 'none' );

                endif;
                ?>

            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!-- .wrap -->

<?php
get_footer();
