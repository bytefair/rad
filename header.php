<?php
/**
 * Header template, calls the engine function.
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

do_action( 'rad_doctype' ); ?>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <?php
        // triggers code located in /lib/plumbing/header.php
        do_action( 'rad_meta' );
        // default WP head hook
        wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <?php
        do_action( 'rad_before_wrapper' ); ?>
        <div class="site-wrapper">
            <header class="site-header" role="banner">
                <?php
                do_action( 'rad_before_header' );
                do_action( 'rad_header' );
                do_action( 'rad_after_header' );
                ?>
                <nav class="site-navigation" role="navigation">
                    <?php
                    do_action( 'rad_before_nav' );
                    do_action( 'rad_nav' );
                    do_action( 'rad_after_nav' ); ?>
                </nav><!-- end .site-navigation -->
            </header><!-- end #masthead .site-header -->
