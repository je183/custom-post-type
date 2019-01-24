<?php

/**
 * JePena 2015 Custom Post Types
 *
 * @package JePena
 */

/**
* Registers the custom post type
* @uses $wp_post_types Inserts new post type object into the list
*
* @param string  Post type key, must not exceed 20 characters
* @param array|string  See optional args description above.
* @return object|WP_Error the registered post type object, or an error object
*/

function prefix_register_name() {

	$service_labels = array(
		'name'                => __( 'Projects', 'cpt' ),
		'singular_name'       => __( 'Project', 'cpt' ),
		'add_new'             => _x( 'Add New Project', 'cpt', 'cpt' ),
		'add_new_item'        => __( 'Add New Project', 'cpt' ),
		'edit_item'           => __( 'Edit Project', 'cpt' ),
		'new_item'            => __( 'New Project', 'cpt' ),
		'view_item'           => __( 'View Project', 'cpt' ),
		'search_items'        => __( 'Search Projects', 'cpt' ),
		'not_found'           => __( 'No Projects found', 'cpt' ),
		'not_found_in_trash'  => __( 'No Projects found in Trash', 'cpt' ),
		// 'parent_item_colon'   => __( 'Parent Project:', 'cpt-2015' ),
		'menu_name'           => __( 'Projects', 'cpt' ),
	);

	$service_args = array(
		'labels'              => $service_labels,
		'hierarchical'        => TRUE,
		'description'         => 'description',
		'taxonomies'          => array('category', 'post_tag'),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-clipboard',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		// 'has_archive'         => true,
		'has_archive'         => false,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => 'post',
		'supports'            => array(
								'title', 'editor', 'thumbnail', 'revisions', 'page-attributes', 'author'
								),

	);

	register_post_type( 'project', $service_args );


}

add_action( 'init', 'prefix_register_name' );
