<?php

// Register Custom Post Type Testimonial
function create_quick_testimonial_cpt() {

	$labels = array(
		'name' => _x( 'Testimonials', 'Post Type General Name', 'quick-testimonials' ),
		'singular_name' => _x( 'Testimonial', 'Post Type Singular Name', 'quick-testimonials' ),
		'menu_name' => _x( 'Testimonials', 'Admin Menu text', 'quick-testimonials' ),
		'name_admin_bar' => _x( 'Testimonial', 'Add New on Toolbar', 'quick-testimonials' ),
		'archives' => __( 'Testimonial Archives', 'quick-testimonials' ),
		'attributes' => __( 'Testimonial Attributes', 'quick-testimonials' ),
		'parent_item_colon' => __( 'Parent Testimonial:', 'quick-testimonials' ),
		'all_items' => __( 'All Testimonials', 'quick-testimonials' ),
		'add_new_item' => __( 'Add New Testimonial', 'quick-testimonials' ),
		'add_new' => __( 'Add New', 'quick-testimonials' ),
		'new_item' => __( 'New Testimonial', 'quick-testimonials' ),
		'edit_item' => __( 'Edit Testimonial', 'quick-testimonials' ),
		'update_item' => __( 'Update Testimonial', 'quick-testimonials' ),
		'view_item' => __( 'View Testimonial', 'quick-testimonials' ),
		'view_items' => __( 'View Testimonials', 'quick-testimonials' ),
		'search_items' => __( 'Search Testimonial', 'quick-testimonials' ),
		'not_found' => __( 'Not found', 'quick-testimonials' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'quick-testimonials' ),
		'featured_image' => __( 'Featured Image', 'quick-testimonials' ),
		'set_featured_image' => __( 'Set featured image', 'quick-testimonials' ),
		'remove_featured_image' => __( 'Remove featured image', 'quick-testimonials' ),
		'use_featured_image' => __( 'Use as featured image', 'quick-testimonials' ),
		'insert_into_item' => __( 'Insert into Testimonial', 'quick-testimonials' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Testimonial', 'quick-testimonials' ),
		'items_list' => __( 'Testimonials list', 'quick-testimonials' ),
		'items_list_navigation' => __( 'Testimonials list navigation', 'quick-testimonials' ),
		'filter_items_list' => __( 'Filter Testimonials list', 'quick-testimonials' ),
	);
	$args = array(
		'label' => __( 'Testimonial', 'quick-testimonials' ),
		'description' => __( 'This is Quick Testimonials settings page. This is the part which will load on frontend', 'quick-testimonials' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-format-quote',
		'supports' => array('title', 'page-attributes'),
		'taxonomies' => array(),
		'public' => false,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 20,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => false,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'rest_base' => 'quick_testimonials',
		'rest_controller_class' => 'Quick_Testimonials',
		'publicly_queryable' => false,
		'capability_type' => 'page',
	);
	register_post_type( 'tr_testimonial', $args );

}
add_action( 'init', 'create_quick_testimonial_cpt', 0 );
