<?php
/**
 * Loads RAD's PHP code
 *
 * This is a core file and should not be directly edited. Please use a child.
 *
 * @category    RAD
 * @package     Core
 * @subpackage  Loader
 * @author      Paul Edmon Graham
 * @license     http://www.mozilla.org/MPL/2.0/
 * @link        http://github.com/bytefair/rad
 */

add_action( 'rad_loader', 'rad_define_constants' );
/**
 * Defines any constants used
 *
 * @since 0.1
 */
function rad_define_constants() {
    // basic directories
    define( 'PARENT_DIR', get_template_directory() );
    define( 'CHILD_DIR', get_stylesheet_directory() );
    // RAD framework directories
    define( 'RAD_LIB_DIR', PARENT_DIR . '/lib' );
    define( 'RAD_PLUMBING_DIR, PARENT_DIR . '/lib/plumbing' );
}

add_action( 'rad_loader', 'rad_load_files' );
/**
 * Loads all the toolkit's PHP files.
 *
 * @since 0.1
 */
function rad_load_files() {
    // load the engine
    require_once( RAD_LIB_DIR . '/engine.php' );
    // load the plumbing
    require_once( RAD_PLUMBING_DIR . '/header.php' );
    require_once( RAD_PLUMBING_DIR . '/loops.php' );
}

/* run all the functions linked to loader */
do_action( 'rad_loader' );
