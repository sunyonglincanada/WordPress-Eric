<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage Eric_Theme
 * @version 1.0
 */

?>
<div class="container">
    <p class="float-right">
        <a href="#">Back to top</a>
    </p>
    <p>
        <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'erictheme' ) ); ?>" class="imprint">
            <?php printf( __( 'Proudly powered by %s', 'erictheme' ), 'WordPress' ); ?>
        </a>
    </p>
    <p class="float-right">Copyright © 2019 Eric Theme All Rights Reserved.</p>
    <p>New to Bootstrap? Visit the homepage or read our getting started guide.</p>
</div>
