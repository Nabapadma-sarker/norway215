<?php
/**Theme Name	: wallstreet-Pro
 * Theme Core Functions and Codes
*/	
	/**Includes reqired resources here**/
	define('WEBRITI_TEMPLATE_DIR_URI',get_template_directory_uri());	
	define('WEBRITI_TEMPLATE_DIR',get_template_directory());
	define('WEBRITI_THEME_FUNCTIONS_PATH',WEBRITI_TEMPLATE_DIR.'/functions');	
	define('WEBRITI_THEME_OPTIONS_PATH',WEBRITI_TEMPLATE_DIR_URI.'/functions/theme_options');
	
	require_once('theme_setup_data.php');
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/menu/default_menu_walker.php'); 
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/menu/webriti_nav_walker.php'); 
	//require( WEBRITI_THEME_FUNCTIONS_PATH . '/commentbox/comment-function.php' ); //for comments
	require_once( WEBRITI_THEME_FUNCTIONS_PATH . '/scripts/scripts.php'); 
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/post-type/custom-post-type.php');
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/meta-box/post-meta.php');
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/taxonomies/taxonomies.php');
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/excerpt/excerpt.php');
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/widget/custom-sidebar.php');
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/font/font.php');
	
	//Customizer 
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/customizer/scroll-to-top.php');
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/customizer/customizer-client.php');
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/customizer/customizer-service.php');
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/customizer/customizer-slider.php');
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/customizer/customizer-copyright.php');
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/customizer/customizer-home.php');
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/customizer/customizer-project.php');
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/customizer/customizer-team.php');
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/customizer/customizer-testimonial.php');
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/customizer/customizer-template.php');
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/customizer/customizer-layout.php');
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/customizer/customizer-typography.php');
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/customizer/customizer-feature.php');
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/customizer/customizer-social.php');
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/customizer/customizer_theme_style.php');
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/customizer/customizer-blog.php');
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/customizer/customizer-post-type-slugs.php');
	require( WEBRITI_TEMPLATE_DIR . '/css/custom_light.php');
	require( WEBRITI_TEMPLATE_DIR . '/css/custom_dark.php');
    require ( WEBRITI_THEME_FUNCTIONS_PATH . '/customizer/single-blog-options.php' ); // adding width slider for site identity 
    //Range Slider Control added in Site Indentity tab 
     require( WEBRITI_TEMPLATE_DIR . '/inc/customizer/customizer-slider/customizer-slider.php');
	
	// Sidebar Widgets
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/widget/wallstreet-latest-widget.php');
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/breadcrumbs/breadcrumbs.php');

	require( WEBRITI_THEME_FUNCTIONS_PATH . '/pagination/webriti_pagination.php'); 
	
	//Webriti shortcodes
	require( WEBRITI_THEME_FUNCTIONS_PATH . '/shortcodes/shortcodes.php' ); //for shortcodes		
	
	//wp title tag starts here
	function webriti_head( $title, $sep )
	{	global $paged, $page;		
		if ( is_feed() )
			return $title;
		// Add the site name.
		$title .= get_bloginfo( 'name' );
		// Add the site description for the home/front page.
		$site_description = get_bloginfo( 'description' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			$title = "$title $sep $site_description";
		// Add a page number if necessary.
		if ( $paged >= 2 || $page >= 2 )
			$title = "$title $sep " . sprintf( _e( 'Page', 'wallstreet' ), max( $paged, $page ) );
		return $title;
	}	
	add_filter( 'wp_title', 'webriti_head', 10, 2);
	
	add_action( 'after_setup_theme', 'webriti_setup' ); 	
	if ( ! function_exists( 'webriti_setup' ) ) :
	function webriti_setup()
	{
		global $content_width;
		if ( ! isset( $content_width ) ) $content_width = 600;//In PX
		
		// Load text domain for translation-ready
		load_theme_textdomain( 'wallstreet', WEBRITI_THEME_FUNCTIONS_PATH . '/lang' );
		
		add_theme_support( 'post-thumbnails' ); //supports featured image
		// This theme uses wp_nav_menu() in one location.
		register_nav_menu( 'primary', __( 'Primary Menu', 'wallstreet' ) ); //Navigation
		// theme support 	
 
		add_theme_support( 'automatic-feed-links');
		add_theme_support( 'title-tag' );
		
		
		// custom header
			$args = array(
			'default-image'		=>  get_template_directory_uri() .'/images/page-header-bg.jpg',
			'width'			=> '1600',
			'height'		=> '400',
			'flex-height'		=> false,
			'flex-width'		=> false,
			'header-text'		=> true,
			'default-text-color'	=> '#143745'
		);
		add_theme_support( 'custom-header', $args );
		
		register_default_headers( array(
			'mypic' => array(
			'url'   => get_template_directory_uri() . '/images/page-header-bg.jpg',
			'thumbnail_url' => get_template_directory_uri() . '/images/page-header-bg.jpg',
			'description'   => _x( 'MyPic', 'header image description', 'wallstreet' )),
		));
		
		// woocommerce support
	
		add_theme_support( 'woocommerce' );
		
		//Added Woocommerce Galllery Support
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );
		
		// setup admin pannel defual data for index page		
		$wallstreet_pro_options=theme_data_setup();
		
	   //Custom logo
        add_theme_support('custom-logo', array(
            'width' => 300,
            'height' => 50,
            'flex-width' => true,
		    'flex-height' => true,
            'header-text' => array('site-title', 'site-description'),
        ));

	}
	endif;
	
