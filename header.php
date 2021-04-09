<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="site-content">
 *
 * Some stuff are added to the head via wp_head() from functions.php including title tag, fonts, style.css, scripts and more
 *
 * @package ignition
 * @since 1.0
 * @version 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg dom-loading front-end">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>


<?php

?>

<body <?php body_class(); ?>>

<a class="skip-link screen-reader-text" href="#site-content-skip">
	<?php _e( 'Skip to content', 'una' ); ?>
</a>


<div class="site-container" id="site-container">



    <div id="page" class="site">

	    <?php locate_template('src/parts/global/site-top.php', true, true); ?>
	    <a id="site-content-skip" class="screen-reader-text">-</a>
        <div id="site-content" class="site-content">
