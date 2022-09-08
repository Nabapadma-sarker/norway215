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
<!-- Page Title Section -->
<div class="page-mycarousel">
	<img src="<?php  echo( get_header_image() ); ?>" class="img-responsive header-img">
	<div class="container page-title-col">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h1>
					<?php 
					woocommerce_page_title();
					?>
				</h1>	
			</div>	
		</div>
	</div>
	<div class="page-breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ol class="breadcrumbs">
						<?php if (function_exists('qt_custom_breadcrumbs')) qt_custom_breadcrumbs();?>
					</ol>
				</div>
			</div>	
		</div>
	</div>
</div>
<!-- /Page Title Section -->
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