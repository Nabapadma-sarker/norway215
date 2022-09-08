<?php
/*
Template Name: Blog List View Sidebar
*/
get_header(); 
$wallstreet_pro_options=theme_data_setup();
$current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options );
?>
<!-- Page Title Section -->
<?php get_template_part('index', 'banner'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<?php
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args = array( 'post_type' => 'post','paged'=>$paged);		
			$post_type_data = new WP_Query( $args );
			while($post_type_data->have_posts()){
			$post_type_data->the_post();
			global $more;
			$more = 0;
		?>
			<div id="post-<?php the_ID(); ?>" <?php post_class('blog-section-left blog-list-view'); ?>>
				<div class="media">
					<?php if(has_post_thumbnail()){ ?>
				<?php $defalt_arg =array('class' => "img-responsive attachment-post-thumbnail"); ?>
				<div class="blog-post-img">
					<a href="<?php the_permalink();?>"><?php the_post_thumbnail('', $defalt_arg); ?></a>
				</div>
				<?php } ?>
					<div class="blog-post-title media-body">
						<?php if($current_options['blog_meta_section_settings'] == false) {?>
						<div class="blog-post-date"><span class="date"><?php echo get_the_date(); ?></span>
              <span class="comment"><i class="fa fa-comment"></i><?php comments_number('0', '1','%'); ?></span>
            </div> <?php } ?>
						<div class="blog-post-title-wrapper">
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<?php //the_content( __( 'Read More' , 'wallstreet' ) );
						if($current_options['blog_template_content_excerpt_get_seting']=="content")
						{
						the_content('');
						}
						else
						{
						echo '<p>';
						echo  get_only_post_blog_excerpt($current_options['blog_template_content_excerpt_length']);	
						echo '</p>';	
						}
						if(($current_options['blog_template_read_more'] != null) && ($current_options['blog_template_content_excerpt_get_seting']=="excert")){?>		
						<div class="blog-btn-col"><a href="<?php the_permalink();?>" class="blog-btn"><?php echo $current_options['blog_template_read_more'];?></a>
						</div>	
						<?php }
						 if($current_options['blog_meta_section_settings'] == false) {?>
							<div class="blog-post-detail">
								<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><i class="fa fa-user"></i> <?php the_author(); ?></a>
								<?php if(has_tag()):?>
								<div class="blog-tags">
									<i class="fa fa-tags"></i><?php the_tags('', ', ', ''); ?>
								</div>
							<?php endif;?>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
<?php } ?>
<?php 				
				$Webriti_pagination = new Webriti_pagination();
				$Webriti_pagination->Webriti_page($paged, $post_type_data);					
			?>
		
		</div>
		<!--/Blog Area-->	


		<!--Sidebar Area-->
		<?php get_sidebar(); ?>
		<!--Sidebar Area-->
		
	</div>
</div>
<?php get_footer(); ?>
<!-- /Blog & Sidebar Section -->		