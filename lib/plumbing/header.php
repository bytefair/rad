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


add_action( 'rad_doctype', 'rad_doctype_tag' );
/**
 * Defines an HTML5 doctype
 *
 * @since 0.1
 */
function rad_doctype_tag() {
    echo '<!DOCTYPE html>';
}

add_action( 'rad_doctype', 'rad_opening_html_tag' );
/**
 * Generates the opening tag, in this case has a class for Modernizr
 *
 * @since 0.1
 */
function rad_opening_html_tag() {
    echo '<html class="no-js">';
}

add_action( 'rad_meta', 'rad_viewport_tag' );
/**
 * Defines a default viewport for responsive development
 *
 * @since 0.1
 */
function rad_viewport_tag() {
    echo '<meta name="viewport" content="width-device-width">';
}


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
