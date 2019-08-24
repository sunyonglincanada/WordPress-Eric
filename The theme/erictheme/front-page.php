<?php
/**
 * The front page template file
 *
 * @package WordPress
 * @subpackage Eric_Theme
 * @version 1.0
 */

get_header(); ?>
    <div class="container">
        <div class="row">
            <header class="col-12">
                <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
            </header><!-- .entry-header -->
            <?php get_template_part( 'template-parts/page/content', 'front-page' ); ?>
        </div>
    </div>
<?php
get_footer();
