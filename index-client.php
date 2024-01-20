<?php
/**
* @Theme Name	:	wallstreet-Pro
* @file         :	index-client.php
* @package      :	wallstreet-Pro
@author       :	webriti
* @filesource   :	wp-content/themes/wallstreet/index-slider.php
*/
?>
<!-- wallstreet Clients Section ---->
<?php $wallstreet_pro_options=theme_data_setup();
	  $current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options ); ?>	
<div class="container client-section">	
	<div class="row">	
	<?php if(!empty($current_options['home_client_title']) || (!empty($current_options['home_client_description']))):?>		
		<div class="section_heading_title">
			<?php if($current_options['home_client_title']) { ?>
			<h1><?php echo $current_options['home_client_title']; ?></h1>
			<div class="pagetitle-separator">
			<div class="pagetitle-separator-border">
				<div class="pagetitle-separator-box"></div>
			</div>
		</div>
			<?php } ?>
			<?php if($current_options['home_client_description']) { ?>
				<p><?php echo $current_options['home_client_description']; ?></p>
			<?php } ?>
			
		</div>	
		<?php endif;?>	
		<div class="row">
			<?php
			$j=1;
			$args = array( 'post_type' => 'wallstreet_client','posts_per_page'=>-1); 	
			$client = new WP_Query( $args );
			if( $client->have_posts() ){
				
				while ( $client->have_posts() ) : $client->the_post();
				?>
				<div class="col-md-3">
					<div class="clients-logo">
					<?php 
							$defalt_arg =array('class' => "img-responsive");
							if(has_post_thumbnail()):
							//the_post_thumbnail('',$defalt_arg); 
							$post_thumbnail_id = get_post_thumbnail_id();
							$post_thumbnail_url = wp_get_attachment_url($post_thumbnail_id ); 
							
					?>
					<?php if($post_thumbnail_url) {?>
						<a href="<?php if(get_post_meta( get_the_ID(),'clientstrip_link', true ) ) { echo get_post_meta( get_the_ID(),'clientstrip_link', true ); } else { echo '#'; } ?>" <?php if(get_post_meta( get_the_ID(),'meta_client_target', true )) { echo "target='_blank'"; }  ?> ><img class="img-responsive" title="<?php echo get_the_title(); ?>" src="<?php echo $post_thumbnail_url; ?>"></a>
						<?php } else { ?> <img class="img-responsive" title="<?php echo get_the_title(); ?>" src="<?php echo $post_thumbnail_url; ?>"><?php } ?>
					</div>
				</div>
				<?php
				if($j%4==0){ echo "<div class='clearfix'></div>"; } $j++;
				
				endif;
				endwhile;

			}
			else { 														
				for($tt=1; $tt<=4; $tt++)
				{ ?>
				<div class="col-md-3">
					<div class="clients-logo">
						<img src="<?php echo WEBRITI_TEMPLATE_DIR_URI; ?>/images/clients/client<?php echo $tt; ?>.png" class="img-responsive" title="Sonny">
					</div>
				</div>
				<?php 
				}		
			}
			?>			
		</div>		
	</div> 		
</div>
<!-- /wallstreet wallstreet Cliens Section Section ---->