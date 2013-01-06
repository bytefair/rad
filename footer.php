<?php
/**
 * Footer template, calls the engine function.
 *
 * This is a core file and should not be directly edited. Please use a child.
 *
 * @category    RAD
 * @package     Templates
 * @author      Paul Edmon Graham
 * @license     http://www.mozilla.org/MPL/2.0/
 * @link        http://github.com/bytefair/rad
 * @since       0.1
 */
?>
        </div><!-- end .site-wrapper -->
        <?php
        do_action( 'rad_after_wrapper' );
        //default WP footer hook
        wp_footer(); ?>
    </body>
</html>
