<?php
function webriti_scripts()
{	
	$wallstreet_pro_options=theme_data_setup();
	$current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options ); 
	wp_enqueue_style('wallstreet-style', get_stylesheet_uri() );	
	$webriti_stylesheet = $current_options['webriti_stylesheet'];

	if($current_options['webriti_stylesheet']=='light.css')
	{
	  $webriti_stylesheet = 'light.css';
	}
	elseif($current_options['webriti_stylesheet']=='default.css')
	{
	$webriti_stylesheet = 'default.css';
	}
	else
	{		
		$hash = substr($current_options['webriti_stylesheet'],0,1);
		if($hash=='#')
		{
			$webriti_stylesheet = 'default.css';
		}
		else
		{
			$webriti_stylesheet = 'light.css';
		}
	}
	wp_enqueue_style('wallstreet-bootstrap', WEBRITI_TEMPLATE_DIR_URI . '/css/bootstrap.css');
	wp_enqueue_style('wallstreet-default', WEBRITI_TEMPLATE_DIR_URI . '/css/'.$webriti_stylesheet);
	wp_enqueue_style('theme-menu', WEBRITI_TEMPLATE_DIR_URI . '/css/theme-menu.css');
	wp_enqueue_style('media-responsive', WEBRITI_TEMPLATE_DIR_URI . '/css/media-responsive.css');	
	wp_enqueue_style('font-awesome-min', WEBRITI_TEMPLATE_DIR_URI . '/css/font-awesome/css/font-awesome.min.css');
	wp_enqueue_style('tool-tip', WEBRITI_TEMPLATE_DIR_URI . '/css/css-tooltips.css');
	
	wp_enqueue_script('menu', WEBRITI_TEMPLATE_DIR_URI .'/js/menu/menu.js',array('jquery'));
	wp_enqueue_script('bootstrap', WEBRITI_TEMPLATE_DIR_URI .'/js/bootstrap.min.js');
	
	// Portfolio js and css
	if(is_page_template('portfolio-2-column.php') || is_page_template('portfolio-3-column.php') || is_page_template('portfolio-4-column.php'))
	{
		wp_enqueue_style('lightbox', WEBRITI_TEMPLATE_DIR_URI . '/css/lightbox.css');	
		wp_enqueue_script('lightbox', WEBRITI_TEMPLATE_DIR_URI .'/js/lightbox/lightbox-2.6.min.js');
	}
	if(is_page_template('single-wallstreet_portfolio.php') || 'wallstreet_portfolio' == get_post_type())
	{
		wp_enqueue_style('lightbox', WEBRITI_TEMPLATE_DIR_URI . '/css/lightbox.css');	
		wp_enqueue_script('lightbox1', WEBRITI_TEMPLATE_DIR_URI .'/js/lightbox/lightbox-2.6.min.js');
		wp_enqueue_script('carouFredSel', WEBRITI_TEMPLATE_DIR_URI .'/js/caroufredsel/jquery.carouFredSel-6.2.1-packed.js');
		wp_enqueue_script('carouFredSel1', WEBRITI_TEMPLATE_DIR_URI .'/js/caroufredsel/caroufredsel-element.js');
	}
	if(is_front_page())
	{
		wp_enqueue_style('lightbox', WEBRITI_TEMPLATE_DIR_URI . '/css/lightbox.css');	
		wp_enqueue_style('flexslider', WEBRITI_TEMPLATE_DIR_URI . '/css/flexslider/flexslider.css');
		wp_enqueue_script('lightbox', WEBRITI_TEMPLATE_DIR_URI .'/js/lightbox/lightbox-2.6.min.js');
		wp_enqueue_script('flexslider', WEBRITI_TEMPLATE_DIR_URI .'/js/flexslider/jquery.flexslider.js');		
		wp_enqueue_script('carouFredSel', WEBRITI_TEMPLATE_DIR_URI .'/js/caroufredsel/jquery.carouFredSel-6.2.1-packed.js');
	}
	require_once('custom_style.php');
}
add_action('wp_enqueue_scripts', 'webriti_scripts');

if ( is_singular() ){ wp_enqueue_script( "comment-reply" );	}

function webriti_custom_enqueue_css()
{	global $pagenow;
	if ( in_array( $pagenow, array( 'post.php', 'post-new.php', 'page-new.php', 'page.php' ) ) ) {
		wp_enqueue_style('meta-box-css', WEBRITI_TEMPLATE_DIR_URI . '/css/meta-box.css');	
	}
	wp_enqueue_style('drag-drop', WEBRITI_TEMPLATE_DIR_URI . '/css/drag-drop.css');
}
add_action( 'admin_print_styles', 'webriti_custom_enqueue_css', 10 );

function wallstreet_shortcode_detect() {
    global $wp_query;	
    $posts = $wp_query->posts;
    $pattern = get_shortcode_regex();
	foreach ($posts as $post){
        if (   preg_match_all( '/'. $pattern .'/s', $post->post_content, $matches ) && array_key_exists( 2, $matches ) && in_array( 'button', $matches[2] ) || in_array( 'row', $matches[2] ) || in_array( 'accordian', $matches[2] ) || in_array( 'tabgroup', $matches[2]) || in_array( 'tabs', $matches[2] ) || in_array( 'alert', $matches[2] ) || in_array( 'dropcap', $matches[2] )  || in_array( 'gridsystemlayout', $matches[2] ) || in_array( 'tooltip', $matches[2] ) || in_array( 'heading', $matches[2] )) {
			wp_enqueue_script('bootstrap', WEBRITI_TEMPLATE_DIR_URI .'/js/bootstrap.min.js',array('jquery'));
			wp_enqueue_script('accordion-tab', WEBRITI_TEMPLATE_DIR_URI .'/js/accordion-tab.js');
			wp_enqueue_script('collapse', WEBRITI_TEMPLATE_DIR_URI .'/js/collapse.js');
            break;
        }
    }
}
add_action( 'wp', 'wallstreet_shortcode_detect' );

function footer_custom_script()
{
	$wallstreet_pro_options=theme_data_setup();
    $current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options ); 

	if($current_options['webriti_stylesheet']=='light.css')
	{
		custom_light();
	}
	elseif($current_options['webriti_stylesheet']=='default.css')
	{
		custom_dark();
	}
	else
	{
		$hash = substr($current_options['webriti_stylesheet'],0,1);
		$color = substr($current_options['webriti_stylesheet'],1);
		
		if($hash=='#')
		{
			custom_dark();
		}
		else
		{
			custom_light();
		}
	}
}
add_action('wp_footer','footer_custom_script');
?>