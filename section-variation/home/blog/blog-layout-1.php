<?php 
$wallstreet_pro_options=theme_data_setup();
$current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options ); 
$post_per_page=$current_options['home_blog_counts'];?>	
<div class="container home-blog-section">
	<?php if(!empty($current_options['home_blog_heading']) || (!empty($current_options['home_blog_description']))):?>
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
<?php endif;?>
	<div class="row">
		<?php
		$j=1;

		$args = array( 'post_type' => 'post','posts_per_page' =>$post_per_page,'post__not_in'=>get_option("sticky_posts")); 	
		query_posts( $args );
		if(query_posts( $args ))
		{	while(have_posts()):the_post();
			$recent_expet = get_the_excerpt(); ?>
			<div class="col-md-4 col-sm-4">
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
							<span class="comment"><a href="<?php the_permalink(); ?>"><i class="fa fa-comment"></i><?php comments_number( __( 'No Comments', 'wallstreet' ), __( '1 Comment', 'wallstreet' ), __( '% Comments', 'wallstreet' )); ?></a></span>
						</div>
						<?php } ?>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>		
						<div class="home-blog-description"><p><?php echo get_the_excerpt(); ?></p></div>
						<div class="home-blog-btn"><a href="<?php the_permalink(); ?>"><?php _e('Read More','wallstreet'); ?></a></div>							
					</div>
				</div>
			</div>
			<?php endwhile;
			
			} else  {
			echo "<div class='post_message'>".__('No posts to show','wallstreet')."</div>";
			} ?>
			
		
			
	</div>
	<?php
	if($current_options['view_all_posts_btn_enabled'] == true){
		if($current_options['view_all_posts_text']){?>
			<div class ="row">
				<div class="proejct-btn">
					<a href="<?php if($current_options['all_posts_link'] !='') { echo $current_options['all_posts_link']; } ?>" <?php if($current_options['view_all_lnik_target'] ==true) { echo "target='_blank'"; } ?>> <?php echo $current_options['view_all_posts_text']; ?> </a>
				</div>
			</div>
			<?php
		}}?>
</div><!-- /wallstreet Blog Section ---->
