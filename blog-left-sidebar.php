<?php
/*
Template Name: Blog Left Sidebar
*/
get_header(); 
$wallstreet_pro_options=theme_data_setup();
$current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options );
?>
<!-- Page Title Section -->
<div class="page-mycarousel" style='background: url("<?php echo( get_header_image() ); ?>") repeat scroll center 0 #143745;'>
	<div class="page-title-col">
		<div class="container">
			<div class="row">
				<div class="page-header-title">
					<h1><?php the_title(); ?></h1>		
				</div>
			</div>	
		</div>
		<?php get_template_part('index', 'banner'); ?>
	</div>
</div>
<!-- /Page Title Section -->
<!-- Blog & Sidebar Section -->
<div class="container">
	<div class="row">
		<?php get_sidebar(); ?>
		<div class="col-md-8">
			<?php
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args = array( 'post_type' => 'post','paged'=>$paged);		
			$post_type_data = new WP_Query( $args );
			while($post_type_data->have_posts()){
			$post_type_data->the_post();
			global $more;
			$more = 0;
		?><div id="post-<?php the_ID(); ?>" <?php post_class('blog-section-left'); ?>>
				<?php if(has_post_thumbnail()){ ?>
				<?php $defalt_arg =array('class' => "img-responsive attachment-post-thumbnail"); ?>
				<div class="blog-post-img">
					<?php the_post_thumbnail('', $defalt_arg); ?>
				</div>
				<?php } ?>
				<div class="clear"></div>
				<div class="blog-post-title">
					<?php if($current_options['blog_meta_section_settings'] == false) {?>
					<div class="blog-post-date"><span class="date"><?php echo get_the_date('j'); ?> <small><?php echo get_the_date('M'); ?></small></span>
						<span class="comment"><i class="fa fa-comment"></i><?php comments_number('0', '1','%'); ?></span>
					</div>
					<div class="blog-post-title-wrapper">
					<?php } else { ?>
					<div class="blog-post-title-wrapper" style="width:100%;">
					<?php } ?>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<p><?php //the_content( __( 'Read More' , 'wallstreet' ) );
						echo get_home_blog_excerpt();
						?></p>
						<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Page', 'wallstreet' ), 'after' => '</div>' ) ); ?>
						<?php if($current_options['blog_meta_section_settings'] == false) {?>
						<div class="blog-post-meta">
							<a id="blog-author" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><i class="fa fa-user"></i> <?php the_author(); ?></a>
							<?php 	$tag_list = get_the_tag_list();
							if(!empty($tag_list)) { ?>
							<div class="blog-tags">
								<i class="fa fa-tags"></i><?php the_tags('', ', ', ''); ?>
							</div>
							<?php } ?>
							<?php 	$cat_list = get_the_category_list();
							if(!empty($cat_list)) { ?>
							<div class="blog-tags">
								<i class="fa fa-star"></i><?php the_category(', '); ?>
							</div>
							<?php } ?>
						</div>
						<?php } ?>
					</div>
				</div>	
			</div>
			<?php } ?>
			<?php 				
				$Webriti_pagination = new Webriti_pagination();
				$Webriti_pagination->Webriti_page($paged, $post_type_data);						
			?>
		</div><!--/Blog Area-->
	</div>
</div>
<?php get_footer(); ?>
<!-- /Blog & Sidebar Section -->		