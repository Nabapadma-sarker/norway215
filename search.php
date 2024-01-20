<?php
/*	@Theme Name	:	wallstreet-Pro
* 	@file         :	search.php
* 	@package      :	wallstreet-Pro
* 	@author       :	webriti
* 	@filesource   :	wp-content/themes/wallstreet/search.php
*/
get_header();
$wallstreet_pro_options=theme_data_setup();
$current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options );
?>
<!-- Page Title Section -->
<?php get_template_part('index', 'banner'); ?>
<!-- /Page Title Section -->

<!-- Blog & Sidebar Section -->
<div class="container">
	<div class="row">
		<div class="col-md-<?php echo (is_active_sidebar( 'sidebar_primary' )?'8':'12'); ?>">
			<?php if ( have_posts() ) { ?>
				<h1 class="search_heading">
				<?php printf( __( "Search results for: %s", 'wallstreet' ), '<span>' . get_search_query() . '</span>' ); ?>
				</h1>
			<?php while ( have_posts() ) { the_post();  ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class('blog-section-left'); ?>>
				<?php if(has_post_thumbnail()){ ?>
				<?php $defalt_arg =array('class' => "img-responsive"); ?>
				<div class="blog-post-img">
					<?php the_post_thumbnail('', $defalt_arg); ?>
				</div>
				<?php } ?>
				<div class="clear"></div>
				<div class="blog-post-title">
				<?php if($current_options['archive_page_meta_section_settings'] == false) { ?>
					<div class="blog-post-date"><span class="date"><?php echo get_the_date('j'); ?> <small><?php echo get_the_date('M'); ?></small></span>
						<span class="comment"><i class="fa fa-comment"></i><?php comments_number('0', '1','%'); ?></span>
					</div>
					<div class="blog-post-title-wrapper">
					<?php } else { ?>
					<div class="blog-post-title-wrapper" style="width:100%;">
					<?php } ?>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<?php the_content(); ?>		
						<div class="blog-btn-col"><a href="<?php the_permalink(); ?>" class="blog-btn"><?php _e('Read More', 'wallstreet'); ?></a></div>
						<?php if($current_options['archive_page_meta_section_settings'] == false) { ?>
						<div class="blog-post-meta">
							<a id="blog-author" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><i class="fa fa-user"></i> <?php the_author(); ?></a>
							<?php 	$tag_list = get_the_tag_list();
							if(!empty($tag_list)) { ?>
							<div class="blog-tags">
								<i class="fa fa-tags"></i><?php the_tags('', ', ', ''); ?>
							</div>
							<?php } ?>
						</div>
						<?php } ?>
					</div>
				</div>	
			</div>
			<?php } ?>
			<div class="blog-pagination">
				<?php next_posts_link( __('Previous','wallstreet') ); ?>
				<?php previous_posts_link( __('Next','wallstreet') ); ?>
			</div>
			<?php } else { ?>
				<div class="search_error">
				<div class="search_err_heading"><h2><?php _e( "Nothing Found", 'wallstreet' ); ?></h2> </div>
				<div class="wallstreet_searching">
				<p><?php _e( "Sorry, but nothing matched your search criteria. Please try again with some different keywords.", 'wallstreet' ); ?></p>
				</div>	
					
				</div>
				<?php get_search_form(); ?>
			<?php } ?>	
		</div><!--/Blog Area-->
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>
<!-- /Blog & Sidebar Section -->		