<?php
//code to change length of Home service section excerpt
	function get_sidebar_excerpt(){
		global $post;
		$excerpt = get_the_content();
		$excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
		$excerpt = strip_shortcodes($excerpt);		
		$original_len = strlen($excerpt);
		$excerpt = substr($excerpt, 0, 45);		
		$len=strlen($excerpt);
		if($original_len>45)
		   $excerpt = $excerpt;
		return $excerpt;
	}
	function get_comment_sidebr($excerpt){		
		$excerpt = $excerpt;
		$excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
		$excerpt = strip_shortcodes($excerpt);		
		$original_len = strlen($excerpt);
		$excerpt = substr($excerpt, 0, 45);		
		return $excerpt;
	}
	
	function get_home_blog_excerpt($length,$read)
	{
		global $post;
		$excerpt = get_the_content();
		$excerpt = strip_tags(preg_replace(" (\[.*?\])",'',$excerpt));
		$excerpt = strip_shortcodes($excerpt);		
		$original_len = strlen($excerpt);
		$excerpt = substr($excerpt, 0, $length);		
		$len=strlen($excerpt);	 
		if($original_len>$length)
		   $excerpt = $excerpt.'<div class="blog-btn-col"><a href="'.get_the_permalink().'" class="blog-btn">'.__($read,'wallstreet').'</a></div>';
		return $excerpt;
	}

	function get_post_blog_excerpt($length,$read)
	{
		$wallstreet_pro_options=theme_data_setup();
		$current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options );
	global $post;
		$excerpt = get_the_excerpt();
		$excerpt = strip_tags(preg_replace(" (\[.*?\])",'',$excerpt));
		$excerpt = strip_shortcodes($excerpt);		
		$original_len = strlen($excerpt);
		$excerpt = substr($excerpt, 0, $length);		
		$len=strlen($excerpt);	 
		
		if($original_len>$length){
			if($current_options['blog_template_read_more'] != null) {
		   	$excerpt = $excerpt.'<div class="blog-btn-col"><a href="'.get_the_permalink().'" class="blog-btn">'.__($read,'wallstreet').'</a></div>';
			}else{
				$excerpt = $excerpt;
			}
		}
		return $excerpt;	
	}

	function get_only_post_blog_excerpt($length)
	{
	global $post;
		$excerpt = get_the_excerpt();
		$excerpt = strip_tags(preg_replace(" (\[.*?\])",'',$excerpt));
		$excerpt = strip_shortcodes($excerpt);		
		$original_len = strlen($excerpt);
		$excerpt = substr($excerpt, 0, $length);		
		return $excerpt;	
	}
?>
