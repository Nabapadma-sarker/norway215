<?php
/*
Template Name: Blog Masonry 2 Column
*/
get_header(); 
$wallstreet_pro_options=theme_data_setup();
$current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options );
?>
<!-- Page Title Section -->
<?php get_template_part('index', 'banner'); ?>
<style>
.blog-post-title-wrapper-full div .blog-btn {
	visibility: hidden;
	border-radius: 3px 3px 3px 3px;
    cursor: pointer;
    display: contents;
    font-family: 'Roboto';
    font-weight: 100;
    font-size: 0;
    line-height: 0;
    margin-top: 0;
    margin-bottom: 0;
    padding: 0;
}
.blog-post-title-wrapper-full div .blog-btn:after {
   content:'<?php echo $current_options['blog_template_read_more'];?>'; 
   visibility: visible;
   background-color: #00c2a9;
   border-radius: 3px 3px 3px 3px;
   cursor: pointer;
   display: inline-block;
   font-family: 'Roboto';
   font-weight: 400;
   font-size: 13px;
   line-height: 20px;
   margin-top: 12px;
   margin-bottom: 35px;
   padding: 9px 18px;
   text-align: center;
   vertical-align: middle;
   white-space: nowrap;
   text-decoration: none;
   float: left;
}
</style>
<div class="container">
<div class="row masonry-2">
	<?php
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args = array( 'post_type' => 'post','paged'=>$paged);		
			$post_type_data = new WP_Query( $args );
			while($post_type_data->have_posts()){
			$post_type_data->the_post();
			global $more;
			$more = 0;
		?>
		<div class="masonry-item">
			<div class="home-blog-area">
				<?php if(has_post_thumbnail()){ ?>
				<?php $defalt_arg =array('class' => "img-responsive attachment-post-thumbnail"); ?>
				<div class="home-blog-post-img">
					<?php the_post_thumbnail('', $defalt_arg); ?>
				</div>
				<?php } ?>
				<div class="home-blog-info">
					<?php if($current_options['blog_meta_section_settings'] == false) {?>
					<div class="home-blog-post-detail">
						<span class="date"><?php echo get_the_date('j'); ?> <?php echo get_the_date(); ?></span>
						<span class="comment"><i class="fa fa-comment"></i> <?php comments_number('0', '1','%'); ?></span>
					</div>
				<?php } ?>
			
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<div class="home-blog-description"><p><?php //the_content( __( 'Read More' , 'wallstreet' ) );
						if($current_options['blog_template_content_excerpt_get_seting']=="content")
						{
						the_content();
						}
						else
						{
						echo get_post_blog_excerpt($current_options['blog_template_content_excerpt_length'],$current_options['blog_template_read_more']);	
						}
						?>
						</p></div>
				</div>
			</div>
		</div>
		<?php } ?>
			
	</div>
	<?php 				
				$Webriti_pagination = new Webriti_pagination();
				$Webriti_pagination->Webriti_page($paged, $post_type_data);					
			?>
</div>
<?php get_footer(); ?>