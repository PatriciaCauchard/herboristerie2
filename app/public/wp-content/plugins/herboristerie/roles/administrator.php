<?php

function add_administrator_role_capabilities() {
	$administrator_role = get_role( 'administrator' );

	$capabilities = [
		'edit_plant' => true,
		'read_plant' => true,
		'delete_plant' => true,
		'edit_plants' => true,
		'edit_others_plants' => true,
		'delete_plants' => true,
		'publish_plants' => true,
		'read_private_plants' => true,
		'delete_private_plants' => true,
		'delete_published_plants' => true,
		'delete_others_plants' => true,
		'edit_private_plants' => true,
		'edit_published_plants' => true,
		'create_plants' => true,
		'manage_types' => true,
		'edit_types' => true,
		'delete_types' => true,
		'assign_types' => true,
		'upload_files' => true
	];

	foreach( $capabilities as $cap => $grant ) {
		$administrator_role->add_cap( $cap, $grant );
	}
}

function remove_administrator_role_capabilities() {
	$administrator_role = get_role( 'administrator' );

	$capabilities = [
		'edit_plant',
		'read_plant',
		'delete_plant',
		'edit_plants',
		'edit_others_plants',
		'delete_plants',
		'publish_plants',
		'read_private_plants',
		'delete_private_plants',
		'delete_published_plants',
		'delete_others_plants',
		'edit_private_plants',
		'edit_published_plants',
		'create_plants',
		'manage_types',
		'edit_types',
		'delete_types',
		'assign_types',
		'upload_files'
	];

	foreach( $capabilities as $cap ) {
		$administrator_role->remove_cap( $cap );
	}
}
