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


/**
 * @since 0.1
 *
 * @return string H1 using site title
 */
function rad_site_title() {
    $site_title         = esc_html( get_bloginfo( 'name' ) );
    $site_title_attr    = esc_attr( get_bloginfo( 'name', 'display' ) );
    $site_url           = esc_url( trailingslashit ( home_url() ) );
    $site_title_element_open  = '<h1 id="site-title" class="site-title">';
    $site_title_element_close = '</h1>';

    $site_title_string  = '<a href="' . $site_url . '" rel="home">';
    $site_title_string .= $site_title;
    $site_title_string .= '</a>';

    $site_title_element_open  = apply_filters( 'rad_site_title_element_open', $site_title_element_open );
    $site_title_element_close = apply_filters( 'rad_site_title_element_close', $site_title_element_close );

    return $site_title_element_open . $site_title_string . $site_title_element_close;
}

/**
 * @since 0.1
 *
 * @return string H2 using site description
 */
function rad_site_description() {
    $site_description_open  = '<h2 id="site-description" class="site-description">';
    $site_description_close = '</h2>';
    $site_description       = esc_html( get_bloginfo( 'description' ) );

    $site_description_open  = apply_filters( 'rad_site_description_element_open', $site_description_open );
    $site_description_close = apply_filters( 'rad_site_description_element_close', $site_description_close );

    return $site_description_open . $site_description . $site_description_close;
}


/**
 * Adds hgroup wrapper to passed HTML string
 *
 * @since 0.1
 *
 * @param string The HTML a user desires to be wrapped in hgroup
 * @return string The original HTML wrapped in the default hgroup element
 */
function rad_header_group( $input ) {
    $output = '<hgroup>' . $input . '</hgroup>';
    return $output;
}


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
    $html  = '<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->';
    $html .= '<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]-->';
    $html .= '<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->';
    $html .= '<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->';
    echo $html;
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
    if ( 'open' == get_option( 'default_ping_status' ) ) {
        echo '<link rel="pingback" href="' . get_bloginfo( 'pingback_url' ) . '" />';
    }
}


add_action( 'rad_header', 'rad_do_header_structure' );
/**
 * Uses the helper functions to construct a header area inside the header tag.
 *
 * @since 0.1
 *
 * @uses rad_site_title()
 * @uses rad_site_description()
 * @uses rad_header_group()
 */
function rad_do_header_structure() {
    $header  = rad_site_title();
    $header .= rad_site_description();
    echo rad_header_group( $header );
}
