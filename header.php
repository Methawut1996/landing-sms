<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gds
 */

?>
    <!doctype html>
    <html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="profile" href="http://gmpg.org/xfn/11">


        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

        <!-- Toggle Menu -->
        <div class="toggle-menu" canvas=""><i class="fa fa-bars"></i><span>Menu</span></div>



        <div id="page" class="site" canvas="container">

            <div id="content" class="site-content">