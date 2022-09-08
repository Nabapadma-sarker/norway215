<?php
/**
* @Theme Name	:	wallstreet-Pro
* @file         :	index-portfolio.php
* @package      :	wallstreet-Pro
@author       :	webriti
* @filesource   :	wp-content/themes/wallstreet/index-portfolio.php
*/
?>
<!-- AddThis Button END -->
<div class="portfolio-section">
	<div class="container">
	<?php $wallstreet_pro_options=theme_data_setup();
		  $current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options ); ?>
		<?php if(!empty($current_options['portfolio_title']) || (!empty($current_options['portfolio_description']))):?>
		<div class="row">
			<div class="section_heading_title">
				<?php if($current_options['portfolio_title']) { ?>
				<h1><?php echo $current_options['portfolio_title']; ?></h1>
				<div class="pagetitle-separator">
					<div class="pagetitle-separator-border">
						<div class="pagetitle-separator-box"></div>
					</div>
				</div>
			<?php } ?>
			<?php if($current_options['portfolio_description']) { ?>
				<p><?php echo $current_options['portfolio_description']; ?></p>
			<?php } ?>				
			</div>
		</div>
	<?php endif;?>
		<div class="row">
			<?php
			$j=1;
			$total_portfolio = $current_options['portfolio_list'];
			$args = array( 'post_type' => 'wallstreet_portfolio','posts_per_page' =>$total_portfolio); 	
			$portfolio = new WP_Query( $args ); 
			if( $portfolio->have_posts() )
			{ while ( $portfolio->have_posts() ) : $portfolio->the_post();
				if(get_post_meta( get_the_ID(),'meta_project_link', true )) 
				{ $meta_project_link=get_post_meta( get_the_ID(),'meta_project_link', true ); }
				else { $meta_project_link = get_post_permalink(); }			
			?>
			<div class="col-md-<?php echo $current_options['portfolio_homepage_column_laouts'];?> home-portfolio-area">
				<div class="home-portfolio-showcase">
					<div class="home-portfolio-showcase-media">
						<?php 
							$defalt_arg =array('class' => "img-responsive");
							if(has_post_thumbnail()):
							the_post_thumbnail('',$defalt_arg); 
							$post_thumbnail_id = get_post_thumbnail_id();
							$post_thumbnail_url = wp_get_attachment_url($post_thumbnail_id ); 
						?>
						<div class="home-portfolio-showcase-overlay">
							<div class="home-portfolio-showcase-overlay-inner">
								<div class="home-portfolio-showcase-detail">
									<h4><?php the_title(); ?></h4>
									<?php if($current_options['portfolio_homepage_column_laouts']==3){?>
									<p><?php echo portfolio_excerpt(15, get_the_ID());?></p>
									<?php }
									else{?>
									<p><?php echo portfolio_excerpt(30, get_the_ID());?></p>
									<?php 
									}
									if(get_post_meta( get_the_ID(),'portfolio_project_button_text', true ) ) { ?>
									<div class="portfolio-btn"><a href="<?php echo $meta_project_link; ?>" <?php if(get_post_meta( get_the_ID(),'meta_project_target', true )) { echo "target='_blank'"; }  ?>><?php echo get_post_meta( get_the_ID(),'portfolio_project_button_text', true ); ?></a>								
									</div>
									<?php } ?>
								</div>
							</div>
						</div>
						<?php endif; ?>
						</div>
				</div>
			</div>	
			<?php 
			 $j++; 
			endwhile;	
			} else { 
			for($i=1; $i<=$current_options['portfolio_list']; $i++) {	?>
			<div class="col-md-<?php echo $current_options['portfolio_homepage_column_laouts'];?> home-portfolio-area">
				<div class="home-portfolio-showcase">
				<div class="home-portfolio-showcase-media">
					<img class="img-responsive" src="<?php echo WEBRITI_TEMPLATE_DIR_URI; ?>/images/portfolio/port<?php echo $i; ?>.jpg" />
					<div class="home-portfolio-showcase-overlay">
						<div class="home-portfolio-showcase-overlay-inner">
							<div class="home-portfolio-showcase-detail">
								<h4><?php _e('Wallstreet style','wallstreet');?></h4>
								<p><?php _e('A wonderful serenity has taken possession of my entire soul, like these sweet mornings.','wallstreet'); ?></p>
								<div class="portfolio-btn"><a href="#"><?php _e('Read More','wallstreet'); ?></a></div>
							</div>
						</div>
					</div>
				</div>
				</div>				
			</div>
			<?php } //end of default portfolio for loop  ?>
			<div class='clearfix'></div>
			<?php
			if($current_options['view_all_projects_btn_enabled']==true)
			{
			?>
			<div class="row">
				<div class="proejct-btn">
				<a target="<?php if($current_options['portfolio_more_lnik_target'] != false ){ echo '_blank'; } ?>" href="<?php echo $current_options['portfolio_more_link']; ?>"><?php printf( __('%s','wallstreet'),$current_options['portfolio_more_text']); ?></a>
				</div>
			</div>
		<?php  } } ?>			
		</div>
	
	<?php
	if( $portfolio->have_posts() )
	{
		if($current_options['view_all_projects_btn_enabled']==true)
		{
			if($current_options['portfolio_more_text'])
			{	?>
			<div class ="row">
				<div class="proejct-btn">
					<a href="<?php if($current_options['portfolio_more_link'] !='') { echo $current_options['portfolio_more_link']; } ?>" <?php if($current_options['portfolio_more_lnik_target'] ==true) { echo "target='_blank'"; } ?>> <?php echo $current_options['portfolio_more_text']; ?></a>
				</div>
			</div>
	  <?php } } } ?>
</div>	
</div>
<!-- /wallstreet Portfolio Section ---->