<?php
/**
 * single page detail file
 * @package WordPress
 * @subpackage spasalon
 */
 get_header();
$wallstreet_pro_options=theme_data_setup();
$current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options );
?>
<div class="page-mycarousel" style='background: url("<?php echo( get_header_image() ); ?>") repeat scroll center 0 #143745;'>
	<div class="page-title-col">
		<div class="container">
			<div class="row">
				<div class="page-header-title">
					<h1>
					<?php 
					if(is_shop())
					{
						$page_id = woocommerce_get_page_id('shop');
						echo get_the_title($page_id);
					}
					?>
					</h1>		
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
			
			<!--Blog Detail-->
			<div class="col-md-<?php echo (  is_active_sidebar('woocommerce') ? '8' : '12' ); ?> col-xs-12">
				<div id="post-<?php the_ID(); ?>">
					<?php woocommerce_content(); ?>
				</div>	
			</div>
			<!--/End of Blog Detail-->

			<?php get_sidebar('woocommerce'); ?>
		
		</div>	
	</div>
<!-- End of Blog & Sidebar Section -->
 
<div class="clearfix"></div>

<?php get_footer(); ?>