<?php
/**
 * Displays content for blog page
 *
 * @package WordPress
 * @subpackage Eric_Theme
 * @version 1.0
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'erictheme-panel ' ); ?> >
    <div class="panel-content">
        <div class="wrap">
            <header class="entry-header">
                <?php
                if ( is_single() ) {
                    the_title( '<h1 class="entry-title">', '</h1>' );
                } elseif ( is_front_page() && is_home() ) {
                    the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
                } else {
                    the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                }
                ?>
            </header><!-- .entry-header -->
            <div class="entry-content">
                <?php
                /* translators: %s: Name of current post */
                the_content(
                    sprintf(
                        __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'erictheme' ),
                        get_the_title()
                    )
                );
                ?>
            </div><!-- .entry-content -->

        </div><!-- .wrap -->
    </div><!-- .panel-content -->

</article><!-- #post -->
