<?php
// Template Name: Testimonial Carousel 3
get_header(); 
get_template_part('index', 'banner'); 
$wallstreet_pro_options=theme_data_setup();
$current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options );
if($current_options['testi_template_cta_section_show_hide']==true):?> 
<div class="container">
<?php if(!empty($current_options['testi_cta_title']) ||  !empty($current_options['testi_cta_description']))	:?>
<div class="row">
		<div class="section_heading_title">
			<?php if($current_options['testi_cta_title']!='') {?><h1><?php echo $current_options['testi_cta_title']; ?></h1>
			<div class="pagetitle-separator">
				<div class="pagetitle-separator-border">
					<div class="pagetitle-separator-box"></div>
				</div>
			</div>
		<?php } ?>
			<?php if($current_options['testi_cta_description']!='') {?><p><?php echo $current_options['testi_cta_description']; ?></p><?php } ?>
		</div>
	</div>
<?php
endif;
get_template_part('index', 'calloutarea'); 
echo '</div>';
endif;
if($current_options['testi_template_testi_section_show_hide']==true):
get_template_part('section-variation/home/testi/testimonial-3');
endif;

if($current_options['testi_template_client_section_show_hide']==true):
get_template_part('index', 'client');
endif;
get_footer(); ?>