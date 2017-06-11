<?php 
/**
* @Theme Name	:	Wallstreet-Pro
* @file         :	archive.php
* @package      :	wallstreet-Pro
@author       :	webriti
* @filesource   :	wp-content/themes/wallstreet/archive.php
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
					<h1>
						<?php if ( is_day() ) : ?>
						<?php  _e( "Daily Archive", 'wallstreet' ); echo (get_the_date()); ?>
						<?php elseif ( is_month() ) : ?>
						<?php  _e( "Monthly Archive", 'wallstreet' ); echo (get_the_date( 'F Y' )); ?>
						<?php elseif ( is_year() ) : ?>
						<?php  _e( "Yearly Archive", 'wallstreet' );  echo (get_the_date( 'Y' )); ?>
						<?php else : ?>
						<?php _e( "Blog Archive", 'wallstreet' ); ?>
						<?php endif; ?>
					</h1>		
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

		<div class="col-md-<?php echo (is_active_sidebar( 'sidebar_primary' )?'8':'12'); ?>">
			<?php
				while ( have_posts() ) : the_post();
				global $more;
				$more = 0;
			?>
			<div id="post-<?php the_ID(); ?>" <?php post_class('blog-section-right'); ?>>
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
						<?php the_content( __( 'Read More' , 'wallstreet' ) ); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Page', 'wallstreet' ), 'after' => '</div>' ) ); 
						if($current_options['archive_page_meta_section_settings'] == false) { ?>
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
			<?php endwhile; ?>				
				<div class="blog-pagination">
				<?php
				// Previous/next page navigation.
				the_posts_pagination( array(
				'prev_text'          => '<i class="fa fa-angle-double-left"></i>',
				'next_text'          => '<i class="fa fa-angle-double-right"></i>',
				) );
				?>
				</div>				
			</div><!--/Blog Area-->
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>
<!-- /Blog & Sidebar Section -->