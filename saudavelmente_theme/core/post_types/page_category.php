<?php
if ( ! function_exists( 'taxpage_category' ) ) {

// Register Custom Taxonomy
function taxpage_category() {

	$labels = array(
		'name'                       => _x( 'Page_category', 'Page_category', 'escolasaudavelmente' ),
		'singular_name'              => _x( 'page_category', 'Page_category', 'escolasaudavelmente' ),
		'menu_name'                  => __( 'Category', 'escolasaudavelmente' ),
		'all_items'                  => __( 'All Items', 'escolasaudavelmente' ),
		'parent_item'                => __( 'Parent Item', 'escolasaudavelmente' ),
		'parent_item_colon'          => __( 'Parent Item:', 'escolasaudavelmente' ),
		'new_item_name'              => __( 'New Item Name', 'escolasaudavelmente' ),
		'add_new_item'               => __( 'Add New Item', 'escolasaudavelmente' ),
		'edit_item'                  => __( 'Edit Item', 'escolasaudavelmente' ),
		'update_item'                => __( 'Update Item', 'escolasaudavelmente' ),
		'view_item'                  => __( 'View Item', 'escolasaudavelmente' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'escolasaudavelmente' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'escolasaudavelmente' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'escolasaudavelmente' ),
		'popular_items'              => __( 'Popular Items', 'escolasaudavelmente' ),
		'search_items'               => __( 'Search Items', 'escolasaudavelmente' ),
		'not_found'                  => __( 'Not Found', 'escolasaudavelmente' ),
		'no_terms'                   => __( 'No items', 'escolasaudavelmente' ),
		'items_list'                 => __( 'Items list', 'escolasaudavelmente' ),
		'items_list_navigation'      => __( 'Items list navigation', 'escolasaudavelmente' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'page_category', array( 'page' ), $args );

}
add_action( 'init', 'taxpage_category', 0 );

} 