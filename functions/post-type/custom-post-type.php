<?php
/************* Home slider custom post type ************************/
	
		
function wallstreet_slider_type() {
	$wallstreet_pro_options=theme_data_setup();
	$current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options );
	$wallstreet_slider_slug = $current_options['wallstreet_slider_slug'];
	
	register_post_type( 'wallstreet_slider',
		array(
			'labels' => array(
			'name' => __('Featured Sliders','wallstreet'),
			'add_new' => __('Add New', 'wallstreet'),
			'add_new_item' => __('Add New Slider','wallstreet'),
			'edit_item' => __('Add New','wallstreet'),
			'new_item' => __('New Link','wallstreet'),
			'all_items' => __('All Featured Slides','wallstreet'),
			'view_item' => __('View Link','wallstreet'),
			'search_items' => __('Search Links','wallstreet'),
			'not_found' =>  __('No Links found','wallstreet'),
			'not_found_in_trash' => __('No Links found in Trash','wallstreet'), 
			),
		'supports' => array('title','thumbnail'),
		'show_in' => true,
		'show_in_nav_menus' => false,		
		'public' => true,
		'menu_position' =>20,
		'rewrite' => array('slug' => $wallstreet_slider_slug),
		'public' => true,
		'menu_icon' => WEBRITI_TEMPLATE_DIR_URI . '/images/slider.png',
		)
	);
}
add_action( 'init', 'wallstreet_slider_type' );

/************* Home Service custom post type ***********************/	
function wallstreet_service_type()
{
	$wallstreet_pro_options=theme_data_setup();
	$current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options );	
	$wallstreet_service_slug = $current_options['wallstreet_service_slug'];
	
	register_post_type( 'wallstreet_service',
		array(
			'labels' => array(
			'name' => __('Featured Services','wallstreet'),
			'add_new' => __('Add New', 'wallstreet'),
			'add_new_item' => __('Add New Service','wallstreet'),
			'edit_item' => __('Add New','wallstreet'),
			'new_item' => __('New Link','wallstreet'),
			'all_items' => __('All Services','wallstreet'),
			'view_item' => __('View Link','wallstreet'),
			'search_items' => __('Search Links','wallstreet'),
			'not_found' =>  __('No Links found','wallstreet'),
			'not_found_in_trash' => __('No Links found in Trash','wallstreet'), 
			),
		'supports' => array('title','thumbnail'),
		'show_in' => true,
		'show_in_nav_menus' => false,
		'rewrite' => array('slug' => $wallstreet_service_slug),
		'public' => true,
		'menu_position' =>20,
		'public' => true,
		'menu_icon' => WEBRITI_TEMPLATE_DIR_URI . '/images/service.png',
		)
	);
}
add_action( 'init', 'wallstreet_service_type' );


//************* Home project custom post type ***********************
function wallstreet_portfolio_type()
{	
	$wallstreet_pro_options=theme_data_setup();
	$current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options );	
	$wallstreet_portfolio_slug = $current_options['wallstreet_portfolio_slug'];
	
