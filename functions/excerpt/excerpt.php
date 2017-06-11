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
	
	function get_home_blog_excerpt()
	{
		global $post;
		$excerpt = get_the_content();
		$excerpt = strip_tags(preg_replace(" (\[.*?\])",'',$excerpt));
		$excerpt = strip_shortcodes($excerpt);		
		$original_len = strlen($excerpt);
		$excerpt = substr($excerpt, 0, 275);		
		$len=strlen($excerpt);	 
		if($original_len>275)
		   $excerpt = $excerpt.'<div class="blog-btn-col"><a href="'.get_the_permalink().'" class="blog-btn">'.__('Read More','wallstreet').'</a></div>';
		return $excerpt;
	}
?>
