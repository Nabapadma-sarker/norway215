<?php
$wallstreet_pro_options = theme_data_setup();
$current_options = wp_parse_args(get_option('wallstreet_pro_options', array()), $wallstreet_pro_options); ?>
<div class="navbar navbar-wrapper navbar-inverse navbar-static-top navbar1 header-style-<?php echo $current_options['header_presets_stlyle']; ?>" role="navigation">
          <div class="container">
	  
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		<!-- logo -->
		<?php if (($current_options['upload_image_logo'] != "") && (!has_custom_logo())) { ?>
			<a class="navbar-brand" href="<?php echo home_url('/'); ?>">
			<img src="<?php echo $current_options['upload_image_logo']; ?>" style="height:<?php if ($current_options['height'] != '') {
        echo $current_options['height'];
    } else {
        "50";
    } ?>px; width:<?php if ($current_options['width'] != '') {
        echo $current_options['width'];
    } else {
        "250";
    } ?>px;" alt="logo" />
			</a>	
			<div class="site-branding-text logo-link-url">
	          <h1 class="site-title">
	              <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
	                  <div class="wallstreet_title_head"><?php bloginfo('name'); ?></div>
	              </a>
	          </h1>
	        </div>
		<?php
} else {
    if (has_custom_logo()):
        $custom_logo_id = get_theme_mod('custom_logo');
        $image = wp_get_attachment_image_src($custom_logo_id, 'full');
?>
			<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
			<img src="<?php echo esc_url($image[0]); ?>" class=" img-responsive custom-logo">
			</a>
			<?php
    endif; ?>
			<?php if (display_header_text()): ?>
			<div class="site-branding-text logo-link-url">
	          <h1 class="site-title">
	              <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
	               <div class="wallstreet_title_head"><?php bloginfo('name'); ?></div>
	              </a>
	          </h1>
			  <?php $wallstreet_description = get_bloginfo('description', 'display');
        if ($wallstreet_description || is_customize_preview()):
?>
	          <p class="site-description"><?php echo $wallstreet_description; ?> </p>
	        </div>
			<?php
        endif; ?> 
             <?php
    endif; ?>    
	<?php
} ?>
		<!-- /logo -->
		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<?php get_template_part('inc/menu-search'); ?>	
		
		</div><!-- /.navbar-collapse -->	 
	</div>		
</div>
</div>
<?php
$headercheckbox = get_theme_mod('display_header_text');
Print_r($headercheckbox);
?>