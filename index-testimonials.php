<?php
/**
* @Theme Name	:	Wallstreet Pro
* @file         :	index-testimonials.php
* @package      :	wallstreet_pro
@author       :	webriti
* @filesource   :	wp-content/themes/wallstreet/index-testimonials.php
*/
?>
<?php
$wallstreet_pro_options=theme_data_setup();
$current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options );
$testi_slide_type=$current_options['testi_slide_type'];
$testi_scroll_items=$current_options['testi_scroll_items'];
$testi_scroll_duration=$current_options['testi_scroll_dura'];
$testi_timeout_duration=$current_options['testi_timeout_dura'];
?>
<script>
jQuery(function() {
jQuery('#testimonial-scroll').carouFredSel({
				width: '100%',
				responsive : true,
				circular: true,
				pagination: "#pager2",
				items: {
					height : 'variable',
                        visible: {
                            min: 1,
                            max: 2
                        }
                    },
				prev: '#prev3',
				next: '#next3',
				directon: 'left',

				auto: true,
				scroll : {
						items : <?php echo $testi_scroll_items; ?>,
						duration : <?php echo $testi_scroll_duration; ?>,
						fx:'<?php echo $testi_slide_type; ?>',
						timeoutDuration : <?php echo $testi_timeout_duration; ?>,
						pauseOnHover    : true,
					},

			}).trigger('resize');
			
			});
</script>
<!-- Testimonial Section -->
	<div class="testimonial-section" style="background: url('<?php echo $current_options['testi_background']; ?>'); background-size:cover;">
		<div class="overlay">
			<div class="container">
				<div class="row" id="testimonial-scroll">
						<?php 
							$count_posts = wp_count_posts( 'wallstreet_testi')->publish;
							$args = array( 'post_type' => 'wallstreet_testi','posts_per_page' =>$count_posts); 	
							$testimonial = new WP_Query( $args ); 
							if( $testimonial->have_posts() )
							{ while ( $testimonial->have_posts() ) { $testimonial->the_post();
							$testimonial_description_text =sanitize_text_field( get_post_meta( get_the_ID(), 'testimonial_description_text', true ));
						?>
						<div class="col-md-12 testimonial-area pull-left">
						<?php
						$defalt_arg =array('class' => "img-circle img-responsive");
						if(has_post_thumbnail()){ ?>
						<div><?php the_post_thumbnail('', $defalt_arg); ?></div>
						<?php } ?>
							<p><?php if(!empty($testimonial_description_text)){ echo $testimonial_description_text; } ?> </p>
							<h2><i></i><?php the_title(); ?><i></i></h2>
						</div>
						<?php } } else {
						for($i=1 ; $i<=3 ; $i++)
						{
						?>
						<div class="col-md-12 testimonial-area pull-left">
							<div><img class="img-circle img-responsive" alt="Wallstreet Image" src="<?php echo WEBRITI_TEMPLATE_DIR_URI; ?>/images/testi1.jpg"></div>
							<p><?php echo 'Juis voluptatem sequi nesciunt. Neque porro quisquam est, qui don numquam eius modi ssim hen urlus mattis dignissim dapibctumst.'; ?></p>
							<h2><i></i> <?php echo 'David Warner'; ?><i></i></h2>
						</div>
						<?php } } ?>
				</div>
			</div>
		</div>
	</div>
<!-- /Testimonial Section -->