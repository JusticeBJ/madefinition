<?php


///----------=======>>> auto update theme & plugin <<<=======----------
add_filter( 'auto_update_theme', '__return_true' );
add_filter( 'auto_update_plugin', '__return_true' );
add_filter( 'auto_update_core', '__return_true' );



//----------=======>>> Enable support for Post Thumbnails <<<=======----------
add_theme_support( 'post-thumbnails' );
// Declare two sizes.
// set_post_thumbnail_size(672, 372, true);
// add_image_size( 'news-updates', 400, 400, array('center','bottom') );

add_image_size( 'home-hero', 1000, 380, true );
add_image_size( 'home-hero-mobile', 352, 400, true );
add_image_size( 'service-box', 300, 300, true );
add_image_size( 'hero', 800, 320, true );
add_image_size( 'about-hero', 300, 300, true );
add_image_size( 'profile', 343, 457, true );
add_image_size( 'team', 343, 457, true );


//----------=======>>> Generate responsive images! <<<=======----------    
// $image = get_field('image');
// $size = 'full'; // (thumbnail, medium, large, full or custom size)
// if( $image ) {
// 	echo wp_get_attachment_image( $image, $size );
// }


//----------=======>>> Register custom post type <<<=======----------
// add_action( 'init', 'codex_book_init' );

// function codex_book_init() {
// 	$labels = array(
// 		'name'               => _x( 'Books', 'post type general name', 'your-plugin-textdomain' ),
// 		'singular_name'      => _x( 'Book', 'post type singular name', 'your-plugin-textdomain' ),
// 		'menu_name'          => _x( 'Books', 'admin menu', 'your-plugin-textdomain' ),
// 		'name_admin_bar'     => _x( 'Book', 'add new on admin bar', 'your-plugin-textdomain' ),
// 		'add_new'            => _x( 'Add New', 'book', 'your-plugin-textdomain' ),
// 		'add_new_item'       => __( 'Add New Book', 'your-plugin-textdomain' ),
// 		'new_item'           => __( 'New Book', 'your-plugin-textdomain' ),
// 		'edit_item'          => __( 'Edit Book', 'your-plugin-textdomain' ),
// 		'view_item'          => __( 'View Book', 'your-plugin-textdomain' ),
// 		'all_items'          => __( 'All Books', 'your-plugin-textdomain' ),
// 		'search_items'       => __( 'Search Books', 'your-plugin-textdomain' ),
// 		'parent_item_colon'  => __( 'Parent Books:', 'your-plugin-textdomain' ),
// 		'not_found'          => __( 'No books found.', 'your-plugin-textdomain' ),
// 		'not_found_in_trash' => __( 'No books found in Trash.', 'your-plugin-textdomain' )
// 	);
// 	$args = array(
// 		'labels'             => $labels,
// 		'description'        => __( 'Description.', 'your-plugin-textdomain' ),
// 		'public'             => true,
// 		'publicly_queryable' => true,
// 		'show_ui'            => true,
// 		'show_in_menu'       => true,
// 		//'show_in_rest'       => true, //to Enable the Gutenberg Editor for a Custom Post Type -> https://knowthecode.io/how-enable-gutenberg-editor-custom-post-type
// 		'query_var'          => true,
// 		'rewrite'            => array( 'slug' => 'book' ),
// 		'capability_type'    => 'post',
// 		'has_archive'        => true,'hierarchical'       => false,
// 		'menu_position'      => null,
// 		//'taxonomies'          => array( 'category' ),//add category to Custom Post Type
// 		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
// 	);
// 	register_post_type( 'book', $args );
// }



//----------=======>>> Makes the am WordPress Theme available for translation. <<<=======----------
load_theme_textdomain( 'mdf_theme_translate', get_template_directory() . '/languages' );


//----------=======>>> Enqueue stylesheets in our theme <<<=======----------
function mdf_theme_styles() {
	wp_enqueue_style( 'fontawesome', '//use.fontawesome.com/releases/v5.7.2/css/all.css', array(), 'v5.7.2', 'all' );
	$style_ver = filemtime( get_stylesheet_directory() . '/assets/css/style.min.css' );
	wp_enqueue_style( 'main-style', get_stylesheet_directory_uri() . '/assets/css/style.min.css', '', $style_ver );
}
add_action( 'wp_print_styles', 'mdf_theme_styles' );


//----------=======>>> Enqueue JavaScript in our theme <<<=======---------- 
function mdf_theme_scripts() {
	wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', "", '3.3.1', true );
	// wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/plugins-js/jquery.min.js', '', '3.5.1', false);
	$style_ver = filemtime( get_template_directory() . '/assets/js/all.min.js' );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/all.min.js', '', $style_ver, true);

}
add_action( 'wp_enqueue_scripts', 'mdf_theme_scripts' );


//----------=======>>> Register custom navigation walker <<<=======----------
require_once get_template_directory() . '/includes/theme-nav.php';


//----------=======>>> ACF - Options <<<=======----------
if ( function_exists( 'acf_add_options_page' ) ) {
	acf_add_options_page(
		array(
			'page_title' => 'Site Options',
			'menu_title' => 'Site Options',
			'menu_slug'  => 'theme-general-settings',
			'capability' => 'edit_posts',
			'redirect'   => false
		)
	);    
}


//----------=======>>> Add Menus under WP Appearance <<<=======----------
function the_nav_menu(){
	add_theme_support('menus');
	register_nav_menu('primary','Header Navigation');
	register_nav_menu('secondary','Footer Navigation');
}
add_action('init', 'the_nav_menu');


