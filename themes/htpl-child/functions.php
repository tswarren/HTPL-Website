<?php
/**
 * functions.php – HTPL Child Theme
 *
 * Contains:
 * - Global stylesheet enqueue for htpl_v5.0.css
 *
 * Shortcodes for eResources are now managed in the plugin:
 * /wp-content/plugins/htpl-eresource-shortcodes/
 *
 * @package HTPL_Child
 * @since 1.0.0
 */

/* ==========================================================================
   STYLESHEET ENQUEUE
========================================================================== */

/**
 * Enqueue global stylesheet after Elementor styles.
 */
add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style(
		'htpl-global-style',
		get_stylesheet_directory_uri() . '/css/htpl_v5.0.css',
		[ 'elementor-frontend' ],
		'5.0'
	);
}, 20 );
