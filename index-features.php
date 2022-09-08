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
				<?php if($current_options['feature_image_link']) { ?>
				<a href="<?php echo $current_options['feature_image_link']; ?>" <?php if($current_options['image_link_target'] == true) { ?>target="_blank" <?php } ?>><img class="img-responsive features-img" alt="Wallstreet Image" style="height:331px; width:525px;" src="<?php echo $theme_feature_image; ?>"></a>
				<?php } else { ?>
				<img class="img-responsive features-img" alt="Wallstreet Image" style="height:331px; width:525px;" src="<?php echo $theme_feature_image; ?>">
				<?php } ?>
			</div>
			<?php } ?>
			<div class="col-md-6 col-sm-6">
				<?php if(!empty($theme_feature_title)) { ?><div class="features-title"><?php echo $theme_feature_title; ?></div><?php } ?>
				<?php if(!empty($theme_first_feature_icon) || (!empty($theme_first_title)) || (!empty($theme_first_description))):?>
				<div class="media features-area">
					<?php if(!empty($theme_first_feature_icon)):?>
					<div class="feature-icon"><i class="fa <?php if(!empty($theme_first_feature_icon)){ echo $theme_first_feature_icon; } ?>"></i></div>
					<?php endif;?>		
					<?php if(!empty($theme_first_title) || (!empty($theme_first_description))):?>			
					<div class="media-body">
						<?php if(!empty($theme_first_title)){?><h3><?php  echo $theme_first_title; ?></h3><?php } ?>
						<?php if(!empty($theme_first_description)){?><p><?php echo $theme_first_description; ?></p><?php } ?>
					</div>
				<?php endif;?>
				</div>
			<?php endif;?>
			<?php if(!empty($theme_second_feature_icon) || (!empty($theme_second_title)) || (!empty($theme_second_description))):?>
				<div class="media features-area">
					<?php if(!empty($theme_second_feature_icon)):?><div class="feature-icon"><i class="fa <?php if(!empty($theme_second_feature_icon)){ echo $theme_second_feature_icon; } ?>"></i></div><?php endif;?>
					<div class="media-body">
						<?php if(!empty($theme_second_title)){?><h3><?php echo $theme_second_title; ?></h3><?php } ?>
						<?php if(!empty($theme_second_description)){?><p><?php echo $theme_second_description; ?></p><?php } ?>
					</div>
				</div>
				<?php endif;?>

				<?php if(!empty($theme_third_feature_icon) || (!empty($theme_third_title)) || (!empty($theme_third_description))):?>
				<div class="media features-area">
					<?php if(!empty($theme_third_feature_icon)):?><div class="feature-icon"><i class="fa <?php if(!empty($theme_third_feature_icon)){ echo $theme_third_feature_icon; } ?>"></i></div><?php endif;?>
					<div class="media-body">
						<?php if(!empty($theme_third_title)){?><h3><?php echo $theme_third_title; ?></h3><?php } ?>
						<?php if(!empty($theme_third_description)){?><p><?php echo $theme_third_description; ?></p><?php } ?>
					</div>
				</div>
				<?php endif;?>

			</div>
		</div>
	</div>
	
</div>
</div>
<?php } ?>