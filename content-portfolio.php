<?php 
$wallstreet_pro_options=theme_data_setup();
$current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options );
global $template;
error_reporting(0);
    $post_type = 'wallstreet_portfolio';
	$tax = 'portfolio_categories'; 
	$term_args=array( 'hide_empty' => true,'orderby' => 'id');
	$posts_per_page = $current_options['portfolio_numbers_on_templates'];
	$tax_terms = get_terms($tax, $term_args);
	$defualt_tex_id = get_option('wallstreet_webriti_default_term_id');
	$j=1;
	$tab=$_GET['tab'];
	if(isset($_GET['div']))
	{
		$tab=$_GET['div'];
	}
?>
<div class="container">
	<div class="row">
			<div class="section_heading_title">
				<?php if($current_options['two_thre_four_col_port_tem_title']) { ?>
				<h1><?php echo $current_options['two_thre_four_col_port_tem_title']; ?></h1>
				<div class="pagetitle-separator">
					<div class="pagetitle-separator-border">
						<div class="pagetitle-separator-box"></div>
					</div>
				</div>
			<?php } ?>
			<?php if($current_options['two_thre_four_col_port_tem_desc']) { ?>
				<p><?php echo $current_options['two_thre_four_col_port_tem_desc']; ?></p>
			<?php } ?>				
			</div>
		</div>
		<div class="row">
					<div class="col-md-12">
						<div class="portfolio-tabs-section">
						<ul id="tabs" class="portfolio-tabs" role="tablist">
						<?php foreach ($tax_terms  as $tax_term) { ?>
							<li rel="tab" class="nav-item" ><span class="tab">
								<a id="tab-<?php echo rawurldecode($tax_term->slug); ?>" href="#<?php echo rawurldecode($tax_term->slug); ?>"  class="nav-link <?php if($tab==''){if($j==1){echo 'active';$j=2;}}else if($tab==rawurldecode($tax_term->slug)){echo 'active';}?>"><?php echo $tax_term->name; ?></a></span>
							</li>
						<?php } ?>
						</ul>
						</div>
					</div>
				</div>
					<div align="center" id="myDiv" style="display:none;">
					<img id="loading-image" src="<?php echo WEBRITI_TEMPLATE_DIR_URI.'/images/loading_2.gif';  ?>"  />
				</div>
 
 
 
 
				<div id="content" class="tab-content" role="tablist">
				    <?php 
					global $paged;
					$curpage = $paged ? $paged : 1;
					$norecord=0;
					$is_active=true;
					if ($tax_terms) 
					{ 
						foreach ($tax_terms  as $tax_term)
						{
							$args = array (
							'post_type' => $post_type,
							'post_status' => 'publish',					
							'portfolio_categories' => $tax_term->slug,
							'posts_per_page' => $posts_per_page,
							'paged' => $curpage,
							'orderby' => 'menu_order',
							);
							$portfolio_query = null;		
							$portfolio_query = new WP_Query($args);
							if( $portfolio_query->have_posts() ):?>
							<div id="<?php echo rawurldecode($tax_term->slug); ?>" class="tab-pane fade in <?php if($tab==''){if($is_active==true){echo 'active';}$is_active=false;}else if($tab==rawurldecode($tax_term->slug)){echo 'active';} ?>" role="tabpanel" aria-labelledby="tab-<?php echo rawurldecode($tax_term->slug); ?>">
								<div class="row">
									<?php while ($portfolio_query->have_posts()) : $portfolio_query->the_post();
											if(get_post_meta( get_the_ID(),'meta_project_link', true )) 
											{ $meta_project_link=get_post_meta( get_the_ID(),'meta_project_link', true ); }
											else { $meta_project_link = get_post_permalink(); }	
											$portfolio_target = sanitize_text_field( get_post_meta( get_the_ID(), 'portfolio_target', true ));
											$project_link_chkbx = sanitize_text_field( get_post_meta( get_the_ID(), 'project_link_chkbx', true ));  
											if(get_post_meta( get_the_ID(),'project_more_btn_link', true )) 
											{ 
												$project_more_btn_link = get_post_meta( get_the_ID(),'project_more_btn_link', true );
											} 
											else 
											{
												$project_more_btn_link =get_permalink();
											} 
											$class = '';
											if(basename($template)=='portfolio-2-column.php') {
												$class = 'col-md-6 col-sm-6 col-xs-12 main-portfolio-area';
												$class1= 'two-colum-portfolio';
											}
											if(basename($template)=='portfolio-3-column.php') {
												$class = 'col-md-4 col-sm-4 col-xs-12 main-portfolio-area';
												$class1= 'three-column-layout';
											}
											if(basename($template)=='portfolio-4-column.php') {
												$class = 'col-md-3 col-sm-6 col-xs-12 main-portfolio-area';
												$class1= 'four-colum-layout';
											}
 
											echo '<div class="'.$class.'">';?>
											<div class="main-portfolio-showcase">
												<div class="<?php echo $class1;?> main-portfolio-showcase-media">
														<?php the_post_thumbnail('full',array('class'=>'img-responsive'));
														if(has_post_thumbnail())
														{ 
															$post_thumbnail_id = get_post_thumbnail_id();
															$post_thumbnail_url = wp_get_attachment_url($post_thumbnail_id );
														} 
														?>
 
												<div class="main-portfolio-showcase-overlay">
 
													<div class="main-portfolio-showcase-overlay-inner">
 
														<div class="main-portfolio-showcase-detail">
 															<h4><?php the_title();?></h4>
 															<?php 
 															if(basename($template)=='portfolio-4-column.php'){?>
																	<p><?php echo portfolio_excerpt(15, get_the_ID());?></p>
																	<?php }
																	else{?>
																	<p><?php echo portfolio_excerpt(30, get_the_ID());?></p>
																	<?php 
																	}?>
 															<div class="portfolio-icon">
																<a  <?php  if(get_post_meta( get_the_ID(),'meta_project_target', true )) { echo "target='_blank'"; }  ?> class="hover_thumb" title="<?php the_title(); ?>" data-lightbox="image" href="<?php echo $post_thumbnail_url; ?>" ><i class="fa fa-picture-o"></i></a>
																<?php if($meta_project_link){?>
																	<a <?php  if(get_post_meta( get_the_ID(),'meta_project_target', true )) { echo "target='_blank'"; }  ?> href="<?php echo $meta_project_link; ?>"><i class="fa fa-link"></i></a>
																<?php } ?>
									</div>
															
 
														</div>
 
													</div>
 
												</div>
												</div>	
													
 										</div>
 
											<?php echo '</div>'; ?>
										<?php $norecord=1;?>
									<?php endwhile; ?>
								</div>
									<?php
									$total = $portfolio_query->found_posts;
									$Webriti_pagination = new Webriti_pagination();
									$Webriti_pagination->Webriti_page($curpage, $portfolio_query,$total,$posts_per_page);	?>
							</div>
							<?php
							wp_reset_query();
							else:?>
							<div id="<?php echo rawurldecode($tax_term->slug); ?>" class="tab-pane fade in <?php if($tab==''){if($is_active==true){echo 'active';}$is_active=false;}else if($tab==rawurldecode($tax_term->slug)){echo 'active';} ?>"></div>
							<?php
							endif;
						}
					}
				    ?>	
				</div>
 
