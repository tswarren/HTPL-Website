<?php
/**
 * Plugin Name: HTPL eResource Shortcodes
 * Description: Provides global post context and reusable shortcodes for eResources.
 * Author: Thomas Sycko-Miller / T.S. Warren Data Services
 * Version: 1.0.1
 */

add_action( 'plugins_loaded', function () {

	// Register global post context for htpl_eresources
	add_action( 'wp', function () {
		if ( is_singular( 'htpl_eresources' ) && function_exists( 'pods' ) ) {
			global $htpl_eresource_post_id, $htpl_eresource_pod;
			$htpl_eresource_post_id = get_the_ID();
			$htpl_eresource_pod = pods( 'htpl_eresources', $htpl_eresource_post_id );
		}
	});

	// htpl_pods shortcode
	add_shortcode( 'htpl_pods', function ( $atts ) {
		global $htpl_eresource_post_id, $htpl_eresource_pod;

		$atts = shortcode_atts( [
			'field'    => '',
			'template' => '',
			'name'     => 'htpl_eresources',
			'id'       => 0,
		], $atts );

		$post_id = $atts['id'] ?: $htpl_eresource_post_id ?? get_the_ID();
		if ( ! $post_id || empty( $atts['field'] ) ) return '';

		$pod = ( $post_id === $htpl_eresource_post_id && isset( $htpl_eresource_pod ) )
			? $htpl_eresource_pod
			: ( function_exists( 'pods' ) ? pods( $atts['name'], $post_id ) : null );

		if ( ! $pod ) return '⚠️ Pod not found';

		return $atts['template']
			? $pod->template( $atts['template'] )
			: $pod->display( $atts['field'] );
	});

	// htpl_content_type_icon shortcode
	add_shortcode( 'htpl_content_type_icon', function () {
		global $htpl_eresource_post_id;
		$post_id = $htpl_eresource_post_id ?? get_the_ID();
		if ( ! $post_id ) return '';

		$terms = get_the_terms( $post_id, 'content_type' );
		if ( empty( $terms ) || is_wp_error( $terms ) ) return '';

		$fa_icon = get_term_meta( $terms[0]->term_id, 'fa_icon', true ) ?: 'fa-circle';
		return '<i class="fa ' . esc_attr( $fa_icon ) . '"></i>';
	});

	// htpl_content_type_badge_only shortcode
	add_shortcode( 'htpl_content_type_badge_only', function () {
		global $htpl_eresource_post_id;
		$post_id = $htpl_eresource_post_id ?? get_the_ID();
		if ( ! $post_id ) return '';

		$terms = get_the_terms( $post_id, 'content_type' );
		if ( empty( $terms ) || is_wp_error( $terms ) ) return '';

		$badge_color = get_term_meta( $terms[0]->term_id, 'badge_color', true ) ?: '#ccc';

		return '<span class="badge content-type-badge" style="background-color: ' . esc_attr( $badge_color ) . '; color: #fff;">'
			. esc_html( $terms[0]->name ) . '</span>';
	});

	// htpl_content_type_badge (icon + badge) shortcode
	add_shortcode( 'htpl_content_type_badge', function () {
		global $htpl_eresource_post_id;
		$post_id = $htpl_eresource_post_id ?? get_the_ID();
		if ( ! $post_id ) return '';

		$terms = get_the_terms( $post_id, 'content_type' );
		if ( empty( $terms ) || is_wp_error( $terms ) ) return '';

		$term = $terms[0];
		$fa_icon = get_term_meta( $term->term_id, 'fa_icon', true ) ?: 'fa-circle';
		$badge_color = get_term_meta( $term->term_id, 'badge_color', true ) ?: '#ccc';

		return '<div class="content-type-meta">'
			. '<i class="fa ' . esc_attr( $fa_icon ) . '"></i>'
			. '<span class="badge" style="background-color:' . esc_attr( $badge_color ) . '; color: #fff;">'
			. esc_html( $term->name )
			. '</span></div>';
	});
});
