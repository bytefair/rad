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


$footer_element_open = '<footer id="site-footer" class="site-footer" role="contentinfo">';
echo apply_filters( 'rad_footer_element_open', $footer_element_open );

do_action( 'rad_before_footer' );
do_action( 'rad_footer' );
do_action( 'rad_after_footer' );

$footer_element_close = '</footer>';
echo apply_filters( 'rad_footer_element_close', $footer_element_close );

$site_wrapper_element_close = '</div>';
echo apply_filters( 'rad_site_wrapper_element_close', $site_wrapper_element_close );

do_action( 'rad_after_site' );
do_action( 'rad_after_site_wrapper' );

wp_footer(); ?>

</body>
</html>
