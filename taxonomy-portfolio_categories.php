<?php
get_header(); ?>
<div class="page-mycarousel" style='background: url("<?php echo( get_header_image() ); ?>") repeat scroll center 0 #143745;'>
	<div class="page-title-col">
		<div class="container">
			<div class="row">
				<div class="page-header-title">
					<h1><?php echo single_cat_title("", false); ?></h1>		
				</div>
			</div>	
		</div>
		<?php get_template_part('index', 'banner'); ?>
	</div>	
</div>
<!-- /Page Title Section -->
<?php $wallstreet_pro_options=theme_data_setup();
	  $current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options ); ?>
<div class="container">
	<div class="row">
		<div class="section_heading_title">
				<?php if($current_options['wallstreet_texonomy_title']) { ?>
			<h1><?php echo $current_options['wallstreet_texonomy_title']; ?></h1>
			<div class="pagetitle-separator"></div>
			<?php } ?>
			<?php if($current_options['wallstreet_texonomy_desc']) { ?>
			<p><?php echo $current_options['wallstreet_texonomy_desc']; ?></p>
			<?php } ?>				
		</div>
	</div>
<div class="portfolio-column-section">
	<div class="container">
		<!-- Portfolio Area -->
		<div class="main-portfolio-section" id="myTabContent">
		<?php $norecord=0;
				$args = array (
				'post_status' => 'publish');
			global $j;
			$j=1;
			$portfolio_query = null;		
			$portfolio_query = new WP_Query($args);				
			if( have_posts() )
			{ ?>
			<div id="<?php echo $tax_term->slug; ?>" class="tab-pane fade in <?php if($is_active==true){echo 'active';}$is_active=false; ?>">
				<div class="row">
					<?php
					while (have_posts()) { the_post(); ?>
					<?php 	if(get_post_meta( get_the_ID(),'meta_project_link', true )) 
					{ $meta_project_link=get_post_meta( get_the_ID(),'meta_project_link', true ); }
					else { $meta_project_link = get_post_permalink(); } ?>
					<?php if($current_options['taxonomy_portfolio_list'] == 2) { ?>
					<div class="col-md-6 col-md-6 main-portfolio-area">

					<?php } else if($current_options['taxonomy_portfolio_list'] == 3) { ?>
					<div class="col-md-4 col-md-4 main-portfolio-area">
					
					
					<?php } else if($current_options['taxonomy_portfolio_list'] == 4) { ?>
					<div class="col-md-3 col-md-3 main-portfolio-area">
					<?php } ?>
						
						<div class="main-portfolio-showcase">
							<div class="main-portfolio-showcase-media">
							<?php
							if(has_post_thumbnail())
							{ 
							$class=array('class'=>'img-responsive');
							the_post_thumbnail('', $class);
							$post_thumbnail_id = get_post_thumbnail_id();
							$post_thumbnail_url = wp_get_attachment_url($post_thumbnail_id );
							} 
							else 
							{ ?>
							<img src="<?php echo WEBRITI_TEMPLATE_DIR_URI; ?>images/portfolio/main-port1.jpg" class="img-responsive">
							<?php $post_thumbnail_url=WEBRITI_TEMPLATE_DIR_URI .'/images/portfolio/main-port1.jpg'; 
							} ?>
							<div class="main-portfolio-showcase-overlay">
							<div class="main-portfolio-showcase-overlay-inner">
								<div class="main-portfolio-showcase-detail">
								<h4><?php the_title();?></h4>
									<p><?php the_excerpt();?></p>
									<div class="portfolio-icon">
										<a  <?php  if(get_post_meta( get_the_ID(),'meta_project_target', true )) { echo "target='_blank'"; }  ?> class="hover_thumb" title="<?php the_title(); ?>" data-lightbox="image" href="<?php echo $post_thumbnail_url; ?>" ><i class="fa fa-picture-o"></i></a>
										<a <?php  if(get_post_meta( get_the_ID(),'meta_project_target', true )) { echo "target='_blank'"; }  ?> href="<?php echo $meta_project_link; ?>"><i class="fa fa-link"></i></a>
									</div>									
								</div>
							</div>
						</div>
						</div>
					</div>					
				</div>
						<?php
						if($j%$current_options['taxonomy_portfolio_list']==0){ echo "<div class='clearfix'></div>"; } $j++; $norecord=1; } ?>
						</div>
					</div>
					<?php  }
						wp_reset_query(); ?>
				</div>
			</div>
		<!-- /Portfolio Area -->
		<!-- Load More Projects Btn -->			
		<!-- /Load More Projects Btn -->				
	<?php if(!$norecord) { ?>
	<div class="container">
		<div class="row">
			<div class="wallstreet_page_heading" style="text-align:center;">
				<h3><?php _e('Opps! No Portfolio Found! Add Portfolio Using PORTFOLIO/PROJECT section.','wallstreet'); ?> </h3>
			</div>
		</div>
	</div>
<?php }	?>
</div>
</div>
</div>
</div>
<!-- /Portfolio Section -->
<?php get_footer(); ?>