<?php 
$wallstreet_pro_options=theme_data_setup();
$current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options ); 
$post_per_page=$current_options['home_blog_counts'];?>	
<div class="container home-blog6 home-blog-section wow fadeInDown" data-wow-delay="1s">
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
	<div class="blog6 blog-section">
	<div class="container">
		<div class="row">		
			<!--Blog Area-->
			<div class="col-md-12">
				<?php
			$j=1;
			$switcher=1;
			$args = array( 'post_type' => 'post','posts_per_page' =>$post_per_page,'post__not_in'=>get_option("sticky_posts")); 	
			query_posts( $args );
			if(query_posts( $args ))
			{	
				while(have_posts()):the_post();
				$recent_expet = get_the_excerpt(); ?>
				<div class="blog-section-left blog-list-view <?php if($switcher%2==0){ echo 'right';}?>">
					<div class="media">
						<?php
						$defalt_arg =array('class' => "img-responsive");
						if(has_post_thumbnail()):?>
							<div class="blog-post-img">
								<a href="<?php the_permalink();?>"><?php the_post_thumbnail('', $defalt_arg);?></a>
							</div>
						<?php endif;?>					
						<div class="blog-post-title media-body <?php if(!has_post_thumbnail()) {echo 'remove-img';}?>">
							<?php if($current_options['home_meta_section_settings'] == false) { ?>
								<div class="blog-post-date">
									<span class="date"><?php echo get_the_date(); ?></span>
	              					<span class="comment"><i class="fa fa-comment"></i><?php comments_number('0', '1','%'); ?></span>
	            				</div>
	            			<?php } ?>
							<div class="blog-post-title-wrapper">
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>	
								<p><?php echo get_the_excerpt(); ?></p>		
								<div class="blog-btn-col"><a class="blog-btn" href="<?php the_permalink(); ?>"><?php _e('Read More','wallstreet'); ?></a></div>
							</div>
						</div>
					</div>
				</div>
				<?php 
				$switcher++;
				endwhile;			
			} else  {
			echo "<div class='post_message'>".__('No posts to show','wallstreet')."</div>";
			} 
			if($current_options['view_all_posts_btn_enabled'] == true){
				if($current_options['view_all_posts_text']){?>
					<div class ="row">
						<div class="proejct-btn switcher-style">
							<a href="<?php if($current_options['all_posts_link'] !='') { echo $current_options['all_posts_link']; } ?>" <?php if($current_options['view_all_lnik_target'] ==true) { echo "target='_blank'"; } ?>> <?php echo $current_options['view_all_posts_text']; ?> </a>
						</div>
					</div>
					<?php
				}
			}?>		
			</div>
			<!--/Blog Area-->		
		</div>
	</div>
	</div>
</div>