<?php 
/**
* @Theme Name	:	Wallstreet-Pro
* @file         :	index-features.php
* @package      :	wallstreet-Pro
@author       :	webriti
* @filesource   :	wp-content/themes/wallstreet/index-features.php
*/
?>
<?php
	$wallstreet_pro_options=theme_data_setup();
	$current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options );
	$theme_feature_enabled = $current_options['theme_feature_enabled'];
	$theme_feature_image = $current_options['theme_feature_image'];
	$theme_feature_title = $current_options['theme_feature_title'];
	$theme_first_feature_icon = $current_options['theme_first_feature_icon'];
	$theme_first_title = $current_options['theme_first_title'];
	$theme_first_description = $current_options['theme_first_description'];
	$theme_second_feature_icon = $current_options['theme_second_feature_icon'];
	$theme_second_title = $current_options['theme_second_title'];
	$theme_second_description = $current_options['theme_second_description'];
	$theme_third_feature_icon = $current_options['theme_third_feature_icon'];
	$theme_third_title = $current_options['theme_third_title'];
	$theme_third_description = $current_options['theme_third_description'];
?>
<?php if($theme_feature_enabled ==true) { ?>
<div class="features-section" style="background: url('<?php echo $current_options['theme_feature_background']; ?>');  background-size:cover;">
<div class="overlay">
	<div class="container">
		<div class="row">
		<?php if(!empty($theme_feature_image)) {?>
			<div class="col-md-6 col-sm-6">
				<img class="img-responsive features-img" alt="Wallstreet Image" style="height:331px; width:525px;" src="<?php echo $theme_feature_image; ?>">
			</div>
			<?php } ?>
			<div class="col-md-6 col-sm-6">
				<div class="features-title"><?php if(!empty($theme_feature_title)) { echo $theme_feature_title; } ?></div>
				<div class="media features-area">
					<div class="feature-icon"><i class="fa <?php if(!empty($theme_first_feature_icon)){ echo $theme_first_feature_icon; } ?>"></i></div>
					<div class="media-body">
						<h3><?php if(!empty($theme_first_title)){ echo $theme_first_title; } ?></h3>
						<p><?php if(!empty($theme_first_description)){ echo $theme_first_description; } ?></p>
					</div>
				</div>
				<div class="media features-area">
					<div class="feature-icon"><i class="fa <?php if(!empty($theme_second_feature_icon)){ echo $theme_second_feature_icon; } ?>"></i></div>
					<div class="media-body">
						<h3><?php if(!empty($theme_second_title)){ echo $theme_second_title; } ?></h3>
						<p><?php if(!empty($theme_second_description)){ echo $theme_second_description; } ?></p>
					</div>
				</div>
				<div class="media features-area">
					<div class="feature-icon"><i class="fa <?php if(!empty($theme_third_feature_icon)){ echo $theme_third_feature_icon; } ?>"></i></div>
					<div class="media-body">
						<h3><?php if(!empty($theme_third_title)){ echo $theme_third_title; } ?></h3>
						<p><?php if(!empty($theme_third_description)){ echo $theme_third_description; } ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</div>
</div>
<?php } ?>