<?php
/**
 * This file contains functions called in header.php in the theme root
 *
 * This is a core file and should not be directly edited. Please use a child.
 *
 * @category    RAD
 * @package     Plumbing
 * @subpackage  Header
 * @author      Paul Edmon Graham
 * @license     http://www.mozilla.org/MPL/2.0/
 * @link        http://github.com/bytefair/rad
 */


add_action( 'rad_meta', 'rad_xua_tag' );
/**
 * Defines an X-UA-Compatible tag to help IE be less stupid
 *
 * @since 0.1
 */
function rad_xua_tag () {
    echo '<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">';
}


add_action( 'rad_meta', 'rad_title_generator' );
/**
 * Generates the title tag
 *
 * @since 0.1
 */
function rad_title_generator() {
    // this will probably be replaced by something more SEO friendly in the future
    echo '<title>' . wp_title( '|', true, 'right' ) . '</title>';
}

add_action( 'rad_meta', 'rad_wp_network_tags' );
/**
 * Generates the pingback and generally worthless XFN tag
 *
 * @since 0.1
 */
function rad_wp_network_tags() {
    echo '<link rel="profile" href="http://gmpg.org/xfn/11">';
    echo '<link rel="pingback" href="' . get_bloginfo( 'pingback_url' ) . '" />';
}
