<?php
/**
 * The template for displaying the footer
 *
 * @package WordPress
 * @subpackage Eric_Theme
 * @version 1.0
 */

?>

</div><!-- #content -->

<footer id="site-footer" class="site-footer fixed-bottom" role="contentinfo">
    <div class="wrap">
        <?php
        get_template_part( 'template-parts/footer/site', 'info' );
        ?>
    </div><!-- .wrap -->
</footer><!-- #colophon -->
</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
