<?php
/**
 * Index template, calls the engine function.
 *
 * This is a core file and should not be directly edited. Please use a child.
 *
 * @category    RAD
 * @package     Templates
 * @author      Paul Edmon Graham
 * @license     http://www.mozilla.org/MPL/2.0/
 * @link        http://github.com/bytefair/rad
 * @since       0.1
 */
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <?php
        // located in /lib/plumbing/header.php
        do_action( 'rad_meta' );
        // default WP head hook
        wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <?php
        do_action( 'rad_pre_wrapper' ); ?>
        <div class="site-wrapper">
