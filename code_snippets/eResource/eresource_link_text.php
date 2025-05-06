function htpl_eresource_link_text_shortcode() {
    if (!is_singular('eresource')) {
        return '';
    }

    $post_id = get_the_ID();
    $title = get_the_title($post_id);
    $pod = pods('eresource', $post_id);

    if (empty($pod)) {
        return '';
    }

    $embed_method = $pod->field('embed_method'); // Raw value (likely a string)
    $apollo_id = $pod->field('apollo_id');
    $direct_url = $pod->field('direct_url');

    $output = '<div class="eresource_link">';

    if (($embed_method === 'apollo' || $embed_method === 'both') && $apollo_id) {
        $output .= '<div data-apollo="database_' . esc_attr($apollo_id) . '">Click here to access ' . esc_html($title) . '</div>';
    } elseif (($embed_method === 'url' || $embed_method === 'both') && $direct_url) {
        $output .= '<a href="' . esc_url($direct_url) . '" target="_blank" rel="noopener">Click here to access ' . esc_html($title) . '</a>';
    } else {
        $output .= '<em>Access information is not currently available for this resource.</em>';
    }

    $output .= '</div>';
    return $output;
}
add_shortcode('eresource_link_text', 'htpl_eresource_link_text_shortcode');
