<?php
/**
 * functions.php – Custom theme enhancements for HTPL Child Theme
 *
 * Contains:
 * - Custom stylesheet enqueue
 * - Shortcodes for content_type taxonomy (icon, badge, etc.)
 *
 * @package HTPL_Child
 * @since 1.0.0
 */

/* ==========================================================================
   STYLESHEET ENQUEUE
========================================================================== */

// Enqueue global HTPL CSS stylesheet after Elementor frontend styles
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'htpl-global-style',
        get_stylesheet_directory_uri() . '/css/htpl_v5.0.css',
        ['elementor-frontend'],
        '5.0'
    );
}, 20);

/* ==========================================================================
   SHORTCODES: content_type (icon + badge helpers)
========================================================================== */

/**
 * Outputs Font Awesome icon + badge for the content_type taxonomy.
 *
 * Usage: [htpl_content_type_badge]
 *
 * @return string HTML markup
 */
function htpl_content_type_badge_and_icon( $atts ) {
    $post_id = get_the_ID();
    $terms = get_the_terms( $post_id, 'content_type' );
    if ( empty( $terms ) || is_wp_error( $terms ) ) return '';

    $term = $terms[0];
    $fa_icon = get_term_meta( $term->term_id, 'fa_icon', true );
    $badge_color = get_term_meta( $term->term_id, 'badge_color', true );

    $fa_icon = $fa_icon ? esc_attr( $fa_icon ) : 'fa-circle';
    $badge_color = $badge_color ? esc_attr( $badge_color ) : '#ccc';

    ob_start();
    ?>
    <div class="content-type-meta">
        <i class="fa <?php echo $fa_icon; ?>"></i>
        <span class="badge" style="background-color: <?php echo $badge_color; ?>; color: #fff;">
            <?php echo esc_html( $term->name ); ?>
        </span>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode( 'htpl_content_type_badge', 'htpl_content_type_badge_and_icon' );

/**
 * Outputs only the Font Awesome icon for the content_type taxonomy.
 *
 * Usage: [htpl_content_type_icon]
 *
 * @return string HTML icon element
 */
function htpl_content_type_icon_only( $atts ) {
    $post_id = get_the_ID();
    $terms = get_the_terms( $post_id, 'content_type' );
    if ( empty( $terms ) || is_wp_error( $terms ) ) return '';

    $term = $terms[0];
    $fa_icon = get_term_meta( $term->term_id, 'fa_icon', true );
    $fa_icon = $fa_icon ? esc_attr( $fa_icon ) : 'fa-circle';

    return '<i class="fa ' . $fa_icon . '"></i>';
}
add_shortcode( 'htpl_content_type_icon', 'htpl_content_type_icon_only' );

/**
 * Outputs only the badge (name + color) from the content_type taxonomy.
 *
 * Usage: [htpl_content_type_badge_only]
 *
 * @return string HTML badge element
 */
function htpl_content_type_badge_only( $atts ) {
    $post_id = get_the_ID();
    $terms = get_the_terms( $post_id, 'content_type' );
    if ( empty( $terms ) || is_wp_error( $terms ) ) return '';

    $term = $terms[0];
    $badge_color = get_term_meta( $term->term_id, 'badge_color', true );
    $badge_color = $badge_color ? esc_attr( $badge_color ) : '#ccc';

    return '<span class="badge content-type-badge" style="background-color: ' . $badge_color . '; color: #fff;">' . esc_html( $term->name ) . '</span>';
}
add_shortcode( 'htpl_content_type_badge_only', 'htpl_content_type_badge_only' );
