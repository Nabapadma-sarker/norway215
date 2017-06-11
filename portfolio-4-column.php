<?php
// Template Name: Portfolio-4-column
/**
* @Theme Name	:	wallstreet-Pro
* @file         :	portfolio-2-column.php
* @package      :	wallstreet-Pro
@author       :	webriti
* @filesource   :	wp-content/themes/wallstreet/portfolio-2-column.php
*/
get_header(); ?>
<script type="text/javascript">
jQuery(document).ready(function()
{
 jQuery("#mytabs li:eq(0)").addClass("active");
 var liactive= jQuery("#mytabs li.active a").attr("href");
	jQuery(liactive).addClass("active");
});
</script>
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
<?php $wallstreet_pro_options=theme_data_setup();
	  $current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options ); ?>

<div class="container">
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

<!-- Category Filter Layer-->
<div class="row">

	<?php
		//for a given post type, return all
		$post_type = 'wallstreet_portfolio';
		$tax = 'portfolio_categories'; 
		$term_args=array( 'hide_empty' => true);
		$tax_terms = get_terms($tax, $term_args);
		$defualt_tex_id = get_option('wallstreet_webriti_default_term_id');
	?>	
	
		<div class="col-md-12 portfolio-tabs-section">
			<ul class="portfolio-tabs" id="mytabs">
				<?php	foreach ($tax_terms  as $tax_term) { 
				$tax_term_name = str_replace(' ', '_', $tax_term->name);
				$tax_term_name = preg_replace('~[^A-Za-z\d\s-]+~u', 'qua', $tax_term_name);
				?>
				<li><a data-toggle="tab" href="#<?php echo $tax_term_name; ?>"><?php echo $tax_term->name; ?></a></li>
			<?php } ?>
			</ul>
		</div>		
</div><!-- /Category Filter Layer-->
	
	<div id="myTabContent" class="tab-content main-portfolio-section">
	<?php $norecord=0;
	if ($tax_terms) 
	{ 	foreach ($tax_terms  as $tax_term)
		{	$count_posts = wp_count_posts( $post_type)->publish; 
			$args = array (
			'post_type' => $post_type,
			'portfolio_categories' => $tax_term->slug,
			'posts_per_page' =>$count_posts,
			'post_status' => 'publish');
		$j=1;
		$portfolio_query = null;		
		$portfolio_query = new WP_Query($args);				
		if( $portfolio_query->have_posts() )
		{ 
		$tax_term_name = str_replace(' ', '_', $tax_term->name);
		$tax_term_name = preg_replace('~[^A-Za-z\d\s-]+~u', 'qua', $tax_term_name); ?>
		<div id="<?php echo $tax_term_name; ?>" class="tab-pane fade in">
		<div class="row">
		<?php while ($portfolio_query->have_posts()) : $portfolio_query->the_post(); ?>
		<?php 	if(get_post_meta( get_the_ID(),'meta_project_link', true )) 
				{ $meta_project_link=get_post_meta( get_the_ID(),'meta_project_link', true ); }
				else { $meta_project_link = get_post_permalink(); } ?>
				<div class="col-md-3 col-md-6 main-portfolio-area">
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
				<?php if($j%4==0){ echo "<div class='clearfix'></div>"; } $j++;
				$norecord=1; endwhile; ?>				
			</div>
		</div>
		<?php 
			} /* end term wise data */	wp_reset_query();
		} // end for-each tax_terms
	} // end of text data 
	?>
	</div>	
</div>
<?php if(!$norecord) { ?>
	<div class="container">
		<div class="row">
			<div class="wallstreet_page_heading" style="text-align:center;">
				<h3><?php _e('Opps! No Portfolio Found! Add Portfolio Using PORTFOLIO/PROJECT section.','wallstreet'); ?> </h3>
			</div>
		</div>
	</div>
<?php }	?>
<?php get_footer(); ?>