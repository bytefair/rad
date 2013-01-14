<?php
/**
 * This file contains functions called in header.php in the theme root
 *
 * This is a core file and should not be directly edited. Please use a child.
 *
 * @category    RAD
 * @package     Plumbing
 * @subpackage  Loops
 * @author      Paul Edmon Graham
 * @license     http://www.mozilla.org/MPL/2.0/
 * @link        http://github.com/bytefair/rad
 */


add_action( 'rad_content', 'rad_logic_loop' );
/**
 * This loop handles the basic content logic and calls all necessary templates.
 *
 * @since 0.1
 *
 * @uses rad_404() Default 404 for your site
 * @uses rad_page_loop()
 * @uses rad_single_loop()
 * @uses rad_archive_loop()
 * @uses rad_search()
 * @uses rad_image_loop()
 * @uses rad_default_loop()
 */
function rad_logic_loop() {
    if ( is_404() ) { rad_404();
    } elseif ( is_page() ) { rad_page_loop();
    } elseif ( is_single() ) { rad_single_loop();
    } elseif ( is_archive() ) { rad_archive_loop();
    } elseif ( is_search() ) { rad_search();
    } elseif ( is_image() ) { rad_image_loop();
    } else { rad_default_loop(); }
}
