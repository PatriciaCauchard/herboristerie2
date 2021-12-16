<?php

function plant_init() {
    $plant = register_post_type(
        'plant',
		[
			'labels'                => [
				'name'                  => __( 'Plants', 'herboristerie' ),
				'singular_name'         => __( 'Plant', 'herboristerie' ),
				'all_items'             => __( 'All Plants', 'herboristerie' ),
				'archives'              => __( 'Plant Archives', 'herboristerie' ),
				'attributes'            => __( 'Plant Attributes', 'herboristerie' ),
				'insert_into_item'      => __( 'Insert into Plant', 'herboristerie' ),
				'uploaded_to_this_item' => __( 'Uploaded to this Plant', 'herboristerie' ),
				'featured_image'        => _x( 'Featured Image', 'plant', 'herboristerie' ),
				'set_featured_image'    => _x( 'Set featured image', 'plant', 'herboristerie' ),
				'remove_featured_image' => _x( 'Remove featured image', 'plant', 'herboristerie' ),
				'use_featured_image'    => _x( 'Use as featured image', 'plant', 'herboristerie' ),
				'filter_items_list'     => __( 'Filter Plants list', 'herboristerie' ),
				'items_list_navigation' => __( 'Plants list navigation', 'herboristerie' ),
				'items_list'            => __( 'Plants list', 'herboristerie' ),
				'new_item'              => __( 'New Plant', 'herboristerie' ),
				'add_new'               => __( 'Add New', 'herboristerie' ),
				'add_new_item'          => __( 'Add New Plant', 'herboristerie' ),
				'edit_item'             => __( 'Edit Plant', 'herboristerie' ),
				'view_item'             => __( 'View Plant', 'herboristerie' ),
				'view_items'            => __( 'View Plants', 'herboristerie' ),
				'search_items'          => __( 'Search Plants', 'herboristerie' ),
				'not_found'             => __( 'No Plants found', 'herboristerie' ),
				'not_found_in_trash'    => __( 'No Plants found in trash', 'herboristerie' ),
				'parent_item_colon'     => __( 'Parent Plant:', 'herboristerie' ),
				'menu_name'             => __( 'Plants', 'herboristerie' ),
			],
			'public'                => true,
			'hierarchical'          => false,
			'show_ui'               => true,
			'show_in_nav_menus'     => true,
			'supports'              => [ 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'comments', 'revisions' ],
			'has_archive'           => true,
			'rewrite'               => false, // pas besoin d'URL front car on utilise WordPress seulement avec son API
			'query_var'             => false,
			'menu_position'         => null,
			'menu_icon'             => 'dashicons-admin-site',
			'show_in_rest'          => true,
			'rest_base'             => 'plants',
			'rest_controller_class' => 'WP_REST_Posts_Controller',
			// 'capability_type'       => [ 'plant', 'plants' ],
			'capabilities'          => [
				'edit_post'              => 'edit_plant',
				'read_post'              => 'read_plant',
				'delete_post'            => 'delete_plant',
				'edit_posts'             => 'edit_plants',
				'edit_others_posts'      => 'edit_others_plants',
				'delete_posts'           => 'delete_plants',
				'publish_posts'          => 'publish_plants',
				'read_private_posts'     => 'read_private_plans',
				'delete_private_posts'   => 'delete_private_plants',
				'delete_published_posts' => 'delete_published_plants',
				'delete_others_posts'    => 'delete_others_plants',
				'edit_private_posts'     => 'edit_private_plants',
				'edit_published_posts'   => 'edit_published_plants',
				'create_posts'           => 'create_plants',
			],
			'map_meta_cap' => true
		]
		);

}

add_action ('init', 'plant_init'); // Le hook init lance la fonction