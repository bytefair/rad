<?php
/**
 * Header template, called by the engine function. Related code can be found
 * inside /lib/plumbing/header.php
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
    do_action( 'rad_meta' );

    wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php
    do_action( 'rad_before_wrapper' );

    $site_wrapper_element_open = '<div id="site-wrapper" class="site-wrapper">';
    echo apply_filters( 'rad_site_wrapper_element_open', $site_wrapper_element_open );

    do_action( 'rad_before_site' );

    $header_element_open = '<header id="site-header" class="site-header" role="banner">';
    echo apply_filters( 'rad_header_element_open', $header_element_open );

        do_action( 'rad_before_header' );
        do_action( 'rad_header' );
        do_action( 'rad_after_header' );

        // executes the code in /lib/modules/nav.php
        do_action( 'rad_execute_nav' );

    $header_element_close = '</header>';
    echo apply_filters( 'rad_header_element_close', $header_element_close );