</div>	
</section>
<script type="text/javascript">
  jQuery('.lightbox').hide();jQuery('#lightbox').hide();
  jQuery(".tab .nav-link ").click(function(e){
   	  jQuery("#lightbox").remove();
        var h=decodeURI(jQuery(this).attr('href').replace(/#/, ""));
         var tjk="<?php the_title();?>";
           var str1 = tjk.replace(/\s+/g, '-').toLowerCase();
           var pageurl="<?php $structure = get_option( 'permalink_structure' ); if($structure=='') {echo get_permalink()."&tab=";}else{echo get_permalink()."?tab=";}?>"+h;
        jQuery.ajax({url:pageurl,beforeSend: function() {
            jQuery(".tab-content").hide();
            jQuery("#myDiv").show();
          },success: function(data){
              jQuery(".tab-content").show();
            jQuery('.lightbox').remove();
            jQuery('#lightbox').remove();
            jQuery('.page-mycarousel').hide();
            jQuery('.container').hide();
            jQuery('.footer_section').hide();
        jQuery('#wall_wrapper').html(data);
    },complete:function(data){
        jQuery("#myDiv").hide();
    }
});
    if(pageurl!=window.location){
        window.history.pushState({path:pageurl},'',pageurl);
           }
    return false;
    });
</script>