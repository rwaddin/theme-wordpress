<?php
function addin_theme_support()
{
	add_theme_support("custom-logo");
	add_theme_support("post-thumbnails");
}

add_action('after_setup_theme','addin_theme_support');

function addin_add_theme_script(){
	$baseTheme = get_template_directory_uri();
	
	# csss
	wp_enqueue_style( 'bootstrap', "{$baseTheme}/assets/bootstrap/css/bootstrap.min.css" );
	wp_enqueue_style( 'fontawesome', "{$baseTheme}/assets/fontawesome/css/all.min.css" );
	wp_enqueue_style( 'corecomponent', "{$baseTheme}/assets/core/css/components.min.css" );
	wp_enqueue_style( 'corestyle', "{$baseTheme}/assets/core/css/style.min.css" );
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	
	# js
	wp_enqueue_script("jquery","{$baseTheme}/assets/jquery.min.js");
	wp_enqueue_script("bootstrap","{$baseTheme}/assets/bootstrap/js/bootstrap.min.js","jquery");
	wp_enqueue_script("nicescroll","{$baseTheme}/assets/nicescroll/jquery.nicescroll.min.js","jquery");
	wp_enqueue_script("stisla","{$baseTheme}/assets/core/js/stisla.js","jquery");
	wp_enqueue_script("other","{$baseTheme}/assets/core/js/scripts.js","jquery");
}

add_action("wp_enqueue_scripts","addin_add_theme_script");

function addin_menus() {
	
	$locations = array(
		'primary'  => __( 'Sidebar Menu', 'addin' ),
	);
	
	register_nav_menus( $locations );
}

add_action( 'init', 'addin_menus' );

# add menu admin are
function addin_create_post_type() {
	// set up labels
	$labels = array(
 		'name' => 'Blog',
    	'singular_name' => 'Blog',
    	'add_new' => 'Tambah',
    	'add_new_item' => 'Tambah Artikel',
    	'edit_item' => 'Ubah',
    	'new_item' => 'Tambah',
    	'all_items' => 'Semua',
    	'view_item' => 'Lihat',
    	'search_items' => 'Search Post',
    	'not_found' =>  'No Post Found',
    	'not_found_in_trash' => 'No Post found in Trash', 
    	'parent_item_colon' => '',
    	'menu_name' => 'Blog Post',
    );
	
    //register post type
	register_post_type( 'blog', array(
		'labels' => $labels,
		'has_archive' => true,
 		'public' => true,
		'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail','page-attributes' ),
		'taxonomies' => array( 'post_tag', 'category' ),	
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'blog' ),
		"menu_icon"=>"dashicons-rss"
		)
	);

	$labelsProject = array(
 		'name' => 'Portofolio',
    	'singular_name' => 'project',
    	'add_new' => 'Tambah',
    	'add_new_item' => 'Tambah',
    	'edit_item' => 'Ubah',
    	'new_item' => 'Tambah',
    	'all_items' => 'Semua',
    	'view_item' => 'Lihat',
    	'search_items' => 'Search Post',
    	'not_found' =>  'No Post Found',
    	'not_found_in_trash' => 'No Post found in Trash', 
    	'parent_item_colon' => '',
    	'menu_name' => 'Portofolio',
    );
    //register post type
	register_post_type( 'project', array(
		'labels' => $labelsProject,
		'has_archive' => true,
 		'public' => true,
		'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail','page-attributes' ),
		'taxonomies' => array( 'post_tag', 'category' ),	
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'project' ),
		"menu_icon" => "dashicons-portfolio"
		)
	);
}
add_action( 'init', 'addin_create_post_type' );

#style css pagination
function addin_next_posts_link_attributes(){
    return "class='page-link'";
}
add_filter("next_posts_link_attributes", 'addin_next_posts_link_attributes');

function addin_previous_posts_link_attributes(){
    return "class='page-link'";
}
add_filter("previous_posts_link_attributes", 'addin_previous_posts_link_attributes');