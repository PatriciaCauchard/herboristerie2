<?php

/**
 * Registers the `type` taxonomy,
 * for use with 'plant'.
 */
function type_init() {
	register_taxonomy( 'type', [ 'plant' ], [
		'hierarchical'          => true,
		'public'                => true,
		'show_in_nav_menus'     => true,
		'show_ui'               => true,
		'show_admin_column'     => false,
		'query_var'             => false,
		'rewrite'               => true,
		'has_archive'			=> true,
		'capabilities'          => [
			'manage_terms' => 'manage_types',
			'edit_terms'   => 'edit_types',
			'delete_terms' => 'delete_types',
			'assign_terms' => 'assign_types',
		],
		'labels'                => [
			'name'                       => __( 'Types', 'herboristerie' ),
			'singular_name'              => _x( 'Type', 'taxonomy general name', 'herboristerie' ),
			'search_items'               => __( 'Search Types', 'herboristerie' ),
			'popular_items'              => __( 'Popular Types', 'herboristerie' ),
			'all_items'                  => __( 'All Types', 'herboristerie' ),
			'parent_item'                => __( 'Parent Type', 'herboristerie' ),
			'parent_item_colon'          => __( 'Parent Type:', 'herboristerie' ),
			'edit_item'                  => __( 'Edit Type', 'herboristerie' ),
			'update_item'                => __( 'Update Type', 'herboristerie' ),
			'view_item'                  => __( 'View Type', 'herboristerie' ),
			'add_new_item'               => __( 'Add New Type', 'herboristerie' ),
			'new_item_name'              => __( 'New Type', 'herboristerie' ),
			'separate_items_with_commas' => __( 'Separate Types with commas', 'herboristerie' ),
			'add_or_remove_items'        => __( 'Add or remove Types', 'herboristerie' ),
			'choose_from_most_used'      => __( 'Choose from the most used Types', 'herboristerie' ),
			'not_found'                  => __( 'No Types found.', 'herboristerie' ),
			'no_terms'                   => __( 'No Types', 'herboristerie' ),
			'menu_name'                  => __( 'Types', 'herboristerie' ),
			'items_list_navigation'      => __( 'Types list navigation', 'herboristerie' ),
			'items_list'                 => __( 'Types list', 'herboristerie' ),
			'most_used'                  => _x( 'Most Used', 'type', 'herboristerie' ),
			'back_to_items'              => __( '&larr; Back to Types', 'herboristerie' ),
		],
		'show_in_rest'          => true,
		'rest_base'             => 'plants/types',
		'rest_controller_class' => 'WP_REST_Terms_Controller',
	] );

}

add_action( 'init', 'type_init' );