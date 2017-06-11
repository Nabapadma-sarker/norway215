<?php 
/**
* @Theme Name	:	Wallstreet-Pro
* @file         :	single.php
* @package      :	wallstreet-Pro
@author       :	webriti
* @filesource   :	wp-content/themes/wallstreet/single.php
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
		
		<!--Blog Area-->
		<div class="col-md-<?php echo (is_active_sidebar( 'sidebar_primary' )?'8':'12'); ?>">
		<?php
		if(have_posts())
		{
		while(have_posts()) { the_post();
		?>
			<div id="post-<?php the_ID(); ?>" <?php post_class('blog-detail-section'); ?>>
				<?php if(has_post_thumbnail()){ ?>
				<?php $defalt_arg =array('class' => "img-responsive attachment-post-thumbnail"); ?>
				<div class="blog-post-img">
					<?php the_post_thumbnail('', $defalt_arg); ?>
				</div>
				<?php } ?>
				<div class="clear"></div>
				<div class="blog-post-title">
				<?php if($current_options['archive_page_meta_section_settings'] == false) { ?>
					<div class="blog-post-date"><span class="date"><?php echo get_the_date('j'); ?><small><?php echo get_the_date('M'); ?></small></span>
						<span class="comment"><i class="fa fa-comment"></i><?php comments_number('0', '1','%'); ?></span>
					</div>
					<div class="blog-post-title-wrapper">
					<?php } else { ?>
					<div class="blog-post-title-wrapper" style="width:100%;">
					<?php } ?>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Page', 'wallstreet' ), 'after' => '</div>' ) ); ?>
						<?php if($current_options['archive_page_meta_section_settings'] == false) { ?>
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
			
			<!--Blog Author-->
			<div class="blog-author">
				<div class="media">
					<div class="pull-left">
						<?php echo get_avatar( get_the_author_meta( 'ID') , 94); ?>
					</div>
					<div class="media-body">
						<h6><?php the_author(); ?></h6>
						<p> <?php the_author_meta( 'description' ); ?> </p>
						<ul class="blog-author-social">
							<?php				
								$facebook_profile = get_the_author_meta( 'facebook_profile' );
								if ( $facebook_profile && $facebook_profile != '' ) {
									echo '<li class="facebook"><a href="' . esc_url($facebook_profile) . '"><i class="fa fa-facebook"></i></a></li>';
								}
												
								$linkedin_profile = get_the_author_meta( 'linkedin_profile' );
								if ( $linkedin_profile && $linkedin_profile != '' ) {
									   echo '<li class="linkedin"><a href="' . esc_url($linkedin_profile) . '"><i class="fa fa-linkedin"></i></a></li>';
								}
								$twitter_profile = get_the_author_meta( 'twitter_profile' );
								if ( $twitter_profile && $twitter_profile != '' ) {
									echo '<li class="twitter"><a href="' . esc_url($twitter_profile) . '"><i class="fa fa-twitter"></i></a></li>';
								}
								$google_profile = get_the_author_meta( 'google_profile' );
								if ( $google_profile && $google_profile != '' ) {
									echo '<li class="googleplus"><a href="' . esc_url($google_profile) . '" rel="author"><i class="fa fa-google-plus"></i></a></li>';
								}
							?>
						</ul>
					</div>
				</div>	
			</div>
			<!--/Blog Author-->
		<?php } ?>
		<?php comments_template('',true); ?>
		<?php } ?>
		</div>
		<?php get_sidebar(); ?>
		<!--/Blog Area-->
	</div>
</div>
<?php get_footer(); ?>	