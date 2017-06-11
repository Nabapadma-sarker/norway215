<?php
/*
* @Theme Name	:	wallstreet-Pro
* @file         :	taxonomies.php
* @package      :	wallstreet-Pro
* @author       :	Hari Maliya
* @license      :	license.txt* 
 * Add custom taxonomies
 * Additional custom taxonomies can be defined here
 * http://codex.wordpress.org/Function_Reference/register_taxonomy
 */
function create_portfolio_taxonomy() {
	
	$wallstreet_pro_options=theme_data_setup();
	$current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options ); 
	$wallstreet_products_category_slug = $current_options['wallstreet_products_category_slug'];

    register_taxonomy('portfolio_categories', 'wallstreet_portfolio',
    array(  'hierarchical' => true,
			'show_in_nav_menus' => true,
			'rewrite' => array('slug' => $wallstreet_products_category_slug ),
            'label' => __('Portfolio Categories','wallstreet'),
            'query_var' => true));
	if((isset($_POST['action'])) && (isset($_POST['taxonomy']))){		
		wp_update_term($_POST['tax_ID'], 'portfolio_categories', array(
		  'name' => $_POST['name'],
		  'slug' => $_POST['slug']
		));
	} 
	else 
	{
	$myterms = get_terms( 'portfolio_categories',array('hide_empty'=>false) );
		if(empty($myterms)){
			$defaultterm=wp_insert_term('ALL','portfolio_categories', array('description'=> 'Default Category','slug' => 'ALL'));
			update_option('wallstreet_webriti_default_term_id', $defaultterm['term_id']);
		}
	}
	//update category
	if(isset($_POST['action']) && isset($_POST['taxonomy']) )
	{	wp_update_term($_POST['tag_ID'], 'portfolio_categories', array(
		  'name' => $_POST['name'],
		  'slug' => $_POST['slug'],
		  'description' =>$_POST['description']
		));
	}
	// Delete default category
	if(isset($_POST['action']) && isset($_POST['tag_ID']) )
	{	if(($_POST['tag_ID'] == $defualt_tex_id) &&$_POST['action']	 =="delete-tag")
		{	
			delete_option('custom_texo_appointment'); 
		} 
	}	
	
}
add_action( 'init', 'create_portfolio_taxonomy' );
?>