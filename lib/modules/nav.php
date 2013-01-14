<?php
/**
 * This file contains functions called in header.php in the theme root
 *
 * This is a core file and should not be directly edited. Please use a child.
 *
 * @category    RAD
 * @package     Modules
 * @subpackage  Nav
 * @author      Paul Edmon Graham
 * @license     http://www.mozilla.org/MPL/2.0/
 * @link        http://github.com/bytefair/rad
 */

add_action ( 'rad_execute_nav', 'rad_nav_structure' );
/**
 * Executes the nav structure. This exists so you can move the entire nav
 * to a different hook if you are so inclined.
 *
 * @since 0.1
 */
function rad_nav_structure() {
    if ( current_theme_supports( 'menus' ) ) {
        $nav_open  = '<nav id="site-navigation" class="site-navigation" role="navigation">';
        echo apply_filters( 'rad_site_nav_element_open', $nav_open );

        do_action( 'rad_before_nav' );
        do_action( 'rad_nav' );
        do_action( 'rad_after_nav' );

        $nav_close = '</nav>';
        echo apply_filters( 'rad_site_nav_element_close', $nav_close );
    }
}