if ( ! function_exists( 'busiprof_customizer_preview_scripts' ) ) {
    function busiprof_customizer_preview_scripts() {
        wp_enqueue_script( 'honeypress-customizer-preview', trailingslashit( get_template_directory_uri() ) . 'inc/customizer/customizer-slider/js/customizer-preview.js', array( 'customize-preview', 'jquery' ) );
    }
}
add_action( 'customize_preview_init', 'busiprof_customizer_preview_scripts' ); 

	
	// Read more tag to formatting in blog page 	
	function new_content_more($more)
	{  global $post;
		return '<div class=\"blog-btn-col\"><a href="' . get_permalink() . "#more-{$post->ID}\" class=\"blog-btn\">" .__('Read More','wallstreet')."</a></div>";
		
	}   
	add_filter( 'the_content_more_link', 'new_content_more' );

/* Added By Harish */
	/*===================================================================================
	 * Add Author Links
	 * =================================================================================*/
	function add_to_author_profile( $contactmethods ) {
		$contactmethods['facebook_profile'] = __('Facebook URL','wallstreet');
		$contactmethods['twitter_profile'] = __('Twitter URL','wallstreet');
		$contactmethods['linkedin_profile'] = __('LinkedIn URL','wallstreet');
		return $contactmethods;
	}
	add_filter( 'user_contactmethods', 'add_to_author_profile', 10, 1);
	
	function add_gravatar_class($class) {
		$class = str_replace("class='avatar", "class='img-responsive comment-img img-circle", $class);
		return $class;
	}
	
	add_filter('get_avatar','add_gravatar_class');

function content_width() {
		global $content_width;
		if ( is_page_template( 'blog-fullwidth.php' ) ){		
			$content_width = 950;
		}
	}
		add_action( 'template_redirect', 'content_width' );

function mfields_set_default_object_terms( $post_id, $post ) {
    if ( 'publish' == $post->post_status && $post->post_type == 'wallstreet_portfolio' ) {
        $taxonomies = get_object_taxonomies( $post->post_type,'object' );
        foreach ( $taxonomies as $taxonomy ) {
            $terms = wp_get_post_terms( $post_id, $taxonomy->name );
			$myid = get_option('wallstreet_webriti_default_term_id');
			$a=get_term_by('id',$myid,'portfolio_categories');
            if ( empty( $terms )) {
                wp_set_object_terms( $post_id,$a->slug , $taxonomy->name );
            }
        }
    }
}
add_action( 'save_post', 'mfields_set_default_object_terms', 100, 2 );

function portfolio_excerpt($limit, $post_id) {
  global $post;  
  $save_post = $post;
  $post = get_post($post_id);
  $output = get_the_excerpt();
  $post = $save_post;
  $excerpt = explode(' ', $output, $limit);

      if (count($excerpt) >= $limit) {
          array_pop($excerpt);
          $excerpt = implode(" ", $excerpt) . '...';
      } else {
          $excerpt = implode(" ", $excerpt);
      }

      $excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);
  return $excerpt;
}

add_action('pre_get_posts','wallstreet_taxonomies_paged_function');
function wallstreet_taxonomies_paged_function( $query ) {
  if ( ! is_admin() && is_main_query() && is_tax('portfolio_categories') ) {
  	$current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), theme_data_setup() );
	$tax_page= $current_options['portfolio_numbers_for_templates_category'];
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $query->set( 'posts_per_page', $tax_page );
    $query->set('paged', $paged);
  }
}