<?php
// register post type footer
add_action( 'init', 'post_type_footer' );
function post_type_footer() {
	$labels = array(
		'name' => _x('Footer', 'post type general name', 'jenna'),
		'singular_name' => _x('Footer', 'post type singular name', 'jenna'),
		'add_new' => _x('Add New Footer', 'book', 'jenna'),
		'add_new_item' => __('Add New Footer', 'jenna'),
		'edit_item' => __('Edit Footer', 'jenna'),
		'new_item' => __('New Footer', 'jenna'),
		'view_item' => __('View Footer', 'jenna'),
		'search_items' => __('Search Footer', 'jenna'),
		'not_found' =>  __('No Footer found', 'jenna'),
		'not_found_in_trash' => __('No Footer found in Trash', 'jenna'), 
		'parent_item_colon' => ''
	);		
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'show_in_nav_menus' => false,
		'show_in_admin_bar' => true,
		'menu_position' => 20,
		'exclude_from_search' => true,
		'supports' => array('title', 'content'),
		'menu_icon' => 'dashicons-editor-insertmore'
	); 		

	register_post_type( 'footer', $args );
}