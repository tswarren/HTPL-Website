<?php
// Enqueue custom styles
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'htpl-global-style',
        get_stylesheet_directory_uri() . '/css/htpl_v5.0.css',
        ['elementor-frontend'],
        '5.0'
    );
}, 20);
