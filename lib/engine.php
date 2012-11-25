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
 * The main function of RAD. It loads the header, footer, and basic hooks.
 *
 * @since 0.1
 */
function engine() {
    get_header();

    get_footer();
}
