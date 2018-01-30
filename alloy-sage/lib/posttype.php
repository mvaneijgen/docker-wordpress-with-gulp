<?php

namespace Roots\Sage\Posts;

use Roots\Sage\Setup;

/* Register custom post types — MvE --------------*/

// function alloy_post_case_init() {
//   // set up case labels
//   $labels = array(
//     'name' => 'cases',
//     'singular_name' => 'case',
//     'add_new' => 'Add New case',
//     'add_new_item' => 'Add New case',
//     'edit_item' => 'Edit case',
//     'new_item' => 'New case',
//     'all_items' => 'All cases',
//     'view_item' => 'View case',
//     'search_items' => 'Search cases',
//     'not_found' =>  'No cases Found',
//     'not_found_in_trash' => 'No cases found in Trash',
//     'parent_item_colon' => '',
//     'menu_name' => 'Cases',
//   );
//
//   // register post type
//   $args = array(
//     'labels' => $labels,
//     'public' => true,
//     'has_archive' => false,
//     'show_ui' => true,
//     'capability_type' => 'post',
//     'hierarchical' => false,
//     'rewrite' => array(
//       'with_front' => false,
//       'slug' => 'case',
//     ),
//     'query_var' => true,
//     'menu_icon' => 'dashicons-grid-view',
//     'with_front' => false,
//     'supports' => array(
//       'title',
//       'editor',
//       'author',
//       'thumbnail',
//       'excerpt',
//       'trackbacks',
//       'custom-fields',
//       'comments',
//       'revisions',
//       'page-attributes',
//       'post-formats'
//     )
//   );
//   register_post_type( 'case', $args );
//
// }
// add_action( 'init', __NAMESPACE__ . '\\alloy_post_case_init' );

/* END Register custom post types — MvE --------------*/


/* -------------------------- //
// Create custom taxonamy
// Search and replace service
// -------------------------- */

// function alloy_tax_service_init() {
// 	register_taxonomy(
// 		'service', // Code name for the Taxonamy
//     array('case'), // Asign taxonamy to specific post type
// 		array( // Settings for the Taxonamy
// 			'label' => __( 'Service' ),
// 			'rewrite' => array( 'slug' => 'service' ),
// 			'hierarchical' => true, // Make the taxonamy appear as checkbox in single post admin
// 			'capabilities' => array( // What user roles can use the taxonamy
// 				'assign_terms' => 'edit_posts',
// 				'edit_terms' => 'publish_posts'
// 			)
// 		)
// 	);
// }
// add_action( 'init', __NAMESPACE__ . '\\alloy_tax_service_init' );
