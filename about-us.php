<?php 
/**
Template Name: About Us
*/
get_header();?>
<?php $wallstreet_pro_options=theme_data_setup();
	  $current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options ); ?>
<!-- Page Title Section -->
<?php get_template_part('index', 'banner'); ?>
<!-- /Page Title Section -->
<!-- /Page Title Section -->
<!--About Section-->
<div class="container">
	<div class="row about-section">
		<?php the_post(); 		
		if(has_post_thumbnail()){
		$defalt_arg =array('class' => "img-responsive"); ?>
		<div class="col-md-6">
			<?php the_post_thumbnail('', $defalt_arg); ?>
		</div>
		<?php } ?>
		<div class="col-md-<?php if(has_post_thumbnail()) { echo 6;} else { echo 12;}?>">
			<?php 	the_content(); ?>	
			<?php if($current_options['about_social_media_enabled']==true) { ?>
			<ul class="about-social-icons">
				<?php 
					if($current_options['social_media_twitter_link']!='') { ?>
					<li><a href="<?php echo esc_url($current_options['social_media_twitter_link']); ?>" <?php if($current_options['twitter_link_new_tab']==true){ echo "target='_blank'"; } ?> ><i class="fa fa-twitter"></i></a></li>
					<?php } if($current_options['social_media_facebook_link']!='') { ?>
					<li><a href="<?php echo esc_url($current_options['social_media_facebook_link']); ?>" <?php if($current_options['facebook_link_new_tab']==true){ echo "target='_blank'"; } ?> ><i class="fa fa-facebook"></i></a></li>
					<?php }if($current_options['social_media_linkedin_link']!='') { ?>
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
	</div>
</div>
<!--/About Section-->

<!-- Team Section -->
<div class="container">
	<?php
	if($current_options['about_team_section_show_hide']==true):?>
	<?php if(!empty($current_options['about_team_title']) || (!empty($current_options['about_team_description']))):?>
	<div class="row">
		<div class="section_heading_title">
			<?php if($current_options['about_team_title']!='') {?><h1><?php echo $current_options['about_team_title']; ?></h1>
			<div class="pagetitle-separator">
				<div class="pagetitle-separator-border">
					<div class="pagetitle-separator-box"></div>
				</div>
			</div>
			<?php  } ?>
			<?php if($current_options['about_team_description']!='') { ?><p><?php echo $current_options['about_team_description']; ?></p><?php } ?>
		</div>
	</div>
<?php endif;?>
	
	<div class="row team-section">
	<?php
		$count_posts = wp_count_posts( 'wallstreet_team')->publish;		
		$arg = array( 'post_type' => 'wallstreet_team','posts_per_page' =>$count_posts);
		$team = new WP_Query( $arg );
		$i=1;
		if($team->have_posts())
		{	while($team->have_posts() ) : $team->the_post();
					$designation_meta_save = sanitize_text_field( get_post_meta( get_the_ID(), 'designation_meta_save', true ));
					$description_meta_save = sanitize_text_field( get_post_meta( get_the_ID(), 'description_meta_save', true ));
					$fb_meta_save = sanitize_text_field( get_post_meta( get_the_ID(), 'fb_meta_save', true ));
					$fb_meta_save_chkbx = sanitize_text_field( get_post_meta( get_the_ID(), 'fb_meta_save_chkbx', true ));
					$skype_meta_save = sanitize_text_field( get_post_meta( get_the_ID(), 'skype_meta_save', true ));
					$skype_meta_save_chkbx = sanitize_text_field( get_post_meta( get_the_ID(), 'skype_meta_save_chkbx', true ));
					
					$rss_meta_save = sanitize_text_field( get_post_meta( get_the_ID(), 'rss_meta_save', true ));
					$rss_meta_save_chkbx = sanitize_text_field( get_post_meta( get_the_ID(), 'rss_meta_save_chkbx', true ));
					$lnkd_meta_save = sanitize_text_field( get_post_meta( get_the_ID(), 'lnkd_meta_save', true ));
					$lnkd_meta_save_chkbx = sanitize_text_field( get_post_meta( get_the_ID(), 'lnkd_meta_save_chkbx', true ));
					$twt_meta_save = sanitize_text_field( get_post_meta( get_the_ID(), 'twt_meta_save', true ));
					$twt_meta_save_chkbx = sanitize_text_field( get_post_meta( get_the_ID(), 'twt_meta_save_chkbx', true ));
				?>
			<div class="col-md-3 col-sm-6 team-effect">
				<?php
				$defalt_arg =array('class' => "img-responsive");
				if(has_post_thumbnail()){
				?>
				<div class="team-box">
					<?php the_post_thumbnail('', $defalt_arg); ?>
				</div>
				<?php } ?>
				<div class="team-area">				
					<h5><?php the_title(); ?><span><?php if(!empty($designation_meta_save)){ echo $designation_meta_save; } ?></span></h5>
					<div class="desi-seperate"></div>
					<p><?php if(!empty($description_meta_save)){ echo $description_meta_save; } ?></p>
					<ul class="team-social-icons">
						<?php
						if($fb_meta_save){ 
						if($fb_meta_save_chkbx)
						{	$target ="_blank";  } else { $target ="_self";  } ?>
						<li><a href="<?php if($fb_meta_save){ echo esc_html($fb_meta_save); } ?>" target="<?php echo $target; ?>"><i class="fa fa-facebook"></i></a></li>
						<?php } ?>
						<?php
						if($skype_meta_save){ 
						if($skype_meta_save_chkbx)
						{	$target ="_blank";  } else { $target ="_self";  } ?>
						<li><a href="<?php if($skype_meta_save){ echo esc_html($skype_meta_save); } ?>" target="<?php echo $target; ?>"><i class="fa fa-skype"></i></a></li>
						<?php } ?>
						
						<?php
						if($rss_meta_save){ 
						if($rss_meta_save_chkbx)
						{	$target ="_blank";  } else { $target ="_self";  } ?>
						<li><a href="<?php if($rss_meta_save){ echo esc_html($rss_meta_save); } ?>" target="<?php echo $target; ?>"><i class="fa fa-rss"></i></a></li>
						<?php } ?>
						<?php
						if($lnkd_meta_save){ 
						if($lnkd_meta_save_chkbx)
						{	$target ="_blank";  } else { $target ="_self";  } ?>
						<li><a href="<?php if($lnkd_meta_save){ echo esc_html($lnkd_meta_save); } ?>" target="<?php echo $target; ?>"><i class="fa fa-linkedin"></i></a></li>			   
						<?php } ?>
						<?php
						if($twt_meta_save){ 
						if($twt_meta_save_chkbx)
						{	$target ="_blank";  } else { $target ="_self";  } ?>
						<li><a href="<?php if($twt_meta_save){ echo esc_html($twt_meta_save); } ?>" target="<?php echo $target; ?>"><i class="fa fa-twitter"></i></a></li>
						<?php } ?>
					</ul>
				</div>	
			</div>
			<?php if($i%4==0)
			{	echo "<div class='clearfix'></div>"; 	}
			$i++; endwhile; 
		} 
		else 
		{ 
			$team_title = array('Danial Creg', 'Alexia Doe' , 'John Doe', 'Beatrix Doe');
			$team_designation = array( __('FOUNDER','wallstreet'), __('DEVELOPER','wallstreet'), __('DESIGNER','wallstreet'), __('DEVELOPER','wallstreet'));
			for($i=1 ; $i<=4 ; $i++ )
			{  ?>
			<div class="col-md-3 col-sm-6 team-effect">
			<div class="team-box">
				<img class="img-responsive" src="<?php echo WEBRITI_TEMPLATE_DIR_URI; ?>/images/team/team<?php echo $i; ?>.jpg">
			</div>
			<div class="team-area">				
				<h5><?php echo $team_title[$i-1];?> <span><?php echo $team_designation[$i-1];?></span></h5>
				<div class="desi-seperate"></div>
				<p><?php echo 'Lorem ipsum dolor sit amet, conet adipis cing. Lorem ipsum dolore sit amet, consectetur adipisicings elit'; ?></p>
				<ul class="team-social-icons">
				   <li><a href="#"><i class="fa fa-facebook"></i></a></li>
				   <li><a><i class="fa fa-skype"></i></a></li>
				   <li><a><i class="fa fa-google-plus"></i></a></li>
				   <li><a><i class="fa fa-rss"></i></a></li>
				   <li><a><i class="fa fa-linkedin"></i></a></li>			   
				   <li><a><i class="fa fa-twitter"></i></a></li>
				</ul>
			</div>	
		</div>
		<?php 	}
		} ?>
	</div>	
	<?php
	endif;?>

	<?php
	if($current_options['about_callout_section_show_hide']==true):
	 get_template_part('index', 'calloutarea'); 
	 endif;
	 ?>
</div>
<?php get_footer(); ?>