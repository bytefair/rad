<?php
/**
 * This file contains functions called in /lib/plumbing/header.php
 *
 * This is a core file and should not be directly edited. Please use a child.
 *
 * @category    RAD
 * @package     Functions
 * @subpackage  Header
 * @author      Paul Edmon Graham
 * @license     http://www.mozilla.org/MPL/2.0/
 * @link        http://github.com/bytefair/rad
 */

/**
 * @since 0.1
 *
 * @return string H1 using site title
 */
function rad_site_title() {
    $site_title         = get_bloginfo( 'name' );
    $site_title_attr    = esc_attr( get_bloginfo( 'name', 'display' ) );
    $site_url           = esc_url( home_url( '/' ) );

    $site_title_string  = '<h1 id="site-title" class="site-title">';
    $site_title_string .= '<a href="' . $site_url . '" rel="home">';
    $site_title_string .= $site_title;
    $site_title_string .= '</a>';
    $site_title_string .= '</h1>';

    echo $site_title_string;
}

/**
 * @since 0.1
 *
 * @return string H2 using site description
 */
function rad_site_description() {
    $site_description = get_bloginfo( 'description' );
    echo '<h2 id="site-description" class="site-description">' . $site_description . '</h2>';
}

add_filter( 'rad_do_hgroup_wrapper', 'rad_hgroup_wrapper_filter', 10, 1 );
/**
 * Adds hgroup wrapper to passed HTML string
 *
 * @since 0.1
 *
 * @param string The HTML a user desires to be wrapped in hgroup
 * @return string The original HTML wrapped in the default hgroup element
 */
function rad_hgroup_wrapper_filter( $input ) {
    $output = '<hgroup>' . $input . '</hgroup>';
    return $output;
}
