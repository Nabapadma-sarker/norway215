<?php 
/**
* Template Name: Page-full-width
* @Theme Name	:	Wallstreet-Pro
* @file         :	page.php
* @package      :	wallstreet-Pro
@author       :	webriti
* @filesource   :	wp-content/themes/wallstreet/page.php
*/
?>
<?php get_header(); 
$wallstreet_pro_options=theme_data_setup();
$current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options );
?>
<!-- Page Title Section -->
<?php get_template_part('index', 'banner'); ?>
<!-- /Page Title Section -->
<!-- Blog & Sidebar Section -->
<div class="container">
	<div class="row">		
		<!--Blog Area-->
		<div class="col-md-12">
		<?php the_post(); ?>
			<div class="blog-detail-section">
				<?php if(has_post_thumbnail()){ ?>
				<?php $defalt_arg =array('class' => "img-responsive"); ?>
				<div class="blog-post-img">
					<?php the_post_thumbnail('', $defalt_arg); ?>
				</div>
				<?php } ?>
				<div class="clear"></div>
				<div class="blog-post-title">
					<?php if($current_options['page_meta_section_settings'] == false) { ?>
					<div class="blog-post-date"><span class="date"><?php echo get_the_date('j'); ?><small><?php echo get_the_date('M'); ?></small></span>
						<span class="comment"><i class="fa fa-comment"></i><?php comments_number('0', '1','%'); ?></span>
					</div>
					<div class="blog-post-title-wrapper">
					<?php } else { ?>
					<div class="blog-post-title-wrapper" style="width:100%;">
					<?php } ?>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<?php the_content(); ?>
						<?php if($current_options['page_meta_section_settings'] == false) { ?>
						<div class="blog-post-meta">
							<a id="blog-author" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><i class="fa fa-user"></i> <?php the_author(); ?></a>
						</div>
						<?php } ?>
					</div>
				</div>	
			</div>
			<?php comments_template('',true); ?>
		</div>		
		<!--/Blog Area-->
</div>
</div>
<?php get_footer(); ?>	