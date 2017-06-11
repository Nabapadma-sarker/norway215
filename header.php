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
	<?php } wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!--Header Top Layer Section-->	
	<div class="header-top-area">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<?php if($current_options['header_social_media_enabled']==true) { ?>
				<ul class="head-contact-social">
					<?php if($current_options['social_media_twitter_link']!='') { ?>
					<li><a href="<?php echo $current_options['social_media_twitter_link']; ?>"><i class="fa fa-twitter"></i></a></li>
					<?php }
					if($current_options['social_media_facebook_link']!='') { ?>
					<li><a href="<?php echo $current_options['social_media_facebook_link']; ?>"><i class="fa fa-facebook"></i></a></li>
					<?php }					
					if($current_options['social_media_googleplus_link']!='') { ?>
					<li><a href="<?php echo $current_options['social_media_googleplus_link']; ?>"><i class="fa fa-google-plus"></i></a></li>
					<?php }
					if($current_options['social_media_linkedin_link']!='') { ?>
					<li><a href="<?php echo $current_options['social_media_linkedin_link']; ?>"><i class="fa fa-linkedin"></i></a></li>
					<?php }
					if($current_options['social_media_pinterest_link']!='') { ?>
					<li><a href="<?php echo $current_options['social_media_pinterest_link']; ?>"><i class="fa fa-pinterest"></i></a></li>
					<?php }
					if($current_options['social_media_youtube_link']!='') { ?>
					<li><a href="<?php echo $current_options['social_media_youtube_link']; ?>"><i class="fa fa-youtube"></i></a></li>					
					<?php }
					if($current_options['social_media_skype_link']!='') { ?>
					<li><a href="<?php echo $current_options['social_media_skype_link']; ?>"><i class="fa fa-skype"></i></a></li>				
					<?php }
					if($current_options['social_media_rssfeed_link']!='') { ?>
					<li><a href="<?php echo $current_options['social_media_rssfeed_link']; ?>"><i class="fa fa-rss"></i></a></li>				
					<?php }
					if($current_options['social_media_wordpress_link']!='') { ?>
					<li><a href="<?php echo $current_options['social_media_wordpress_link']; ?>"><i class="fa fa-wordpress"></i></a></li>					
					<?php }
					if($current_options['social_media_dropbox_link']!='') { ?>
					<li><a href="<?php echo $current_options['social_media_dropbox_link']; ?>"><i class="fa fa-dropbox"></i></a></li>
					<?php } ?>
				</ul>
				<?php } ?>	
			</div>
			
			<div class="col-sm-6">
			<?php if($current_options['contact_header_settings']=="on") { ?>
				<ul class="head-contact-info">
					<?php if($current_options['contact_phone_number_one']!=''){ ?>
					<li><i class="fa fa-phone-square"></i>+<?php echo $current_options['contact_phone_number_one']; ?></li>
					<?php } ?>
					<?php if($current_options['contact_email_number_one']!=''){ ?>
					<li><i class="fa fa-envelope"></i><?php echo $current_options['contact_email_number_one']; ?></li>
					<?php } ?>			
				</ul>
			<?php } ?>
			</div>
		</div>	
	</div>
</div>
<!--/Header Top Layer Section. This is a test comment-->	

<!--Header Logo & Menus-->
<div class="navbar navbar-wrapper navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
	  
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		<!-- logo -->
		<a class="navbar-brand" href="<?php echo home_url( '/' ); ?>">
			<?php
				if($current_options['text_title'] ==true)
				{ echo "<div class=wallstreet_title_head>" . get_bloginfo( ). "</div>"; }
				else if($current_options['upload_image_logo']!='') 
				{ ?>
				<img src="<?php echo $current_options['upload_image_logo']; ?>" style="height:<?php if($current_options['height']!='') { echo $current_options['height']; }  else { "50"; } ?>px; width:<?php if($current_options['width']!='') { echo $current_options['width']; }  else { "250"; } ?>px;" alt="logo" />
				<?php } else { ?> 
				<img src="<?php echo WEBRITI_TEMPLATE_DIR_URI; ?>/images/logo.png" class="img-responsive" alt="logo" />
				<?php } ?>
			</a>
		</a><!-- /logo -->
		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<?php
			wp_nav_menu( array(  
					'theme_location' => 'primary',
					'container'  => 'nav-collapse collapse navbar-inverse-collapse',
					'menu_class' => 'nav navbar-nav navbar-right',
					'fallback_cb' => 'webriti_fallback_page_menu',
					'walker' => new webriti_nav_walker()
					)
				);	
			?>
		</div><!-- /.navbar-collapse -->	 
	</nav>		
</div>
</div>