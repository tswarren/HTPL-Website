function htpl_eresource_link_button_shortcode() {
    if (!is_singular('eresource')) {
        return '';
    }

    $post_id = get_the_ID();
    $title = get_the_title($post_id);
    $pod = pods('eresource', $post_id);

    if (empty($pod)) {
        return '<nav class="eresource_link"><em>Pods object not found.</em></nav>';
    }

    $embed_method_raw = $pod->field('embed_method');
    $embed_method = is_array($embed_method_raw) ? reset($embed_method_raw) : $embed_method_raw;
    $embed_method = strtolower(trim($embed_method));

    $apollo_id = trim($pod->field('apollo_id'));
    $direct_url = trim($pod->field('direct_url'));

    $output = '<nav class="eresource_link" aria-label="Access options for this resource">';
    $has_output = false;

    // Apollo access
    if (($embed_method === 'apollo' || $embed_method === 'both') && !empty($apollo_id)) {
        $output .= '
        <div class="eresource_button">
            <div data-apollo="database_' . esc_attr($apollo_id) . '">
                <a href="#" class="elementor-button-link elementor-button elementor-size-md"
                   aria-label="Access ' . esc_attr($title) . ' through library portal">
                    <span class="elementor-button-content-wrapper">
                        <span class="elementor-button-text">Access via Library Portal</span>
                    </span>
                </a>
            </div>
        </div>';
        $has_output = true;
    }

    // Direct URL access
    if (($embed_method === 'url' || $embed_method === 'both') && !empty($direct_url)) {
        $output .= '
        <div class="eresource_button">
            <a href="' . esc_url($direct_url) . '" class="elementor-button-link elementor-button elementor-size-md"
               target="_blank" rel="noopener"
               aria-label="Open ' . esc_attr($title) . ' directly in a new tab">
                <span class="elementor-button-content-wrapper">
                    <span class="elementor-button-text">Access Directly</span>
                </span>
            </a>
        </div>';
        $has_output = true;
    }

    if (!$has_output) {
        $output .= '<div class="eresource_button"><em>Access information is not currently available for this resource.</em></div>';
    }

    $output .= '</nav>';
    return $output;
}
add_shortcode('eresource_link_button', 'htpl_eresource_link_button_shortcode');
