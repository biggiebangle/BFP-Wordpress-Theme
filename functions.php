<?php 

/*---------------------------------------------------------------------------*/
/* FRONTENT SCRIPT: Enqueue scripts for front end
/*---------------------------------------------------------------------------*/

function register_bfp_scripts()
{
	
	wp_register_script( 'bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array( 'jquery' ) );
	wp_register_script( 'bug-workaround', get_template_directory_uri() . '/bootstrap/js/ie10-viewport-bug-workaround.js', array( 'jquery' ) );
	wp_register_script( 'libraries', get_template_directory_uri() . '/js/libraries.js', array( 'jquery' ) );
	wp_register_script( 'bfp', get_template_directory_uri() . '/js/bfp.js', array( 'jquery' ) );
	wp_register_script( 'bfp-blog', get_template_directory_uri() . '/js/bfp-blog.js', array( 'jquery' ) );
	wp_register_script( 'bfp-shophome', get_template_directory_uri() . '/js/shop.js', array( 'jquery' ) );
		
}

function load_bfp_scripts()
{
	wp_enqueue_script( 'bootstrap' );
	wp_enqueue_script( 'bug-workaround' );
	
}

add_action( 'init', 'register_bfp_scripts' ); 
add_action( 'wp_enqueue_scripts', 'load_bfp_scripts' );

//Add specific javascript to specific page
function bfp_page_specific_scripts() {
	global $post;
	//blog page and single blog post page and search results page
	if (is_single($post->ID) || is_home() || is_search()) {       
	    wp_enqueue_script( 'libraries' );
	    wp_enqueue_script('bfp-blog');
    }	
	if(is_front_page ()){
		wp_enqueue_script( 'libraries' );
		wp_enqueue_script( 'bfp' );
		
	}
	if (is_page_template('page-templates/page-shopHome.php')) {
		wp_enqueue_script( 'bfp-shophome' );
	}
}
add_action('wp_enqueue_scripts', 'bfp_page_specific_scripts');

//Add general style sheet
function bfp_theme_styles() {

  wp_enqueue_style( 'bfp-theme', get_stylesheet_uri() );

}
add_action( 'wp_enqueue_scripts', 'bfp_theme_styles' );


//Add specific CSS files to specific pages 
function register_subpage_stylesheets() {
    wp_register_style( 'blog', get_stylesheet_directory_uri() . '/css/blog.css' );
	wp_register_style( 'political', get_stylesheet_directory_uri() . '/css/political.css' );
}
function load_subpage_stylesheet() {
	global $post;
	//blog page and single blog post page and search results page
    if (is_single($post->ID) || is_home()|| is_search()) {
        wp_enqueue_style( 'blog', get_stylesheet_uri() );
    }
	if (is_page_template('page-templates/page-bfbill-petition.php')) {
		 wp_enqueue_style( 'political', get_stylesheet_uri() );
	}
	
}
add_action( 'init', 'register_subpage_stylesheets' ); 
add_action( 'wp_enqueue_scripts', 'load_subpage_stylesheet' );


/*---------------------------------------------------------------------------*/
/* Register sidebar
/*---------------------------------------------------------------------------*/

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	

/*---------------------------------------------------------------------------*/
/* ADMIN SCRIPT: Enqueue scripts in back-end
/*---------------------------------------------------------------------------*/
//if( !function_exists('bfp_page_admin_enqueue_scripts') ){
   // add_action('admin_enqueue_scripts','bfp_page_admin_enqueue_scripts');
   // function bfp_page_admin_enqueue_scripts(){	
	
		//wp_register_script('meta-box-show-hide', get_template_directory_uri() .'/js/metabox-jquery.js', array('jquery'));
		//wp_enqueue_script('meta-box-show-hide');
	
   // }
//}

add_filter( 'ot_show_pages', '__return_false' );

// REQUIRED: SET 'OT_THEME_MODE' FILTER TO TRUE.
add_filter( 'ot_theme_mode', '__return_true' );

// DISABLE ADD NEW LAYOUT SECTION FROM OPTIONS PAGE.
add_filter( 'ot_show_new_layout', '__return_false' );

// REQUIRED: INCLUDE OPTIONTREE.
require_once get_template_directory() . '/option-tree/ot-loader.php';

// THEME OPTIONS
require_once get_template_directory() . '/inc/theme-options.php';

// META BOXES
require( trailingslashit( get_template_directory() ) . 'inc/meta-boxes.php' );

 
/********************************************
	GET THEME OPTIONS VALUE FUNCTION
*********************************************/
function bfp_get_option( $option, $default = ''){
	
	 $return = function_exists( 'ot_get_option' ) ? ot_get_option( $option, $default ) : $default;
	   if ( $return !== $default ) {
		   
     		 print_r( $return );
   
  	} else {
  
     	 echo '<span class="note note-danger">' . $return . '</span>';
    
  }
}

function bfp_return_get_option( $option, $default = ''){
	
	 $return = function_exists( 'ot_get_option' ) ? ot_get_option( $option, $default ) : $default;
	   if ( $return !== $default ) {
		   
     		 return( $return );
   
  	} else {
  
     	return( $default );
    
  }
}	
/********************************************
	NAVIGATION
*********************************************/

function bfp_register_theme_menu() {
    register_nav_menu( 'primary', 'Main Navigation Menu' );
}
add_action( 'init', 'bfp_register_theme_menu' );


/********************************************
	BLOG FEATURED IMAGE
*********************************************/

add_theme_support( 'post-thumbnails' ); 


/********************************************
	REMOVE HEADER EMOJICONS
*********************************************/

function disable_wp_emojicons() {

  // all actions related to emojis
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );

}
add_action( 'init', 'disable_wp_emojicons' );

/********************************************
	REMOVE HEADER RSS FEEDS
*********************************************/

function wpb_disable_feed() {

	wp_die( __('No feed available,please visit our <a href="'. get_bloginfo('url') .'">homepage</a>!') );

	}
add_action('do_feed', 'wpb_disable_feed', 1);
add_action('do_feed_rdf', 'wpb_disable_feed', 1);
add_action('do_feed_rss', 'wpb_disable_feed', 1);
add_action('do_feed_rss2', 'wpb_disable_feed', 1);
add_action('do_feed_atom', 'wpb_disable_feed', 1);
add_action('do_feed_rss2_comments', 'wpb_disable_feed', 1);
add_action('do_feed_atom_comments', 'wpb_disable_feed', 1);
	
//Remove feed link from header
remove_action( 'wp_head', 'feed_links_extra', 3 ); //Extra feeds such as category feeds
remove_action( 'wp_head', 'feed_links', 2 ); // General feeds: Post and Comment Feed

//Remove generator
remove_action('wp_head', 'wp_generator');

?>
