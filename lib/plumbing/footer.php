<?php
/**
 * This file contains functions called in footer.php in the theme root
 *
 * This is a core file and should not be directly edited. Please use a child.
 *
 * @category    RAD
 * @package     Plumbing
 * @subpackage  Footer
 * @author      Paul Edmon Graham
 * @license     http://www.mozilla.org/MPL/2.0/
 * @link        http://github.com/bytefair/rad
 */


add_action( 'rad_footer', 'rad_generator_credits' );
/**
 * Displays the WordPress and RAD credits for the site
 *
 * @since 0.1
 */
function rad_generator_credits() {
    $defaults  = __( 'This website forged using', 'rad' );
    $defaults .= ' <a href="http://wordpress.org" title="';
    $defaults .= esc_attr__( 'A Semantic Personal Publishing Platform', 'rad' );
    $defaults .= '" rel="generator">WordPress</a> and ';
    $defaults .= '<a href="http://bytefair.github.com/rad" title="RAD" rel="nofollow">RAD</a>';
    echo apply_filters( 'generator_credits', $defaults );
}
