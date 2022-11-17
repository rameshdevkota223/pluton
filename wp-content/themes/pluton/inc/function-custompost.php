<?php 
/**
 * Register a custom post type called "Slider".
 *
 * @see get_post_type_labels() for label keys.
 */
function wpdocs_codex_homepost_init() {
	$labels = array(
		'name'                  => _x( 'Sliders', 'Post type general name', 'pluton' ),
		'singular_name'         => _x( 'Slider', 'Post type singular name', 'pluton' ),
		'menu_name'             => _x( 'Sliders', 'Admin Menu text', 'pluton' ),
		'name_admin_bar'        => _x( 'Slider', 'Add New on Toolbar', 'pluton' ),
		'add_new'               => __( 'Add New', 'pluton' ),
		'add_new_item'          => __( 'Add New Slider', 'pluton' ),
		'new_item'              => __( 'New Slider', 'pluton' ),
		'edit_item'             => __( 'Edit Slider', 'pluton' ),
		'view_item'             => __( 'View Slider', 'pluton' ),
		'all_items'             => __( 'All Sliders', 'pluton' ),
		'search_items'          => __( 'Search Sliders', 'pluton' ),
		'parent_item_colon'     => __( 'Parent Sliders:', 'pluton' ),
		'not_found'             => __( 'No Sliders found.', 'pluton' ),
		'not_found_in_trash'    => __( 'No Sliders found in Trash.', 'pluton' ),
		'featured_image'        => _x( 'Slider Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'pluton' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'pluton' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'pluton' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'pluton' ),
		'archives'              => _x( 'Slider archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'pluton' ),
		'insert_into_item'      => _x( 'Insert into Slider', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'pluton' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Slider', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'pluton' ),
		'filter_items_list'     => _x( 'Filter Sliders list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'pluton' ),
		'items_list_navigation' => _x( 'Sliders list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'pluton' ),
		'items_list'            => _x( 'Sliders list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'pluton' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'homepost' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	);

	register_post_type( 'homepost', $args );
}

add_action( 'init', 'wpdocs_codex_homepost_init' );
/**
 * Register a custom post type called "servicepost".
 *
 * @see get_post_type_labels() for label keys.
 */
function wpdocs_codex_servicepost_init() {
	$labels = array(
		'name'                  => _x( 'Services', 'Post type general name', 'pluton' ),
		'singular_name'         => _x( 'Service', 'Post type singular name', 'pluton' ),
		'menu_name'             => _x( 'Services', 'Admin Menu text', 'pluton' ),
		'name_admin_bar'        => _x( 'Service', 'Add New on Toolbar', 'pluton' ),
		'add_new'               => __( 'Add New', 'pluton' ),
		'add_new_item'          => __( 'Add New Service', 'pluton' ),
		'new_item'              => __( 'New Service', 'pluton' ),
		'edit_item'             => __( 'Edit Service', 'pluton' ),
		'view_item'             => __( 'View Service', 'pluton' ),
		'all_items'             => __( 'All Services', 'pluton' ),
		'search_items'          => __( 'Search Services', 'pluton' ),
		'parent_item_colon'     => __( 'Parent Services:', 'pluton' ),
		'not_found'             => __( 'No Services found.', 'pluton' ),
		'not_found_in_trash'    => __( 'No Services found in Trash.', 'pluton' ),
		'featured_image'        => _x( 'Service Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'pluton' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'pluton' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'pluton' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'pluton' ),
		'archives'              => _x( 'Service archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'pluton' ),
		'insert_into_item'      => _x( 'Insert into Service', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'pluton' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Service', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'pluton' ),
		'filter_items_list'     => _x( 'Filter Services list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'pluton' ),
		'items_list_navigation' => _x( 'Services list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'pluton' ),
		'items_list'            => _x( 'Services list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'pluton' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'servicepost' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	);

	register_post_type( 'servicepost', $args );
}

add_action( 'init', 'wpdocs_codex_servicepost_init' );

/**
 * Register a custom post type called "portfolio".
 *
 * @see get_post_type_labels() for label keys.
 */
function wpdocs_codex_portfolio_init() {
	$labels = array(
		'name'                  => _x( 'Portfolios', 'Post type general name', 'pluton' ),
		'singular_name'         => _x( 'Portfolio', 'Post type singular name', 'pluton' ),
		'menu_name'             => _x( 'Portfolios', 'Admin Menu text', 'pluton' ),
		'name_admin_bar'        => _x( 'Portfolio', 'Add New on Toolbar', 'pluton' ),
		'add_new'               => __( 'Add New', 'pluton' ),
		'add_new_item'          => __( 'Add New Portfolio', 'pluton' ),
		'new_item'              => __( 'New Portfolio', 'pluton' ),
		'edit_item'             => __( 'Edit Portfolio', 'pluton' ),
		'view_item'             => __( 'View Portfolio', 'pluton' ),
		'all_items'             => __( 'All Portfolios', 'pluton' ),
		'search_items'          => __( 'Search Portfolios', 'pluton' ),
		'parent_item_colon'     => __( 'Parent Portfolios:', 'pluton' ),
		'not_found'             => __( 'No Portfolios found.', 'pluton' ),
		'not_found_in_trash'    => __( 'No Portfolios found in Trash.', 'pluton' ),
		'featured_image'        => _x( 'Portfolio Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'pluton' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'pluton' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'pluton' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'pluton' ),
		'archives'              => _x( 'Portfolio archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'pluton' ),
		'insert_into_item'      => _x( 'Insert into Portfolio', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'pluton' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Portfolio', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'pluton' ),
		'filter_items_list'     => _x( 'Filter Portfolios list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'pluton' ),
		'items_list_navigation' => _x( 'Portfolios list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'pluton' ),
		'items_list'            => _x( 'Portfolios list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'pluton' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'portfolio' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	);

	register_post_type( 'portfolio', $args );
}

add_action( 'init', 'wpdocs_codex_portfolio_init' );


/**
 * Register a custom post type called "About".
 *
 * @see get_post_type_labels() for label keys.
 */
function wpdocs_codex_about_init() {
	$labels = array(
		'name'                  => _x( 'Abouts', 'Post type general name', 'pluton' ),
		'singular_name'         => _x( 'About', 'Post type singular name', 'pluton' ),
		'menu_name'             => _x( 'Abouts', 'Admin Menu text', 'pluton' ),
		'name_admin_bar'        => _x( 'About', 'Add New on Toolbar', 'pluton' ),
		'add_new'               => __( 'Add New', 'pluton' ),
		'add_new_item'          => __( 'Add New About', 'pluton' ),
		'new_item'              => __( 'New About', 'pluton' ),
		'edit_item'             => __( 'Edit About', 'pluton' ),
		'view_item'             => __( 'View About', 'pluton' ),
		'all_items'             => __( 'All Abouts', 'pluton' ),
		'search_items'          => __( 'Search Abouts', 'pluton' ),
		'parent_item_colon'     => __( 'Parent Abouts:', 'pluton' ),
		'not_found'             => __( 'No Abouts found.', 'pluton' ),
		'not_found_in_trash'    => __( 'No Abouts found in Trash.', 'pluton' ),
		'featured_image'        => _x( 'About Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'pluton' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'pluton' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'pluton' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'pluton' ),
		'archives'              => _x( 'About archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'pluton' ),
		'insert_into_item'      => _x( 'Insert into About', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'pluton' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this About', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'pluton' ),
		'filter_items_list'     => _x( 'Filter Abouts list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'pluton' ),
		'items_list_navigation' => _x( 'Abouts list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'pluton' ),
		'items_list'            => _x( 'Abouts list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'pluton' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'about' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	);

	register_post_type( 'about', $args );
}

add_action( 'init', 'wpdocs_codex_about_init' );


/**
 * Register a custom post type called "centertext".
 *
 * @see get_post_type_labels() for label keys.
 */
function wpdocs_codex_centertext_init() {
	$labels = array(
		'name'                  => _x( 'Centertexts', 'Post type general name', 'pluton' ),
		'singular_name'         => _x( 'Centertext', 'Post type singular name', 'pluton' ),
		'menu_name'             => _x( 'Centertexts', 'Admin Menu text', 'pluton' ),
		'name_admin_bar'        => _x( 'Centertext', 'Add New on Toolbar', 'pluton' ),
		'add_new'               => __( 'Add New', 'pluton' ),
		'add_new_item'          => __( 'Add New Centertext', 'pluton' ),
		'new_item'              => __( 'New Centertext', 'pluton' ),
		'edit_item'             => __( 'Edit Centertext', 'pluton' ),
		'view_item'             => __( 'View Centertext', 'pluton' ),
		'all_items'             => __( 'All Centertexts', 'pluton' ),
		'search_items'          => __( 'Search Centertexts', 'pluton' ),
		'parent_item_colon'     => __( 'Parent Centertexts:', 'pluton' ),
		'not_found'             => __( 'No Centertexts found.', 'pluton' ),
		'not_found_in_trash'    => __( 'No Centertexts found in Trash.', 'pluton' ),
		'featured_image'        => _x( 'Centertext Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'pluton' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'pluton' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'pluton' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'pluton' ),
		'archives'              => _x( 'Centertext archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'pluton' ),
		'insert_into_item'      => _x( 'Insert into Centertext', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'pluton' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Centertext', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'pluton' ),
		'filter_items_list'     => _x( 'Filter Centertexts list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'pluton' ),
		'items_list_navigation' => _x( 'Centertexts list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'pluton' ),
		'items_list'            => _x( 'Centertexts list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'pluton' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'centertext' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	);

	register_post_type( 'centertext', $args );
}

add_action( 'init', 'wpdocs_codex_centertext_init' );

/**
 * Register a custom post type called "skill".
 *
 * @see get_post_type_labels() for label keys.
 */
function wpdocs_codex_skill_init() {
	$labels = array(
		'name'                  => _x( 'Skills', 'Post type general name', 'pluton' ),
		'singular_name'         => _x( 'Skill', 'Post type singular name', 'pluton' ),
		'menu_name'             => _x( 'Skills', 'Admin Menu text', 'pluton' ),
		'name_admin_bar'        => _x( 'Skill', 'Add New on Toolbar', 'pluton' ),
		'add_new'               => __( 'Add New', 'pluton' ),
		'add_new_item'          => __( 'Add New Skill', 'pluton' ),
		'new_item'              => __( 'New Skill', 'pluton' ),
		'edit_item'             => __( 'Edit Skill', 'pluton' ),
		'view_item'             => __( 'View Skill', 'pluton' ),
		'all_items'             => __( 'All Skills', 'pluton' ),
		'search_items'          => __( 'Search Skills', 'pluton' ),
		'parent_item_colon'     => __( 'Parent Skills:', 'pluton' ),
		'not_found'             => __( 'No Skills found.', 'pluton' ),
		'not_found_in_trash'    => __( 'No Skills found in Trash.', 'pluton' ),
		'featured_image'        => _x( 'Skill Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'pluton' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'pluton' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'pluton' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'pluton' ),
		'archives'              => _x( 'Skill archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'pluton' ),
		'insert_into_item'      => _x( 'Insert into Skill', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'pluton' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Skill', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'pluton' ),
		'filter_items_list'     => _x( 'Filter Skills list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'pluton' ),
		'items_list_navigation' => _x( 'Skills list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'pluton' ),
		'items_list'            => _x( 'Skills list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'pluton' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'skill' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	);

	register_post_type( 'skill', $args );
}

add_action( 'init', 'wpdocs_codex_skill_init' );



/**
 * Register a custom post type called "hire".
 *
 * @see get_post_type_labels() for label keys.
 */
function wpdocs_codex_hire_init() {
	$labels = array(
		'name'                  => _x( 'Hires', 'Post type general name', 'pluton' ),
		'singular_name'         => _x( 'Hire', 'Post type singular name', 'pluton' ),
		'menu_name'             => _x( 'Hires', 'Admin Menu text', 'pluton' ),
		'name_admin_bar'        => _x( 'Hire', 'Add New on Toolbar', 'pluton' ),
		'add_new'               => __( 'Add New', 'pluton' ),
		'add_new_item'          => __( 'Add New Hire', 'pluton' ),
		'new_item'              => __( 'New Hire', 'pluton' ),
		'edit_item'             => __( 'Edit Hire', 'pluton' ),
		'view_item'             => __( 'View Hire', 'pluton' ),
		'all_items'             => __( 'All Hires', 'pluton' ),
		'search_items'          => __( 'Search Hires', 'pluton' ),
		'parent_item_colon'     => __( 'Parent Hires:', 'pluton' ),
		'not_found'             => __( 'No Hires found.', 'pluton' ),
		'not_found_in_trash'    => __( 'No Hires found in Trash.', 'pluton' ),
		'featured_image'        => _x( 'Hire Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'pluton' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'pluton' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'pluton' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'pluton' ),
		'archives'              => _x( 'Hire archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'pluton' ),
		'insert_into_item'      => _x( 'Insert into Hire', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'pluton' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Hire', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'pluton' ),
		'filter_items_list'     => _x( 'Filter Hires list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'pluton' ),
		'items_list_navigation' => _x( 'Hires list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'pluton' ),
		'items_list'            => _x( 'Hires list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'pluton' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'hire' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	);

	register_post_type( 'hire', $args );
}

add_action( 'init', 'wpdocs_codex_hire_init' );


/**
 * Register a custom post type called "client".
 *
 * @see get_post_type_labels() for label keys.
 */
function wpdocs_codex_client_init() {
	$labels = array(
		'name'                  => _x( 'Clients', 'Post type general name', 'pluton' ),
		'singular_name'         => _x( 'Client', 'Post type singular name', 'pluton' ),
		'menu_name'             => _x( 'Clients', 'Admin Menu text', 'pluton' ),
		'name_admin_bar'        => _x( 'Client', 'Add New on Toolbar', 'pluton' ),
		'add_new'               => __( 'Add New', 'pluton' ),
		'add_new_item'          => __( 'Add New Client', 'pluton' ),
		'new_item'              => __( 'New Client', 'pluton' ),
		'edit_item'             => __( 'Edit Client', 'pluton' ),
		'view_item'             => __( 'View Client', 'pluton' ),
		'all_items'             => __( 'All Clients', 'pluton' ),
		'search_items'          => __( 'Search Clients', 'pluton' ),
		'parent_item_colon'     => __( 'Parent Clients:', 'pluton' ),
		'not_found'             => __( 'No Clients found.', 'pluton' ),
		'not_found_in_trash'    => __( 'No Clients found in Trash.', 'pluton' ),
		'featured_image'        => _x( 'Client Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'pluton' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'pluton' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'pluton' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'pluton' ),
		'archives'              => _x( 'Client archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'pluton' ),
		'insert_into_item'      => _x( 'Insert into Client', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'pluton' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Client', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'pluton' ),
		'filter_items_list'     => _x( 'Filter Clients list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'pluton' ),
		'items_list_navigation' => _x( 'Clients list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'pluton' ),
		'items_list'            => _x( 'Clients list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'pluton' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'client' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	);

	register_post_type( 'client', $args );
}

add_action( 'init', 'wpdocs_codex_client_init' );

/**
 * Register a custom post type called "customer".
 *
 * @see get_post_type_labels() for label keys.
 */
function wpdocs_codex_customer_init() {
	$labels = array(
		'name'                  => _x( 'customers', 'Post type general name', 'pluton' ),
		'singular_name'         => _x( 'customer', 'Post type singular name', 'pluton' ),
		'menu_name'             => _x( 'customers', 'Admin Menu text', 'pluton' ),
		'name_admin_bar'        => _x( 'customer', 'Add New on Toolbar', 'pluton' ),
		'add_new'               => __( 'Add New', 'pluton' ),
		'add_new_item'          => __( 'Add New customer', 'pluton' ),
		'new_item'              => __( 'New customer', 'pluton' ),
		'edit_item'             => __( 'Edit customer', 'pluton' ),
		'view_item'             => __( 'View customer', 'pluton' ),
		'all_items'             => __( 'All customers', 'pluton' ),
		'search_items'          => __( 'Search customers', 'pluton' ),
		'parent_item_colon'     => __( 'Parent customers:', 'pluton' ),
		'not_found'             => __( 'No customers found.', 'pluton' ),
		'not_found_in_trash'    => __( 'No customers found in Trash.', 'pluton' ),
		'featured_image'        => _x( 'customer Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'pluton' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'pluton' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'pluton' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'pluton' ),
		'archives'              => _x( 'customer archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'pluton' ),
		'insert_into_item'      => _x( 'Insert into customer', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'pluton' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this customer', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'pluton' ),
		'filter_items_list'     => _x( 'Filter customers list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'pluton' ),
		'items_list_navigation' => _x( 'customers list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'pluton' ),
		'items_list'            => _x( 'customers list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'pluton' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'customer' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	);

	register_post_type( 'customer', $args );
}

add_action( 'init', 'wpdocs_codex_customer_init' );


/**
 * Register a custom post type called "price".
 *
 * @see get_post_type_labels() for label keys.
 */
function wpdocs_codex_price_init() {
	$labels = array(
		'name'                  => _x( 'Prices', 'Post type general name', 'pluton' ),
		'singular_name'         => _x( 'Price', 'Post type singular name', 'pluton' ),
		'menu_name'             => _x( 'Prices', 'Admin Menu text', 'pluton' ),
		'name_admin_bar'        => _x( 'Price', 'Add New on Toolbar', 'pluton' ),
		'add_new'               => __( 'Add New', 'pluton' ),
		'add_new_item'          => __( 'Add New Price', 'pluton' ),
		'new_item'              => __( 'New Price', 'pluton' ),
		'edit_item'             => __( 'Edit Price', 'pluton' ),
		'view_item'             => __( 'View Price', 'pluton' ),
		'all_items'             => __( 'All Prices', 'pluton' ),
		'search_items'          => __( 'Search Prices', 'pluton' ),
		'parent_item_colon'     => __( 'Parent Prices:', 'pluton' ),
		'not_found'             => __( 'No Prices found.', 'pluton' ),
		'not_found_in_trash'    => __( 'No Prices found in Trash.', 'pluton' ),
		'featured_image'        => _x( 'Price Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'pluton' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'pluton' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'pluton' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'pluton' ),
		'archives'              => _x( 'Price archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'pluton' ),
		'insert_into_item'      => _x( 'Insert into Price', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'pluton' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Price', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'pluton' ),
		'filter_items_list'     => _x( 'Filter Prices list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'pluton' ),
		'items_list_navigation' => _x( 'Prices list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'pluton' ),
		'items_list'            => _x( 'Prices list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'pluton' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'price' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	);

	register_post_type( 'price', $args );
}

add_action( 'init', 'wpdocs_codex_price_init' );






; ?>















