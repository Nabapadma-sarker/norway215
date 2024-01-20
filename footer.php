<?php
/**
* @Theme Name	:	wallstreet-Pro
* @file         :	footer.php
* @package      :	wallstreet-Pro
* @author       :	webriti
* @filesource   :	wp-content/themes/wallstreet/footer.php
*/
?>
<!-- Footer Widget Secton -->
<?php $wallstreet_pro_options=theme_data_setup();
	  $current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options ); ?>
<div class="footer_section">
	<?php if($current_options['footer_social_media_enabled']==true) { ?>
				<div class="footer-social-area"><ul class="footer-social-icons">
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
					
				</div></ul>
				<?php } ?>
	
	<div class="container">
	
		<?php if ( is_active_sidebar( 'footer-widget-area' ) ) { ?>
		<div class="row footer-widget-section">
		<?php dynamic_sidebar( 'footer-widget-area' ); ?>
		</div>
		<?php } 
		if($current_options['footerbar_enabled']==true){?>
        <div class="row">
			<div class="col-md-12">
				<div class="footer-copyright">
					<p><?php echo $current_options['footer_copyright']; ?></p>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
</div>
<!------  Google Analytics code --------->
<?php
if($current_options['webrit_custom_css']!='') {  ?>
<style>
<?php echo $current_options['webrit_custom_css']; ?>
</style>
<?php } 
if($current_options['google_analytics']!='') {  ?>
<script type="text/javascript">
<?php echo $current_options['google_analytics']; ?>
</script>
<?php } ?>	
<!------  Google Analytics code end ------->
</div> <!-- end of wrapper -->
<!-- Page scroll top -->
<?php if($current_options['scroll_to_top_enabled'] == true) { ?>
<a href="#" class="page_scrollup"><i class="fa fa-chevron-up"></i></a>
<?php } ?>
</div>
<!-- Page scroll top -->
<?php wp_footer(); ?>
</body>
</html>