<?php

require_once 'core/load.php'; 

// seo
add_theme_support( 'title-tag' );

// fix v3 dgamoni
function get_next_posts_link_( $label = null, $max_page = 0 ) {
	global $paged, $wp_query;

	if ( !$max_page )
		$max_page = $wp_query->max_num_pages;

	if ( !$paged )
		$paged = 1;

	$nextpage = intval($paged) + 1;

	if ( null === $label )
		$label = __( 'próximo artigo' );

	if ( !is_single() && ( $nextpage <= $max_page ) ) {
		/**
		 * Filters the anchor tag attributes for the next posts page link.
		 *
		 * @since 2.7.0
		 *
		 * @param string $attributes Attributes for the anchor tag.
		 */
		$attr = apply_filters( 'next_posts_link_attributes', '' );

		return '<a href="' . next_posts( $max_page, false ) . "\" $attr><button type='button' class='btn btn-secondary w-100'>" . preg_replace('/&([^#])(?![a-z]{1,8};)/i', '&#038;$1', $label) . '</button></a>';
	}
}
function get_previous_posts_link_( $label = null ) {
	global $paged;

	if ( null === $label )
		$label = __( 'artigo anterior' );

	if ( !is_single() && $paged > 1 ) {
		/**
		 * Filters the anchor tag attributes for the previous posts page link.
		 *
		 * @since 2.7.0
		 *
		 * @param string $attributes Attributes for the anchor tag.
		 */
		$attr = apply_filters( 'previous_posts_link_attributes', '' );
		return '<a href="' . previous_posts( false ) . "\" $attr><button type='button' class='btn btn-secondary w-100'>". preg_replace( '/&([^#])(?![a-z]{1,8};)/i', '&#038;$1', $label ) .'</button></a>';
	}
}