register_post_type( 'wallstreet_portfolio',
		array(
			'labels' => array(
				'name' => __('Portfolios / Projects','wallstreet'),
				'add_new' => __('Add New', 'wallstreet'),
				'add_new_item' => __('Add New Project','wallstreet'),
				'edit_item' => __('Add New','wallstreet'),
				'new_item' => __('New Link','wallstreet'),
				'all_items' => __('All Portfolios / Projects','wallstreet'),
				'view_item' => __('View Link','wallstreet'),
				'search_items' => __('Search Links','wallstreet'),
				'not_found' =>  __('No Links found','wallstreet'),
				'not_found_in_trash' => __('No Links found in Trash','wallstreet'), 
			),
			'supports' => array('title','editor','thumbnail','excerpt'),
			'show_in' => true,
			'show_in_nav_menus' => false,
			'rewrite' => array('slug' => $wallstreet_portfolio_slug),
			'public' => true,
			'menu_position' =>20,
			'public' => true,
			'menu_icon' => WEBRITI_TEMPLATE_DIR_URI . '/images/portfolio.png',
		)
	);
}
add_action( 'init', 'wallstreet_portfolio_type' );
/*Testimonial*/
function wallstreet_tesimonial_type()
{	
	$wallstreet_pro_options=theme_data_setup();
	$current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options );	
	$wallstreet_testimonial_slug = $current_options['wallstreet_testimonial_slug'];

	register_post_type( 'wallstreet_testi',
		array(
			'labels' => array(
				'name' => __('Testimonials','wallstreet'),
				'add_new' => __('Add New', 'wallstreet'),
				'add_new_item' => __('Add New Testimonial','wallstreet'),
				'edit_item' => __('Add New','wallstreet'),
				'new_item' => __('New Link','wallstreet'),
				'all_items' => __('All Testimonials','wallstreet'),
				'view_item' => __('View Link','wallstreet'),
				'search_items' => __('Search Testimonials','wallstreet'),
				'not_found' =>  __('No Links found','wallstreet'),
				'not_found_in_trash' => __('No Links found in Trash','wallstreet'), 
			),
			'supports' => array('title', 'thumbnail', 'comments'),
			'show_in' => true,
			'show_in_nav_menus' => false,
			'public' => true,
			'menu_position' =>20,
			'rewrite' => array('slug' => $wallstreet_testimonial_slug),
			'public' => true,
			'menu_icon' => WEBRITI_TEMPLATE_DIR_URI . '/images/testimonial.png',
		)
	);
}
add_action( 'init', 'wallstreet_tesimonial_type' );

function wallstreet_team_type()
{	
	$wallstreet_pro_options=theme_data_setup();
	$current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options );	
	$wallstreet_team_slug = $current_options['wallstreet_team_slug'];

	register_post_type( 'wallstreet_team',
		array(
			'labels' => array(
				'name' => __('Our Team','wallstreet'),
				'add_new' => __('Add New', 'wallstreet'),
                'add_new_item' => __('Add New Member','wallstreet'),
				'edit_item' => __('Add New','wallstreet'),
				'new_item' => __('New Link','wallstreet'),
				'all_items' => __('All Teams','wallstreet'),
				'view_item' => __('View Link','wallstreet'),
				'search_items' => __('Search Links','wallstreet'),
				'not_found' =>  __('No Links found','wallstreet'),
				'not_found_in_trash' => __('No Links found in Trash','wallstreet'), 
				),
			'supports' => array('title', 'thumbnail', 'comments'),
			'show_in' => true,
			'show_in_nav_menus' => false,			
			'public' => true,
			'menu_position' => 20,
			'rewrite' => array('slug' => $wallstreet_team_slug),
			'public' => true,
			'menu_icon' => WEBRITI_TEMPLATE_DIR_URI . '/images/team.png',
			)
	);
}
add_action( 'init', 'wallstreet_team_type' );


function wallstreet_client()
{	
	$wallstreet_pro_options=theme_data_setup();
	$current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options );	
	$wallstreet_client_slug = $current_options['wallstreet_client_slug'];

	register_post_type( 'wallstreet_client',
		array(
			'labels' => array(
				'name' => __('Clients','wallstreet'),
				//'singular_name' => 'Featured Services',
				'add_new' => __('Add New', 'wallstreet'),
                'add_new_item' => __('Add New Client','wallstreet'),
				'edit_item' => __('Add New','wallstreet'),
				'new_item' => __('New Link','wallstreet'),
				'all_items' => __('All Clients','wallstreet'),
				'view_item' => __('View Link','wallstreet'),
				'search_items' => __('Search Links','wallstreet'),
				'not_found' =>  __('No Links found','wallstreet'),
				'not_found_in_trash' => __('No Links found in Trash','wallstreet'), 
				),
			'supports' => array('title','thumbnail'),
			'show_in' => true,
			'public' => true,
			'menu_position' => 20,
			'rewrite' => array('slug' => $wallstreet_client_slug),
			'public' => true,
			'menu_icon' => WEBRITI_TEMPLATE_DIR_URI . '/images/satisfied-clients.jpg',
			)
	);
}
add_action( 'init', 'wallstreet_client' );
?>