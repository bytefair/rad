<?php
/**
 * Sidebar template
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


?><div id="sidebar" class="sidebar">
    <?php
    do_action( 'rad_before_sidebar' );
    do_action( 'rad_sidebar' );
    do_action( 'rad_after_sidebar ' ); ?>
</div>
