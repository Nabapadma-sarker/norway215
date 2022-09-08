<?php $wallstreet_pro_options=theme_data_setup();
$current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options ); ?>
<div class="team-section1 team1">
		<div class="container">
		<?php if(!empty($current_options['home_team_title']) || (!empty($current_options['home_team_description']))):?>	
		<div class="row">
		<div class="section_heading_title">
		<?php if($current_options['home_team_title']) { ?>
			<h1><?php echo $current_options['home_team_title']; ?></h1>
		<div class="pagetitle-separator">
			<div class="pagetitle-separator-border">
				<div class="pagetitle-separator-box"></div>
			</div>
		</div>
		<?php } ?>
		<?php if($current_options['home_team_description']) { ?>
			<p><?php echo $current_options['home_team_description']; ?></p>
		<?php } ?>
		</div>
	</div>
	<?php endif;?>
			<!-- /Section Title -->
			
            <div class="row">
			<!-- Team -->
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
                <div class="col-md-<?php echo $current_options['team_design_layout_style'];?> col-sm-6 col-xs-12 team-block">
					<div class="team-img">
						<?php
				$defalt_arg =array('class' => "img-responsive");
				if(has_post_thumbnail()){
					the_post_thumbnail('', $defalt_arg);
					 } ?>
						<div class="overlay">
							<ul class="custom-social-icons">
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
					<div class="team-details">
						<h3 class="name"><?php the_title(); ?></h3>
						<span class="position"><?php if(!empty($designation_meta_save)){ echo $designation_meta_save; } ?></span>
						<div class="desi-seperate"></div>
					<p><?php if(!empty($description_meta_save)){ echo $description_meta_save; } ?></p>
					</div>
				</div>	
<?php 			$i++; endwhile; 
		} 
		else 
		{ 
			$team_title = array('Danial Creg', 'Alexia Doe' , 'John Doe', 'Beatrix Doe');
			$team_designation = array( __('FOUNDER','wallstreet'), __('DEVELOPER','wallstreet'), __('DESIGNER','wallstreet'), __('DEVELOPER','wallstreet'));
			for($i=1 ; $i<=3 ; $i++ )
			{  ?>
			<div class="col-md-<?php echo $current_options['team_design_layout_style'];?> col-sm-6 col-xs-12 team-block">
					<div class="team-img">
						<img class="img-responsive" src="<?php echo WEBRITI_TEMPLATE_DIR_URI; ?>/images/team/hometeam<?php echo $i; ?>.jpg">
						<div class="overlay">
							<ul class="custom-social-icons">
								<li><a href="http://facebook.com" class="btn btn-just-icon btn-simple customize-unpreviewable"><i class="fa fa-facebook "></i></a></li>
								<li><a href="http://twitter.com" class="btn btn-just-icon btn-simple customize-unpreviewable"><i class="fa fa-twitter "></i></a></li>
								<li><a href="http://linkedin.com" class="btn btn-just-icon btn-simple customize-unpreviewable"><i class="fa fa-linkedin "></i></a></li>
								<li><a href="http://behance.com" class="btn btn-just-icon btn-simple customize-unpreviewable"><i class="fa fa-behance "></i></a></li>
						    </ul>
						</div>
					</div>
					<div class="team-details">
						<h3 class="name"><?php echo $team_title[$i-1];?></h3>
						<span class="position"><?php echo $team_designation[$i-1];?></span>
						<div class="desi-seperate"></div>
				<p><?php echo 'Lorem ipsum dolor sit amet, conet adipis cing. Lorem ipsum dolore sit amet, consectetur adipisicings elit'; ?></p>
					</div>
				</div>
		<?php 	}
		} ?>
             	

              	

			<!-- /Team -->	
			</div>
		</div>	
</div>