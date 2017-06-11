<?php
/**
* @Theme Name	:	wallstreet Pro
* @file         :	index-slider.php
* @package      :	wallstreet-Pro
  @author       :	webriti
* @filesource   :	wp-content/themes/wallstreet/index-slider_centre.php
*/
?>
<!-- wallstreet Main Slider --->
<?php
$wallstreet_pro_options=theme_data_setup();
$current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options );
$animation= $current_options['animation'];
$animationSpeed=$current_options['animationSpeed'];
$direction=$current_options['slide_direction'];
$slideshowSpeed=$current_options['slideshowSpeed'];
?>
<script>
jQuery(window).load(function(){
	  jQuery('.flexslider').flexslider({	
		animation: "<?php echo $animation; ?>",
		animationSpeed: <?php echo $animationSpeed; ?>,
		direction: "<?php echo $direction; ?>",
		slideshowSpeed: <?php echo $slideshowSpeed; ?>,
		pauseOnHover: true, 
		slideshow: true,
		start: function(slider){
		  jQuery('body').removeClass('loading');
		}			
	}); 
});
</script>
<!-- /Slider Section -->
<div class="homepage_mycarousel">		
	<div class="flexslider">
        <div class="flex-viewport">
		<?php if($current_options['home_slider_enabled'] == true) { 
		
			$count_posts = wp_count_posts( 'wallstreet_slider')->publish;
			$args = array( 'post_type' => 'wallstreet_slider','posts_per_page' =>$count_posts); 	
			$slider = new WP_Query( $args );
			if( $slider->have_posts() )
			{ ?>
			<ul class="slides">
				<?php while ( $slider->have_posts() ) : $slider->the_post(); ?>
				<li>
					<?php if(has_post_thumbnail()): ?>
					<?php $defalt_arg =array('class' => "img-responsive"); ?>
					<?php the_post_thumbnail('', $defalt_arg); ?>
					<?php endif; ?>
					<div class="flex-slider-center">
						<div class="slide-text-bg1"><h2><?php the_title(); ?></h2></div>
						<?php if(get_post_meta( get_the_ID(),'slider_title', true )){ ?>
						<div class="slide-text-bg2"><h1><?php echo get_post_meta( get_the_ID(),'slider_title', true ); ?></h1></div>
						<?php }
						if(get_post_meta( get_the_ID(),'slider_description', true )) { ?>
						<div class="slide-text-bg3"><p><?php echo get_post_meta( get_the_ID(),'slider_description', true ); ?></p></div>
						<?php } 
						if(get_post_meta( get_the_ID(),'slider_button_text', true )) 
						{  ?>
							<div class="flex_btn_div">
								<a class="flex_btn" href="<?php echo get_post_meta( get_the_ID(),'slider_button_link', true ); ?>" <?php  if(get_post_meta( get_the_ID(),'slider_button_target', true )) { echo "target='_blank'"; }  ?>>
									<?php echo get_post_meta( get_the_ID(),'slider_button_text', true ); ?>
									<i class="fa fa-chevron-circle-right"></i>
								</a>
							</div>
						<?php } ?>
					</div>
				</li>
				<?php endwhile; ?>
			</ul>
			<?php } else { ?>
			<ul class="slides">
				<?php for($i=1; $i<=2; $i++) {  ?>
				<li>
					<img class="img-responsive" src="<?php echo WEBRITI_TEMPLATE_DIR_URI; ?>/images/slider/slide<?php echo $i; ?>.jpg">
					<div class="flex-slider-center">
						<div class="slide-text-bg1"><h2><?php _e('Clean & fresh theme' ,'wallstreet'); ?></h2></div>
						<div class="slide-text-bg2"><h1><?php _e('Welcome to wallstreet', 'wallstreet'); ?> 
						</h1></div>
						<div class="slide-text-bg3"><p><?php _e('The state-of-the-art HTML5 powered flexible layout with lightspeed fast CSS3 transition effects. Works perfect in any modern mobile.','wallstreet'); ?></p></div>
						<div class="flex_btn_div">
							<a class="flex_btn" href="#"><?php _e('Purchase Now','wallstreet'); ?> <i class="fa fa-chevron-circle-right"></i></a>
						</div>		
                    </div>
				</li>				
				<?php } ?>
			</ul>
			<?php } 
			} ?>
		</div>
	</div>  
</div>

<!-- /wallstreet Main Slider --->