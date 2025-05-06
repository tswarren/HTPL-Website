function htpl_eresource_summary_shortcode() {
    if (!is_singular('eresource')) {
        return '';
    }

    $post_id = get_the_ID();
    $output = '<div class="eresource-summary" style="font-size: 0.95em;">';

    // eResource Type (taxonomy with fa_icon)
    $types = get_the_terms($post_id, 'eresource_type');
    if ($types && !is_wp_error($types)) {
        $output .= '<p><strong>eResource Type:</strong> ';
        $type_list = [];

        foreach ($types as $type) {
            $icon = get_term_meta($type->term_id, 'fa_icon', true);
            $icon_html = $icon ? '<i class="' . esc_attr($icon) . '" aria-hidden="true"></i> ' : '';
            $type_list[] = $icon_html . esc_html($type->name);
        }

        $output .= implode(', ', $type_list) . '</p>';
    }

    // Embed Method
    $embed_method = pods_field_display('eresource', $post_id, 'embed_method');
    if ($embed_method) {
        $output .= '<p><strong>Embed Method:</strong> ' . esc_html(ucfirst($embed_method)) . '</p>';
    }

    // Apollo ID
    $apollo_id = pods_field_display('eresource', $post_id, 'apollo_id');
    if ($apollo_id) {
        $output .= '<p><i class="fas fa-database" aria-hidden="true"></i> <strong>Apollo ID:</strong> ' . esc_html($apollo_id) . '</p>';
    }

    // Direct URL
    $direct_url = pods_field_display('eresource', $post_id, 'direct_url');
    if ($direct_url) {
        $output .= '<p><i class="fas fa-external-link-alt" aria-hidden="true"></i> <strong>Direct URL:</strong> <a href="' . esc_url($direct_url) . '" target="_blank" rel="noopener">' . esc_html($direct_url) . '</a></p>';
    }

    $output .= '</div>';
    return $output;
}
add_shortcode('htpl_eresource_summary', 'htpl_eresource_summary_shortcode');
