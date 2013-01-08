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


?>      <footer id="site-footer" class="site-footer" role="contentinfo">
            <div class="site-info">
                <?php
                do_action( 'rad_before_footer' );
                do_action( 'rad_footer' );
                do_action( 'rad_after_footer' ); ?>
            </div>
        </footer><!-- end .site-footer -->
        </div><!-- end .site-wrapper -->
        <?php
        do_action( 'rad_after_wrapper' );
        wp_footer(); ?>
    </body>
</html>
