<?php
/*	@Theme Name	:	wallstreet-Pro
* 	@file         :	single-wallstreet_portfolio.php
* 	@package      :	wallstreet-Pro
* 	@author       :	webriti
* 	@filesource   :	wp-content/themes/wallstreet/single-wallstreet_portfolio.php
*/
get_header();
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

<!--Project Section Detail -->
<div class="container">	
	<div class="row portfolio-detail-section">			
			<div class="col-md-4 portfolio-detail-sidebar">
			<ul class="portfolio-detail-pagi">
				<?php	 $next_post = get_next_post();
				if (!empty( $next_post )): ?>
					<li><a href="<?php echo get_permalink( $next_post->ID ); ?>" title="Previous" rel="next"><span class="fa fa-angle-left"></span></a></li>
				<?php endif; ?>
				<?php	$prev_post = get_previous_post();
				if (!empty( $prev_post )): ?>
					<li><a href="<?php echo get_permalink( $prev_post->ID ); ?>" title="Next" rel="prev"><span class="fa fa-angle-right"></span></a></li>    
				<?php endif; ?>	
			</ul>
			<?php
			$draught_links = array();
			$terms = get_the_terms( $post->ID ,'portfolio_categories');									
			if ( $terms && ! is_wp_error( $terms ) ) : 				
				foreach ( $terms as $term ) {
					$draught_links[] = $term->name;
				}
				$on_draught = join( ", ", $draught_links );
			endif; ?>
				<div class="portfolio-detail-description">
					<div class="qua-separator-small" id=""></div>
					<?php the_post(); ?>
					<p><?php the_content(); ?></p>	
				</div>
				<div class="portfolio-detail-info">					
					<?php if(get_post_meta( get_the_ID(),'portfolio_client_project_title', true )) {  ?>
					<p><?php _e('Clients','wallstreet'); ?> <small><?php echo get_post_meta( get_the_ID(),'portfolio_client_project_title', true ); ?></small></p>
					<?php } ?>
					<p><?php _e('Date','wallstreet'); ?> <small><?php the_time('d M, Y'); ?> </small></p>
					<p><?php _e('Categories','wallstreet'); ?> <small><?php echo $on_draught;  ?></small></p>
					
					<?php if(get_post_meta( get_the_ID(),'portfolio_project_visit_site', true )) {  ?>
					<p><?php _e('Website','wallstreet'); ?> <small><?php echo get_post_meta( get_the_ID(),'portfolio_project_visit_site', true ); ?></small></p>
					<?php } ?>
					<?php if(get_post_meta( get_the_ID(),'portfolio_project_button_text', true )) {  ?>
					<p><a  class="project-btn" <?php if(get_post_meta( get_the_ID(),'meta_button_target', true )) { echo "target='_blank'"; }  ?> href="<?php if(get_post_meta( get_the_ID(),'meta_button_link', true )) { echo get_post_meta( get_the_ID(),'meta_button_link', true ); } ?>" title="<?php _e('Website','wallstreet'); ?>"><?php echo get_post_meta( get_the_ID(),'portfolio_project_button_text', true ); ?></a></p>
					<?php } ?>
				</div>
				</div>			
				<?php if(has_post_thumbnail()){?>
				<div class="col-md-8">
				<?php $class=array('class'=>'img-responsive'); ?>
				<div class="port-detail-img"><?php the_post_thumbnail('', $class); ?></div>
				</div><?php } ?>	
	</div>	
</div>
<!-- /Project Section Detail-->

<!-- Realted Project ---->
<div class="container">
	<div class="row">
		<div class="section_heading_title">
			<?php 
			$wallstreet_pro_options=theme_data_setup();
			$current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options );
			if($current_options['related_portfolio_title']) { ?>
			<h1><?php echo $current_options['related_portfolio_title']; ?></h1>
			<div class="pagetitle-separator"></div>
		<?php } ?>
		<?php if($current_options['related_portfolio_description']) { ?>
			<p><?php echo $current_options['related_portfolio_description']; ?></p>
		<?php } ?>				
		</div>
	</div>
	<div class="row related-project-section" id="related_project_scroll">
	<?php 
		
		/**** get all related products and skip current product ****/
		$post_type = 'wallstreet_portfolio';
		$tax = 'portfolio_categories'; 
		$count_posts = wp_count_posts( 'wallstreet_portfolio')->publish;
		$args = array (
		'post_type' => $post_type,
		'portfolio_categories' => $draught_links[0],
		'post__not_in' => array($post->ID),
		'posts_per_page' =>$count_posts,
		'post_status' => 'publish');
		$portfolio_query = null;		
		$portfolio_query = new WP_Query($args);				
		if( $portfolio_query->have_posts() )
		{   while ($portfolio_query->have_posts()) : $portfolio_query->the_post(); 
			if(get_post_meta( get_the_ID(),'meta_project_link', true )) 
			{ $meta_project_link=get_post_meta( get_the_ID(),'meta_project_link', true ); }
			else
			{ $meta_project_link = get_post_permalink(); } ?>
		<div class="col-md-4 pull-left main-portfolio-area">
			<div class="main-portfolio-showcase">
				<div class="main-portfolio-showcase-media">
					<?php if(has_post_thumbnail())
					{ 	$class=array('class'=>'img-responsive');
						the_post_thumbnail('', $class);
						$post_thumbnail_id = get_post_thumbnail_id();
						$post_thumbnail_url = wp_get_attachment_url($post_thumbnail_id );
					  ?>
					<div class="main-portfolio-showcase-overlay">
						<div class="main-portfolio-showcase-overlay-inner">
							<div class="main-portfolio-showcase-detail">
								<h4><?php the_title(); ?></h4>
								<p><?php the_excerpt();?></p>
								<div class="portfolio-icon">
									<a href="<?php echo $post_thumbnail_url; ?>" <?php  if(get_post_meta( get_the_ID(),'meta_project_target', true )) { echo "target='_blank'"; }  ?> data-lightbox="image"><i class="fa fa-picture-o"></i></a>
									<a href="<?php echo $meta_project_link; ?>" <?php  if(get_post_meta( get_the_ID(),'meta_project_target', true )) { echo "target='_blank'"; } ?>><i class="fa fa-link"></i></a>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<?php  endwhile; } ?>
	</div>
	
	<div class="row">
		<div class="col-md-12">
			<ul class="prelated-project-btn">
			<?php $next_post = get_next_post();
				if (!empty( $next_post )): ?>
				<li>
				<a id="project_prev" href="<?php echo get_permalink( $next_post->ID ); ?>"><i class="fa fa-angle-left"></i>
				</a>
				</li>
				<?php endif; ?>
				<?php	$prev_post = get_previous_post();
				if (!empty( $prev_post )): ?>
				<li>
				<a id="project_next" href="<?php echo get_permalink( $prev_post->ID ); ?>"><i class="fa fa-angle-right"></i>
				</a>
				</li>
				<?php endif; ?>				
			</ul>
		</div>
	</div>
	
</div>	
<?php get_footer(); ?>