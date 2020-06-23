<?php 

// Leaving comments before this php block = image bug

// This file contains the backend code for the creation of the "Gym Classes" plugin
// The Front End code to display the classes is located at Queries.php


/*
  Plugin Name: Gym Fitness - Post Types
  Plugin URI: 
  Description: Adds a new Post Type (Classes) into WordPress
  Version: 1.0
  Author:  Tou Toua Yang
  Author URI:
  Text Domain: Gym
*/

if(!defined('ABSPATH')) die();


// Register new Custom Post Type (Classes)
function gymfitness_class_post_type() {

	// WordPress admin dashboard user interface
	$labels = array(
		'name'                  => _x( 'Classes', 'Post Type General Name', 'gymfitness' ),
		'singular_name'         => _x( 'Class', 'Post Type Singular Name', 'gymfitness' ),
		'menu_name'             => __( 'Classes', 'gymfitness' ),
		'name_admin_bar'        => __( 'Classes', 'gymfitness' ),
		'archives'              => __( 'Archive', 'gymfitness' ),
		'attributes'            => __( 'Attributes', 'gymfitness' ),
		'parent_item_colon'     => __( 'Parent Class', 'gymfitness' ),
		'all_items'             => __( 'All Classes', 'gymfitness' ),
		'add_new_item'          => __( 'Add Class', 'gymfitness' ),
		'add_new'               => __( 'Add Class', 'gymfitness' ),
		'new_item'              => __( 'New Class', 'gymfitness' ),
		'edit_item'             => __( 'Edit Class', 'gymfitness' ),
		'update_item'           => __( 'Update Class', 'gymfitness' ),
		'view_item'             => __( 'View Class', 'gymfitness' ),
		'view_items'            => __( 'View Class', 'gymfitness' ),
		'search_items'          => __( 'Search Class', 'gymfitness' ),
		'not_found'             => __( 'Not found', 'gymfitness' ),
		'not_found_in_trash'    => __( 'Not found in trash', 'gymfitness' ),
		'featured_image'        => __( 'Featured Image', 'gymfitness' ),
		'set_featured_image'    => __( 'Save Featured Image', 'gymfitness' ),
		'remove_featured_image' => __( 'Remove Featured Image', 'gymfitness' ),
		'use_featured_image'    => __( 'Use as Featured Image', 'gymfitness' ),
		'insert_into_item'      => __( 'Insert in Class', 'gymfitness' ),
		'uploaded_to_this_item' => __( 'Add in Class', 'gymfitness' ),
		'items_list'            => __( 'Classes List', 'gymfitness' ),
		'items_list_navigation' => __( 'Navigate to Classes', 'gymfitness' ),
		'filter_items_list'     => __( 'Filter Classes', 'gymfitness' ),
	);
	$args = array(
		'label'                 => __( 'Class', 'gymfitness' ),
		'description'           => __( 'Classes for GymFitness Website', 'gymfitness' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ), // gutenberg title + editor + featured img
		'hierarchical'          => false, // False = posts - no child posts
		'public'                => true, // Display contents in the user interface
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6, // Dashboard=0, post=5, media=10
        'menu_icon'             => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true, // Display custom post types in admin bar
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	// Give a name for the post type + pass arguments
	register_post_type( 'gymfitness_classes', $args );

}
// Hook for Function gymfitness_class_post_type()
add_action( 'init', 'gymfitness_class_post_type', 0 );

//  ---

// Register new post type for Instructors
// After adding this code, Instructors Section will be displayed on WP dashboard
function gymfitness_instructors() {

	$labels = array(
		'name'                  => _x( 'Instructors', 'Post Type General Name', 'gymfitness' ),
		'singular_name'         => _x( 'Instructor', 'Post Type Singular Name', 'gymfitness' ),
		'menu_name'             => __( 'Instructors', 'gymfitness' ),
		'name_admin_bar'        => __( 'Instructor', 'gymfitness' ),
		'archives'              => __( 'Archive', 'gymfitness' ),
		'attributes'            => __( 'Attributes', 'gymfitness' ),
		'parent_item_colon'     => __( 'Parent Instructor', 'gymfitness' ),
		'all_items'             => __( 'All Instructors', 'gymfitness' ),
		'add_new_item'          => __( 'Add Instructor', 'gymfitness' ),
		'add_new'               => __( 'Add Instructor', 'gymfitness' ),
		'new_item'              => __( 'New Instructor', 'gymfitness' ),
		'edit_item'             => __( 'Edit Instructor', 'gymfitness' ),
		'update_item'           => __( 'Update Instructor', 'gymfitness' ),
		'view_item'             => __( 'View Instructor', 'gymfitness' ),
		'view_items'            => __( 'View Instructors', 'gymfitness' ),
		'search_items'          => __( 'Search Instructor', 'gymfitness' ),
		'not_found'             => __( 'Not Found', 'gymfitness' ),
		'not_found_in_trash'    => __( 'Not Found in Trash', 'gymfitness' ),
		'featured_image'        => __( 'Featured Image', 'gymfitness' ),
		'set_featured_image'    => __( 'Save Featured Image', 'gymfitness' ),
		'remove_featured_image' => __( 'Remove Featured Image', 'gymfitness' ),
		'use_featured_image'    => __( 'Use as Featured Image', 'gymfitness' ),
		'insert_into_item'      => __( 'Insert in Instructor', 'gymfitness' ),
		'uploaded_to_this_item' => __( 'Add in Instructor', 'gymfitness' ),
		'items_list'            => __( 'List Instructors', 'gymfitness' ),
		'items_list_navigation' => __( 'Navigate to Instructors', 'gymfitness' ),
		'filter_items_list'     => __( 'Filter Instructors', 'gymfitness' ),
	);
	$args = array(
		'label'                 => __( 'Instructors', 'gymfitness' ),
		'description'           => __( 'Instructors for website', 'gymfitness' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 7,
        'menu_icon'             => 'dashicons-admin-users',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'instructors', $args );

}
add_action( 'init', 'gymfitness_instructors', 0 );

// ---

// Register new post type for Testimonial
// After adding this code, Testimonial Section will be displayed on WP dashboard
function gymfitness_testimonials() {

	$labels = array(
		'name'                  => _x( 'Testimonials', 'Post Type General Name', 'gymfitness' ),
		'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'gymfitness' ),
		'menu_name'             => __( 'Testimonials', 'gymfitness' ),
		'name_admin_bar'        => __( 'Testimonial', 'gymfitness' ),
		'archives'              => __( 'Archive', 'gymfitness' ),
		'attributes'            => __( 'Attributes', 'gymfitness' ),
		'parent_item_colon'     => __( 'Parent Testimonial ', 'gymfitness' ),
		'all_items'             => __( 'All Testimonials', 'gymfitness' ),
		'add_new_item'          => __( 'Add Testimonial', 'gymfitness' ),
		'add_new'               => __( 'Add Testimonial', 'gymfitness' ),
		'new_item'              => __( 'New Testimonial', 'gymfitness' ),
		'edit_item'             => __( 'Edit Testimonial', 'gymfitness' ),
		'update_item'           => __( 'Update Testimonial', 'gymfitness' ),
		'view_item'             => __( 'View Testimonial', 'gymfitness' ),
		'view_items'            => __( 'View Testimonials', 'gymfitness' ),
		'search_items'          => __( 'Search Testimonial', 'gymfitness' ),
		'not_found'             => __( 'Not found in Trash', 'gymfitness' ),
		'featured_image'        => __( 'Featured Image', 'gymfitness' ),
		'set_featured_image'    => __( 'Save Featured Image', 'gymfitness' ),
		'remove_featured_image' => __( 'Remove Featured Image', 'gymfitness' ),
		'use_featured_image'    => __( 'Use as Featured Image', 'gymfitness' ),
		'insert_into_item'      => __( 'Insert Into Testimonial', 'gymfitness' ),
		'uploaded_to_this_item' => __( 'Add At Testimonial', 'gymfitness' ),
		'items_list'            => __( 'Testimonial List', 'gymfitness' ),
		'items_list_navigation' => __( 'Navigate toTestimonials', 'gymfitness' ),
		'filter_items_list'     => __( 'Filter Testimonials', 'gymfitness' ),
	);
	$args = array(
		'label'                 => __( 'Testimonials', 'gymfitness' ),
		'description'           => __( 'Testimonials para el Sitio Web', 'gymfitness' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 8,
        'menu_icon'             => 'dashicons-editor-quote',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'testimonials', $args );

}
add_action( 'init', 'gymfitness_testimonials', 0 );
