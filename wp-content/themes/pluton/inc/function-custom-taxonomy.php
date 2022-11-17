<?php 

/**
 * Create two taxonomies, subject for the post type "portfolio".
 *
 * @see register_post_type() for registering custom post types.
 */
function wpdocs_create_portfolio_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Works', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Work', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search Works', 'textdomain' ),
		'all_items'         => __( 'All Works', 'textdomain' ),
		'parent_item'       => __( 'Parent Work', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Work:', 'textdomain' ),
		'edit_item'         => __( 'Edit Work', 'textdomain' ),
		'update_item'       => __( 'Update Work', 'textdomain' ),
		'add_new_item'      => __( 'Add New Work', 'textdomain' ),
		'new_item_name'     => __( 'New Work Name', 'textdomain' ),
		'menu_name'         => __( 'Work', 'textdomain' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'subject' ),
	);

	register_taxonomy( 'subject', array( 'portfolio','' ), $args );

	unset( $args );
	unset( $labels );
}
add_action( 'init', 'wpdocs_create_portfolio_taxonomies', 0 );
; ?>