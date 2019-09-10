<?php

add_action( 'init', 'tdev_showcase_section' );

/**
 * Register a showcase post type.
 */

 if( !function_exists('tdev_showcase_section') ){

		function tdev_showcase_section() {
			$labels = array(
				'name'               => _x( 'Showcases', 'post type general name', 'tdev-custom' ),
				'singular_name'      => _x( 'Showcase', 'post type singular name', 'tdev-custom' ),
				'menu_name'          => _x( 'Showcases', 'admin menu', 'tdev-custom' ),
				'name_admin_bar'     => _x( 'Showcase', 'add new on admin bar', 'tdev-custom' ),
				'add_new'            => _x( 'Add New', 'Showcase', 'tdev-custom' ),
				'add_new_item'       => __( 'Add New Showcase', 'tdev-custom' ),
				'new_item'           => __( 'New Showcase', 'tdev-custom' ),
				'edit_item'          => __( 'Edit Showcase', 'tdev-custom' ),
				'view_item'          => __( 'View Showcase', 'tdev-custom' ),
				'all_items'          => __( 'All Showcases', 'tdev-custom' ),
				'search_items'       => __( 'Search Showcases', 'tdev-custom' ),
				'parent_item_colon'  => __( 'Parent Showcases:', 'tdev-custom' ),
				'not_found'          => __( 'No Showcases found.', 'tdev-custom' ),
				'not_found_in_trash' => __( 'No Showcases found in Trash.', 'tdev-custom' )
			);

			$args = array(
				'labels'             => $labels,
				'description'        => __( 'Description.', 'tdev-custom' ),
				'public'             => true,
				'publicly_queryable' => true,
				'show_ui'            => true,
				'show_in_menu'       => true,
				'query_var'          => true,
				'rewrite'            => array( 'slug' => 'showcase' ),
				'capability_type'    => 'post',
				'has_archive'        => true,
				'hierarchical'       => false,
				'menu_position'      => null,
				'supports'           => array( 'title', 'editor', 'thumbnail', 'post-formats', 'page-attributes' ),
				'taxonomies'         => array( 'tdev_showcase_taxonomies' ),
			);

			register_post_type( 'showcase', $args );
		}

 }

 if( !function_exists( 'tdev_showcase_taxonomies' ) ){

	function tdev_showcase_taxonomies() {

        $labels = array(
            'name'                       => _x( 'Showcase Categories', 'General Name', 'tdev' ),
            'singular_name'              => _x( 'Showcase Category', 'Taxonomy Singular Name', 'tdev' ),
            'menu_name'                  => __( 'Showcase Categories', 'tdev' ),
            'all_items'                  => __( 'All Categories', 'tdev' ),
            'parent_item'                => __( 'Parent Category', 'tdev' ),
            'parent_item_colon'          => __( 'Parent Category:', 'tdev' ),
            'new_item_name'              => __( 'New Category Name', 'tdev' ),
            'add_new_item'               => __( 'New Category', 'tdev' ),
            'edit_item'                  => __( 'Edit Category', 'tdev' ),
            'update_item'                => __( 'Update Category', 'tdev' ),
            'view_item'                  => __( 'View Category', 'tdev' ),
            'separate_items_with_commas' => __( 'Separate Categories with commas', 'tdev' ),
            'add_or_remove_items'        => __( 'Add or remove Categories', 'tdev' ),
            'choose_from_most_used'      => __( 'Choose from the most used', 'tdev' ),
            'popular_items'              => __( 'Popular Categories', 'tdev' ),
            'search_items'               => __( 'Search Categories', 'tdev' ),
            'not_found'                  => __( 'Not Found', 'tdev' ),
            'no_terms'                   => __( 'No Categories', 'tdev' ),
            'items_list'                 => __( 'Categorieslist', 'tdev' ),
            'items_list_navigation'      => __( 'Categories list navigation', 'tdev' ),
        );
        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => true,
            'public'                     => false,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => false,
            'show_tagcloud'              => false,
            'rewrite'                    => false, 
        );

    register_taxonomy( 'tdev_showcase_taxonomies', 'showcase' , $args );

	}

	add_action( 'init', 'tdev_showcase_taxonomies', 0 );

 }