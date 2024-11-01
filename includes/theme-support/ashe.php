<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;


// Adds custom CSS inline
add_action( 'wp_enqueue_scripts', 'kbe_theme_support_ashe_inline_css', 100 );

// Main content area
add_action( 'kbe_template_before_wrapper', 'kbe_theme_support_ashe_content_wrapper_start', 50 );
add_action( 'kbe_template_after_wrapper', 'kbe_theme_support_ashe_content_wrapper_end', 50 );


/**
 * Adds custom CSS inline
 *
 */
function kbe_theme_support_ashe_inline_css() {

	$css  = 'body.wp-knowledgebase .widget { margin-bottom: 40px; }';
	$css .= 'body.wp-knowledgebase .widget form[role="search"] input { padding: 12px; border: 1px solid #e8e8e8; }';

	wp_add_inline_style( 'kbe_theme_style', $css );

}


/**
 * Outputs the start of the page wrapper
 *
 */
function kbe_theme_support_ashe_content_wrapper_start() {
	echo '<div class="main-content">';
}

/**
 * Outputs the end of the page wrapper
 *
 */
function kbe_theme_support_ashe_content_wrapper_end() {
	echo '</div>';
}