<?php
/**
 * Runs the site--the engine if you will. It holds the main function.
 *
 * This is a core file and should not be directly edited. Please use a child.
 *
 * @category    RAD
 * @package     Core
 * @subpackage  Engine
 * @author      Paul Edmon Graham
 * @license     http://www.mozilla.org/MPL/2.0/
 * @link        http://github.com/bytefair/rad
 */


/**
 * The main function of RAD. It loads the header, footer, and content hooks.
 *
 * @since 0.1
 */
function engine() {
    get_header();

    $site_open  = '<div id="page-content" class="page-content" role="main">';
    echo apply_filters( 'rad_site_div_element_open', $site_open );

    do_action( 'rad_before_content' );
    do_action( 'rad_content' );
    do_action( 'rad_after_content' );

    get_sidebar();

    $site_close = '</div>';
    echo apply_filters( 'rad_site_div_element_close', $site_close );

    get_footer();
}
