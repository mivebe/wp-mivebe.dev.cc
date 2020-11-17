<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 * Portfolio: Custom Post Types
 *
 *
 */
class ELPT_portfolio_Post_Types {
	
	public function __construct()
	{
		$this->register_post_type();
	}



	public function register_post_type()
	{
		$args = array();	

		// Portfolio
		$args['post-type-portfolio'] = array(
			'labels' => array(
				'name' => __( 'Portfolio', 'elemenfolio' ),
				'singular_name' => __( 'Item', 'elemenfolio' ),
				'add_new' => __( 'Add New Item', 'elemenfolio' ),
				'add_new_item' => __( 'Add New Item', 'elemenfolio' ),
				'edit_item' => __( 'Edit Item', 'elemenfolio' ),
				'new_item' => __( 'New Item', 'elemenfolio' ),
				'view_item' => __( 'View Item', 'elemenfolio' ),
				'search_items' => __( 'Search Through portfolio', 'elemenfolio' ),
				'not_found' => __( 'No items found', 'elemenfolio' ),
				'not_found_in_trash' => __( 'No items found in Trash', 'elemenfolio' ),
				'parent_item_colon' => __( 'Parent Item:', 'elemenfolio' ),
				'menu_name' => __( 'Portfolio', 'elemenfolio' ),				
			),		  
			'hierarchical' => false,
	        'description' => __( 'Add a Portfolio Item', 'elemenfolio' ),
	        'menu_icon' =>  'dashicons-images-alt',
	        'public' => true,
	        'publicly_queryable' => true,
			'exclude_from_search' => false,
			'has_archive' => true,
	        'query_var' => true,
			'rewrite' => array( 'slug' => 'portfolio' ),
			'show_in_rest' => true,
            'supports' => array('title','editor', 'thumbnail')
	        // This is where we add taxonomies to our CPT
        	//'taxonomies'          => array( 'category' ),
		);	

		// Register post type: name, arguments
		register_post_type('elemenfolio', $args['post-type-portfolio']);
	}	
}

function ELPT_portfolio_types() { new ELPT_portfolio_Post_Types(); }

add_action( 'init', 'ELPT_portfolio_types' );




/*-----------------------------------------------------------------------------------*/
/*	Creating Custom Taxonomy 
/*-----------------------------------------------------------------------------------*/
// hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'ELPT_create_portfolio_taxonomies', 0 );

// create two taxonomies, genres and writers for the post type "book"
function ELPT_create_portfolio_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Portfolio Categories', 'taxonomy general name', 'elemenfolio' ),
		'singular_name'     => _x( 'Portfolio Category', 'taxonomy singular name', 'elemenfolio' ),
		'search_items'      => __( 'Search Portfolio Categories', 'elemenfolio' ),
		'all_items'         => __( 'All Portfolio Categories', 'elemenfolio' ),
		'parent_item'       => __( 'Parent Portfolio Category', 'elemenfolio' ),
		'parent_item_colon' => __( 'Parent Portfolio Category:', 'elemenfolio' ),
		'edit_item'         => __( 'Edit Portfolio Category', 'elemenfolio' ),
		'update_item'       => __( 'Update Portfolio Category', 'elemenfolio' ),
		'add_new_item'      => __( 'Add New Portfolio Category', 'elemenfolio' ),
		'new_item_name'     => __( 'New Portfolio Category', 'elemenfolio' ),
		'menu_name'         => __( 'Portfolio Categories', 'elemenfolio' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'portfoliocategory' ),
	);

	register_taxonomy( 'elemenfoliocategory', array( 'elemenfolio' ), $args );
}

//Flush rewrite rules after plugin activation
function elpt_activate() {
    if ( ! get_option( 'elpt_flush_rewrite_rules_flag' ) ) {
        add_option( 'elpt_flush_rewrite_rules_flag', true );
    }
}


add_action( 'init', 'elpt_flush_rewrite_rules_maybe', 20 );

function elpt_flush_rewrite_rules_maybe() {
    if ( get_option( 'elpt_flush_rewrite_rules_flag' ) ) {
        flush_rewrite_rules();
        delete_option( 'elpt_flush_rewrite_rules_flag' );
    }
}
