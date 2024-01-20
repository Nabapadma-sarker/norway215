<?php 
/**
* @Theme Name	:	Wallstreet-Pro
* @file         :	index-banner.php
* @package      :	wallstreet-Pro
@author       :	webriti
* @filesource   :	wp-content/themes/wallstreet/index-banner.php
*/
?>
<!-- Page Title Section -->

<div class="page-mycarousel">
	<img src="<?php  echo( get_header_image() ); ?>" class="img-responsive header-img">
	<div class="container page-title-col">
		<div class="row">
			<div class="col-md-12 col-sm-12">
					<?php 
						if ( is_front_page() && is_home() ) {
							echo '<h1>';
							
							esc_html_e('Home','wallstreet' );
							
							echo '</h1>';

							} elseif ( is_front_page()){
							echo '<h1>';
							
							esc_html_e('Home','wallstreet' );
							
							echo '</h1>';

							} elseif ( is_home()){

							echo '<h1>';
							
							echo esc_html(single_post_title());
							
							echo '</h1>';

							}
							else if ( class_exists( 'WooCommerce' ) ) {
							if ( is_shop() ) {
								echo '<h1>';
									woocommerce_page_title();
								echo '</h1>';
							}
							elseif(is_cart() || is_checkout()) {
									
									the_title(  '<h1>', '</h1>' );	
								}
							else { 
						
								the_title(  '<h1>', '</h1>' ); 
							} 
						}
						else if( is_archive() ){ 
						
							the_archive_title( '<h1>', '</h1>' ); 
							
						}					
						
						else{ 
						
							the_title(  '<h1>', '</h1>' ); 
						}  
						?>	
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