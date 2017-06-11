<?php
/**
* @Theme Name	:	wallstreet-Pro
* @file         :	index-blog.php
* @package      :	wallstreet-Pro
@author       :	webriti
* @filesource   :	wp-content/themes/wallstreet/index-blog.php
*/
?>
<!-- wallstreet Blog Section ---->
<?php $wallstreet_pro_options=theme_data_setup();
	  $current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options ); ?>	
<div class="container home-blog-section">
	<div class="row">
		<div class="section_heading_title">
		<?php if($current_options['home_blog_heading']) { ?>
			<h1><?php echo $current_options['home_blog_heading']; ?></h1>
		<?php } ?>
		<?php if($current_options['home_blog_description']) { ?>
			<div class="pagetitle-separator">
			<div class="pagetitle-separator-border">
				<div class="pagetitle-separator-box"></div>
			</div>
		</div>
			<p><?php echo $current_options['home_blog_description']; ?></p>
		<?php } ?>
		</div>
	</div>
	<div class="row">
		<?php
		$j=1;
		$args = array( 'post_type' => 'post','posts_per_page' =>3,'post__not_in'=>get_option("sticky_posts")); 	
		query_posts( $args );
		if(query_posts( $args ))
		{	while(have_posts()):the_post();
			$recent_expet = get_the_excerpt(); ?>
			<div class="col-md-4 col-sm-6">
				<div class="home-blog-area">
					<div class="home-blog-post-img"><?php
						$defalt_arg =array('class' => "img-responsive");
						if(has_post_thumbnail()): 
						the_post_thumbnail('', $defalt_arg); 
						endif; 
						?>
					</div>
					<div class="home-blog-info">						
						<?php if($current_options['home_meta_section_settings'] == false) { ?>
						<div class="home-blog-post-detail">
							<span class="date"><?php echo get_the_date(); ?> </span>
							<span class="comment"><a href="<?php the_permalink(); ?>"><i class="fa fa-comment"></i><?php comments_number( __( 'No Comments', 'wallstreet' ), __( '1 Comments', 'wallstreet' ), __( '% Comments', 'wallstreet' )); ?></a></span>
						</div>
						<?php } ?>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>		
						<div class="home-blog-description"><p><?php echo get_the_excerpt(); ?></p></div>
						<div class="home-blog-btn"><a href="<?php the_permalink(); ?>"><?php _e('Read More','wallstreet'); ?></a></div>							
					</div>
				</div>
			</div>
			<?php if($j%3==0){ echo "<div class='clearfix'></div>"; } $j++; endwhile; 
			} else  {
			echo "<div class='post_message'>".__('No posts to show','wallstreet')."</div>";
			} ?>
	</div>
</div><!-- /wallstreet Blog Section ---->
