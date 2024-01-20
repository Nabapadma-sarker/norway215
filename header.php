<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
	<!--[if IE]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<![endif]-->
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />    
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />	
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<?php $wallstreet_pro_options=theme_data_setup();
		$current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options ); ?>
	<?php if($current_options['upload_image_favicon']!=''){ ?>
	<link rel="shortcut icon" href="<?php  echo $current_options['upload_image_favicon']; ?>" /> 
	<?php } wp_head(); 
	if($current_options['contact_header_settings']!="on"){?>
	<style type="text/css">
	@media only screen and (min-width: 200px) and (max-width: 480px)
	{
		.header-top-area {
	    	display: none;
		}
	}
	<?php } ?>
	</style>
</head>
<body <?php body_class(); ?>>
<div id="wall_wrapper">	
<!--Header Top Layer Section-->	
<?php if(($current_options['header_social_media_enabled']==true) || ($current_options['contact_header_settings']=="on")) { ?>
	<div class="header-top-area">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<?php if($current_options['header_social_media_enabled']==true) { ?>
				<ul class="head-contact-social">
					<?php 
					if($current_options['social_media_twitter_link']!='') { ?>
					<li><a href="<?php echo esc_url($current_options['social_media_twitter_link']); ?>" <?php if($current_options['twitter_link_new_tab']==true){ echo "target='_blank'"; } ?> ><i class="fa fa-twitter"></i></a></li>
					<?php } if($current_options['social_media_facebook_link']!='') { ?>
					<li><a href="<?php echo esc_url($current_options['social_media_facebook_link']); ?>" <?php if($current_options['facebook_link_new_tab']==true){ echo "target='_blank'"; } ?> ><i class="fa fa-facebook"></i></a></li>
					<?php } if($current_options['social_media_linkedin_link']!='') { ?>
					<li><a href="<?php echo esc_url($current_options['social_media_linkedin_link']); ?>" <?php if($current_options['linkdin_link_new_tab']==true){ echo "target='_blank'"; } ?> ><i class="fa fa-linkedin"></i></a></li>
					<?php } if($current_options['social_media_pinterest_link']!='') { ?>
					<li><a href="<?php echo esc_url($current_options['social_media_pinterest_link']); ?>" <?php if($current_options['pintrest_link_new_tab']==true){ echo "target='_blank'"; } ?> ><i class="fa fa-pinterest"></i></a></li>
					<?php } if($current_options['social_media_youtube_link']!='') { ?>
					<li><a href="<?php echo esc_url($current_options['social_media_youtube_link']); ?>" <?php if($current_options['youtube_link_new_tab']==true){ echo "target='_blank'"; } ?> ><i class="fa fa-youtube"></i></a></li>
					<?php } if($current_options['social_media_skype_link']!='') { ?>
					<li><a href="<?php echo esc_url($current_options['social_media_skype_link']); ?>" <?php if($current_options['skype_link_new_tab']==true){ echo "target='_blank'"; } ?> ><i class="fa fa-skype"></i></a></li>
					<?php } if($current_options['social_media_rssfeed_link']!='') { ?>
					<li><a href="<?php echo esc_url($current_options['social_media_rssfeed_link']); ?>" <?php if($current_options['rss_link_new_tab']==true){ echo "target='_blank'"; } ?> ><i class="fa fa-rss"></i></a></li>
					<?php } if($current_options['social_media_wordpress_link']!='') { ?>
					<li><a href="<?php echo esc_url($current_options['social_media_wordpress_link']); ?>" <?php if($current_options['wp_link_new_tab']==true){ echo "target='_blank'"; } ?> ><i class="fa fa-wordpress"></i></a></li>
					<?php } if($current_options['social_media_dropbox_link']!='') { ?>
					<li><a href="<?php echo esc_url($current_options['social_media_dropbox_link']); ?>" <?php if($current_options['db_link_new_tab']==true){ echo "target='_blank'"; } ?> ><i class="fa fa-dropbox"></i></a></li>
					<?php } if($current_options['social_media_instagram_link']!='') { ?>
					<li><a href="<?php echo esc_url($current_options['social_media_instagram_link']); ?>" <?php if($current_options['insta_link_new_tab']==true){ echo "target='_blank'"; } ?> ><i class="fa fa-instagram"></i></a></li>
					<?php } if($current_options['social_media_vimeo_link']!='') { ?>
					<li><a href="<?php echo esc_url($current_options['social_media_vimeo_link']); ?>" <?php if($current_options['vimeo_link_new_tab']==true){ echo "target='_blank'"; } ?> ><i class="fa fa-vimeo"></i></a></li>
					<?php } ?>
				</ul>
				<?php } ?>	
			</div>
			
			<div class="col-sm-6">
			<?php if($current_options['contact_header_settings']=="on") { ?>
				<ul class="head-contact-info">
					<?php if($current_options['contact_header_contact_settings']!=''){ ?>
					<li><i class="fa fa-phone-square"></i><?php echo $current_options['contact_header_contact_settings']; ?></li>
					<?php } ?>
					<?php if($current_options['contact_header_email_settings']!=''){ ?>
					<li><i class="fa fa-envelope"></i><?php echo $current_options['contact_header_email_settings']; ?></li>
					<?php } ?>			
				</ul>
			<?php } ?>
			</div>
		</div>	
	</div>
</div>
<?php } ?>
<!--/Header Top Layer Section. This is a test comment-->	

<!--Header Logo & Menus-->
<?php get_template_part('inc/header-preset/header-'.$current_options['header_presets_stlyle']);
	if($current_options['search_effect_style_setting']!='toogle'):?>
<div id="searchbar_fullscreen" <?php if($current_options['search_effect_style_setting']=='popup_light'):?> class="bg-light" <?php endif;?>>
         <button type="button" class="close">×</button>
         <form method="get" id="searchform" autocomplete="off" class="search-form" action="<?php echo esc_url( home_url( '/' ));?>"><label><input type="search" class="search-field" placeholder="Search …" value="" name="s" id="s"></label><input type="submit" class="search-submit btn" value="<?php echo esc_html__('Search','wallstreet');?>"></form>
      </div>
<?php endif; ?>