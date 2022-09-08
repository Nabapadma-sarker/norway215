<?php
/************ Home slider meta post ****************/
add_action('admin_init','wallstreet_init');
function wallstreet_init()
	{
		
		add_meta_box('home_slider_meta', __('Slider Details','wallstreet'), 'wallstreet_meta_slider', 'wallstreet_slider', 'normal', 'high');
		add_meta_box('home_service_meta', __('Service Details','wallstreet'), 'wallstreet_meta_service', 'wallstreet_service', 'normal', 'high');
		add_meta_box('home_portfolio_meta', __('Portfolio Details','wallstreet'), 'wallstreet_meta_portfolio', 'wallstreet_portfolio', 'normal', 'high');
		add_meta_box('home_portfolio_meta_details', __('Portfolio Featured Details','wallstreet'), 'wallstreet_meta_portfolio_details', 'wallstreet_portfolio', 'normal', 'high');
		
		//add_meta_box('wallstreet_page', 'Page Info', 'page_layout_meta', 'page', 'normal', 'high');
		//add_meta_box('wallstreet_post', 'Post Info', 'post_layout_meta', 'post', 'normal', 'high');
		add_meta_box('wallstreet_testi', __('Testimonial Detail','wallstreet'), 'wallstreet_meta_testimonial', 'wallstreet_testi', 'normal', 'high');
		add_meta_box('wallstreet_team', __('Team Details','wallstreet'), 'wallstreet_meta_team', 'wallstreet_team', 'normal', 'high');
		add_meta_box('wallstreet_client', __('Client Details','wallstreet'), 'wallstreet_meta_client', 'wallstreet_client', 'normal', 'high');
		
		add_action('save_post','wallstreet_meta_save');
		
		
	}	
	function post_layout_meta()
	{
		global $post ;
		$post_description =sanitize_text_field( get_post_meta( get_the_ID(), 'post_description', true ));
		$content_post_layout=sanitize_text_field( get_post_meta( get_the_ID(), 'content_post_layout', true ));
		if(!$content_post_layout) { $content_post_layout= "fullwidth"; } 
		?>
		<p><label><?php _e('Description','wallstreet');?></label></p> 
		<p><input class="inputwidth"  name="post_description" id="post_description" style="width: 480px" placeholder="<?php _e('Description','wallstreet'); ?> " type="text" value="<?php if (!empty($post_description)) echo esc_attr($post_description);?>"></input></p>
		<p>
		<input id="radio1" 	<?php if($content_post_layout == "fullwidth") { echo "checked"; } ?> type="radio" name="content_post_layout" value="fullwidth">
		<label for="radio1" <?php if($content_post_layout == "fullwidth") { echo "checked"; } ?> ><img src="<?php echo WEBRITI_TEMPLATE_DIR_URI; ?>/images/full-width.png"></label>
		<input  id="radio2" <?php if($content_post_layout == "fullwidth_left") { echo "checked"; } ?> type="radio" name="content_post_layout" value="fullwidth_left">
		<label for="radio2" <?php if($content_post_layout == "fullwidth_left") { echo "checked"; } ?> ><img src="<?php echo WEBRITI_TEMPLATE_DIR_URI; ?>/images/left-sidebar.png"></label>
		<input  id="radio3" <?php if($content_post_layout == "fullwidth_right") { echo "checked"; } ?> type="radio" name="content_post_layout" value="fullwidth_right">
		<label for="radio3" <?php if($content_post_layout == "fullwidth_right") { echo "checked"; } ?> ><img src="<?php echo WEBRITI_TEMPLATE_DIR_URI; ?>/images/right-sidebar1.png"></label>
		</p>			
		<?php
	}
	function page_layout_meta()
	{
		global $post ;
		$page_description =sanitize_text_field( get_post_meta( get_the_ID(), 'page_description', true ));
		$content_page_layout=sanitize_text_field( get_post_meta( get_the_ID(), 'content_page_layout', true ));
		if(!$content_page_layout) { $content_page_layout= "fullwidth"; }
		?>
		<p><label><?php _e('Page Description','wallstreet');?></label></p> 
		<p><input class="inputwidth"  name="page_description" id="page_description" style="width: 480px" placeholder="<?php _e('Enter page description','wallstreet');?>" type="text" value="<?php if (!empty($page_description)) echo esc_attr($page_description);?>"> </input></p>		
		<p><label><?php _e('Page Layout','wallstreet');?></label></p> 
		<p>
			<input id="radio1" 	<?php if($content_page_layout == "fullwidth") { echo "checked"; } ?> type="radio" name="content_page_layout" value="fullwidth">
			<label for="radio1" <?php if($content_page_layout == "fullwidth") { echo "checked"; } ?> ><img src="<?php echo WEBRITI_TEMPLATE_DIR_URI; ?>/images/full-width.png"></label>
			<input  id="radio2" <?php if($content_page_layout == "fullwidth_left") { echo "checked"; } ?> type="radio" name="content_page_layout" value="fullwidth_left">
			<label for="radio2" <?php if($content_page_layout == "fullwidth_left") { echo "checked"; } ?> ><img src="<?php echo WEBRITI_TEMPLATE_DIR_URI; ?>/images/left-sidebar.png"></label>
			<input  id="radio3" <?php if($content_page_layout == "fullwidth_right") { echo "checked"; } ?> type="radio" name="content_page_layout" value="fullwidth_right">
			<label for="radio3" <?php if($content_page_layout == "fullwidth_right") { echo "checked"; } ?> ><img src="<?php echo WEBRITI_TEMPLATE_DIR_URI; ?>/images/right-sidebar1.png"></label>
		<p/>
		<?php
	}
	
	// code for slider banner description
	function wallstreet_meta_slider()
	{	global $post ;
		$slider_title = sanitize_text_field( get_post_meta( get_the_ID(), 'slider_title', true ));
		$slider_description = sanitize_text_field( get_post_meta( get_the_ID(), 'slider_description', true ));
		$slider_button_text = sanitize_text_field( get_post_meta( get_the_ID(), 'slider_button_text', true ));
		$slider_button_link = sanitize_text_field( get_post_meta( get_the_ID(), 'slider_button_link', true ));
		$slider_button_target = sanitize_text_field( get_post_meta( get_the_ID(), 'slider_button_target', true ));
		?>	
		<p><h4 class="heading"><?php _e('Title','wallstreet');?></h4></p> 
		<p><input class="inputwidth"  name="slider_title" id="slider_title" style="width: 480px" placeholder="<?php _e('Title','wallstreet');?> " type="text" value="<?php if (!empty($slider_title)) echo esc_attr($slider_title);?>"> </input></p>		
		<p><h4 class="heading"><?php _e('Description','wallstreet'); ?> </h4>
		<p><input class="inputwidth"  name="slider_description" id="slider_description" style="width: 480px" placeholder="<?php _e('Description','wallstreet'); ?>" type="text" value="<?php if (!empty($slider_description)) echo esc_attr($slider_description);?>"> </input></p>	
		<p><h4 class="heading"><?php _e('Button Text','wallstreet'); ?> </h4>
		<p><input class="inputwidth"  name="slider_button_text" id="slider_button_text" style="width: 480px" placeholder="<?php _e('Text','wallstreet'); ?>" type="text" value="<?php if (!empty($slider_button_text)) echo esc_attr($slider_button_text);?>"> </input></p>	
		<p><h4 class="heading"><?php _e('Button Link','wallstreet');?></h4>
		<p><input class="inputwidth"  name="slider_button_link" id="slider_button_link" style="width: 480px" placeholder="<?php _e('Link','wallstreet'); ?>" type="text" value="<?php if (!empty($slider_button_link)) echo esc_attr($slider_button_link);?>"> </input></p>
		<p><input type="checkbox" id="slider_button_target" name="slider_button_target" <?php if($slider_button_target) echo "checked"; ?> ><?php _e('Open link in new tab','wallstreet'); ?></p>
		<?php
	}

	// code for service description
	function wallstreet_meta_service()
	{	global $post ;		
		$service_icon_image =sanitize_text_field( get_post_meta( get_the_ID(), 'service_icon_image', true ));
		$service_icon_target =sanitize_text_field( get_post_meta( get_the_ID(), 'service_icon_target', true ));
		$meta_service_link =sanitize_text_field( get_post_meta( get_the_ID(), 'meta_service_link', true ));
		$meta_service_target =sanitize_text_field( get_post_meta( get_the_ID(), 'meta_service_target', true ));
		$service_description_text =sanitize_text_field( get_post_meta( get_the_ID(), 'service_description_text', true ));
		$service_readmore_text =sanitize_text_field( get_post_meta( get_the_ID(), 'service_readmore_text', true ));
	?>	
		<p><h4 class="heading"><?php _e('Icon','wallstreet'); echo " (Using font awesome icons name) like: fa-rub.";?> <label style="margin-left:10px;"><a target="_blank" href="http://fontawesome.io/icons/"> <?php _e('Get your Font Awesome icons.','wallstreet') ;?></a></label></h4>
		<p><input type="checkbox" id="service_icon_target" name="service_icon_target" <?php if($service_icon_target) echo "checked"; ?> ><?php _e('To enable service icon check mark the checkbox','wallstreet'); ?></p>
		<p><input class="inputwidth"  name="service_icon_image" id="service_icon_image" style="width: 480px" placeholder="<?php _e('Icon','wallstreet'); ?>" type="text" value="<?php if (!empty($service_icon_image)) echo esc_attr($service_icon_image);?>"> </input></p>
		<p><h4 class="heading"><?php _e('Link','wallstreet'); ?></h4>
		<p><input class="inputwidth"  name="meta_service_link" id="meta_service_link" style="width: 480px" placeholder="<?php _e('Link','wallstreet'); ?>" type="text" value="<?php if (!empty($meta_service_link)) echo esc_attr($meta_service_link);?>"> </input></p>
		<p><input type="checkbox" id="meta_service_target" name="meta_service_target" <?php if($meta_service_target) echo "checked"; ?> ><?php _e('Open link in new tab','wallstreet'); ?></p>
		<p><h4 class="heading"><?php _e('Description','wallstreet'); ?></h4>
		<p><textarea name="service_description_text" id="service_description_text" style="width: 480px; height: 56px; padding: 0px;" placeholder="<?php _e('Description','wallstreet'); ?>"  rows="3" cols="10" ><?php if (!empty($service_description_text)) echo esc_textarea( $service_description_text ); ?></textarea></p>
		<p><h4 class="heading"><?php _e('Button Text','wallstreet'); ?></h4>
		<p><input class="inputwidth"  name="service_readmore_text" id="service_readmore_text" style="width: 480px" placeholder="<?php _e('Button Text','wallstreet'); ?>" type="text" value="<?php if (!empty($service_readmore_text)) echo esc_attr($service_readmore_text);?>"> </input></p>
<?php }

// code for project description
	function wallstreet_meta_portfolio()
	{	global $post ;		
		$meta_project_target =sanitize_text_field( get_post_meta( get_the_ID(), 'meta_project_target', true ));
		$portfolio_project_summary =sanitize_text_field( get_post_meta( get_the_ID(), 'portfolio_project_summary', true ));
		$meta_project_link =sanitize_text_field( get_post_meta( get_the_ID(), 'meta_project_link', true ));
		
	?>
	<p><h4 class="heading"><?php _e('Link','wallstreet');?></h4>
	<p><input class="inputwidth"  name="meta_project_link" id="meta_project_link" style="width: 480px" placeholder="<?php _e('Link','wallstreet'); ?>" type="text" value="<?php if (!empty($meta_project_link)) echo esc_attr($meta_project_link);?>"> </input></p>	
	<p><input type="checkbox" id="meta_project_target" name="meta_project_target" <?php if($meta_project_target) echo "checked"; ?> ><?php _e('Open link in new tab','wallstreet'); ?></p>
	<p><h4 class="heading"><?php _e('Page Info','wallstreet');?></h4>
	<p><input class="inputwidth"  name="portfolio_project_summary" id="portfolio_project_summary" style="width: 480px" placeholder="<?php _e('Page Info','wallstreet');?>" type="text" value="<?php if (!empty($portfolio_project_summary)) echo esc_attr($portfolio_project_summary);?>"> </input></p>	
	
<?php }
	function wallstreet_meta_portfolio_details()
	{	global $post ;
		$portfolio_client_project_title =sanitize_text_field( get_post_meta( get_the_ID(), 'portfolio_client_project_title', true ));
		$portfolio_project_visit_site =sanitize_text_field( get_post_meta( get_the_ID(), 'portfolio_project_visit_site', true ));
		$portfolio_project_button_text =sanitize_text_field( get_post_meta( get_the_ID(), 'portfolio_project_button_text', true ));
		$meta_button_link =sanitize_text_field( get_post_meta( get_the_ID(), 'meta_button_link', true ));
		$meta_button_target =sanitize_text_field( get_post_meta( get_the_ID(), 'meta_button_target', true ));
	?>
	<p><h4 class="heading"><?php _e('Clients','wallstreet');?></h4>
	<p><input class="inputwidth"  name="portfolio_client_project_title" id="portfolio_client_project_title" style="width: 480px" placeholder="<?php _e("Clients","wallstreet"); ?>" type="text" value="<?php if (!empty($portfolio_client_project_title)) echo esc_attr($portfolio_client_project_title);?>"> </input></p>	
	<p><h4 class="heading"><?php _e('Website','wallstreet');?></h4>
	<p><input class="inputwidth"  name="portfolio_project_visit_site" id="portfolio_project_visit_site" style="width: 480px" 
	placeholder="<?php _e("Website","wallstreet");?>: http://webriti.com" type="text" value="<?php if (!empty($portfolio_project_visit_site)) echo esc_attr($portfolio_project_visit_site);?>"> </input></p>
	<p><h4 class="heading"><?php _e('Button Text','wallstreet');?></h4>
	<p><input class="inputwidth"  name="portfolio_project_button_text" id="portfolio_project_button_text" style="width: 480px" 
	placeholder="<?php _e('Button Text','wallstreet'); ?>" type="text" value="<?php if (!empty($portfolio_project_button_text)) echo esc_attr($portfolio_project_button_text);?>"> </input></p>	
	<p><h4 class="heading"><?php _e('Button Link','wallstreet');?></h4>
	<p><input class="inputwidth"  name="meta_button_link" id="meta_button_link" style="width: 480px" placeholder="<?php _e('Button Link','wallstreet'); ?>" type="text" value="<?php if (!empty($meta_button_link)) echo esc_attr($meta_button_link);?>"> </input></p>	
	<p><input type="checkbox" id="meta_button_target" name="meta_button_target" <?php if($meta_button_target) echo "checked"; ?> ><?php _e('Open link in new tab','wallstreet'); ?></p>
	<?php		
	}
//Meta boxes for testimonials*/
	function wallstreet_meta_testimonial()
	{	global $post ;
		$testimonial_description_text=sanitize_text_field( get_post_meta( get_the_ID(), 'testimonial_description_text', true ));	
		?>	
		<p><label><?php _e('Description','wallstreet');?></label>	</p>
		<p><textarea name="testimonial_description_text" id="testimonial_description_text" style="width: 550px; height: 100px; padding: 0px;" placeholder="<?php _e('Description','wallstreet');?>"  rows="3" cols="10" ><?php if (!empty($testimonial_description_text)){ echo esc_textarea( $testimonial_description_text ); } ?></textarea></p>
	<?php
	}
	
	function wallstreet_meta_team()
	{ 
		global $post;
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
	<p><h4 class="heading"><?php _e('Designation','wallstreet');?></h4></p>
	<p><input class="inputwidth"  name="designation_meta_save" id="designation_meta_save" style="width: 480px" placeholder="<?php _e("Designation","wallstreet"); ?>" type="text" value="<?php if (!empty($designation_meta_save)) echo esc_attr($designation_meta_save);?>"></input></p>
	<p><h4 class="heading"><?php _e('Description','wallstreet');?></h4></p>
	<p><textarea name="description_meta_save" id="description_meta_save" style="width: 480px; height: 56px; padding: 0px;" 
	placeholder="<?php _e("Description","wallstreet"); ?>"  rows="3" cols="10" ><?php if (!empty($description_meta_save)) echo esc_textarea( $description_meta_save ); ?></textarea></p>	
	
	<p><h4 class="heading"><span><?php _e('Social Media Settings','wallstreet');?></span></h4>
	
	<p><h4 class="heading"><label><?php _e('Facebook URL','wallstreet');?></label></h4>
	<input style="width:70%;padding: 10px;"  name="fb_meta_save" id="fb_meta_save" placeholder="<?php _e("Facebook URL","wallstreet"); ?>" value="<?php if(!empty($fb_meta_save)) echo esc_attr($fb_meta_save); ?>"/>
	<input type="checkbox" name="fb_meta_save_chkbx" id="fb_meta_save_chkbx" <?php if($fb_meta_save_chkbx){echo "checked";}?> /><?php _e('Open link in new tab','wallstreet'); ?></p>
	
	<p><h4 class="heading"><label><?php _e('Skype URL','wallstreet');?></label></h4>
	<input style="width:70%;padding: 10px;"  name="skype_meta_save" id="skype_meta_save" placeholder="<?php _e("Skype URL","wallstreet"); ?>" value="<?php if(!empty($skype_meta_save)) echo esc_attr($skype_meta_save); ?>"/>
	<input type="checkbox" name="skype_meta_save_chkbx" id="skype_meta_save_chkbx" <?php if($skype_meta_save_chkbx){echo "checked";}?> /><?php _e('Open link in new tab','wallstreet'); ?></p>

	<p><h4 class="heading"><label><?php _e('RSS URL','wallstreet');?></label></h4>
	<input style="width:70%; padding: 10px;"  name="rss_meta_save" id="rss_meta_save" placeholder="<?php _e("RSS URL","wallstreet"); ?>" value="<?php if(!empty($rss_meta_save)) echo esc_attr($rss_meta_save); ?>"/>
	<input type="checkbox" name="rss_meta_save_chkbx" id="rss_meta_save_chkbx" <?php if($rss_meta_save_chkbx){echo "checked";}?> /><?php _e('Open link in new tab','wallstreet'); ?></p>
	
	<p><h4 class="heading"><label><?php _e('LinkedIn URL','wallstreet');?></label></h4>
	<input style="width:70%;padding: 10px;"  name="lnkd_meta_save" id="lnkd_meta_save" placeholder="<?php _e("LinkedIn URL","wallstreet"); ?>" value="<?php if(!empty($lnkd_meta_save)) echo esc_attr($lnkd_meta_save); ?>"/>
	<input type="checkbox" name="lnkd_meta_save_chkbx" id="lnkd_meta_save_chkbx" <?php if($lnkd_meta_save_chkbx){echo "checked";}?> /><?php _e('Open link in new tab','wallstreet'); ?></p>
	
	<p><h4 class="heading"><?php _e('Twitter URL','wallstreet')?></h4>	 
	 <p><input style="width:70%; padding: 10px;"  name="twt_meta_save" id="twt_meta_save" placeholder="<?php _e("Twitter URL","wallstreet"); ?>"  value="<?php if(!empty($twt_meta_save)) echo esc_attr($twt_meta_save); ?>"/>	
	<input type="checkbox" name="twt_meta_save_chkbx" id="twt_meta_save_chkbx" <?php if($twt_meta_save_chkbx){echo "checked";}?> /><?php _e('Open link in new tab','wallstreet'); ?></p>
	<?php
	}
		function wallstreet_meta_client()
	{
	   global $post;
		$client_link = sanitize_text_field( get_post_meta( get_the_ID(), 'clientstrip_link', true ));
		$meta_client_target =sanitize_text_field( get_post_meta( get_the_ID(), 'meta_client_target', true ));	
	?>
	    <p><h4 class="heading"><?php _e('Link','wallstreet');?></h4>
	<p><input class="inputwidth"  name="client_link" id="client_link" style="width: 480px" placeholder="<?php _e('Link','wallstreet'); ?>" 
	type="text" value="<?php if (!empty($client_link)) echo esc_attr($client_link);?>"></input></p>
	<p><input type="checkbox" id="meta_client_target" name="meta_client_target" <?php if($meta_client_target) echo "checked"; ?> > <?php _e('Open link in new tab','wallstreet'); ?></p>	
	
	
		<p><label><?php _e('Upload client image using feature image. Best fit scenario is using 130 X 130 px image.','wallstreet'); ?></label></p>
	<?php
	}
	

function wallstreet_meta_save($post_id) 
{	
	if((defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) || (defined('DOING_AJAX') && DOING_AJAX) || isset($_REQUEST['bulk_edit']))
        return;
		
	if ( ! current_user_can( 'edit_page', $post_id ) )
	{     return ;	} 		
	if(isset($_POST['post_ID']))
	{ 	
		$post_ID = $_POST['post_ID'];				
		$post_type=get_post_type($post_ID);
		if($post_type=='wallstreet_slider'){ 		
			update_post_meta($post_ID, 'slider_title', sanitize_text_field($_POST['slider_title']));
			update_post_meta($post_ID, 'slider_description', sanitize_text_field($_POST['slider_description']));
			update_post_meta($post_ID, 'slider_button_text', sanitize_text_field($_POST['slider_button_text']));
			update_post_meta($post_ID, 'slider_button_link', sanitize_text_field($_POST['slider_button_link']));
			update_post_meta($post_ID, 'slider_button_target', sanitize_text_field($_POST['slider_button_target']));
		} 
		else if($post_type=='wallstreet_service'){							
			update_post_meta($post_ID, 'service_icon_image', sanitize_text_field($_POST['service_icon_image']));
			update_post_meta($post_ID, 'service_icon_target', sanitize_text_field($_POST['service_icon_target']));
			update_post_meta($post_ID, 'meta_service_link', sanitize_text_field($_POST['meta_service_link']));
			update_post_meta($post_ID, 'meta_service_target', sanitize_text_field($_POST['meta_service_target']));
			update_post_meta($post_ID, 'service_description_text', sanitize_text_field($_POST['service_description_text']));
			update_post_meta($post_ID, 'service_readmore_text', sanitize_text_field($_POST['service_readmore_text']));
			
		}		
		else if($post_type=='wallstreet_portfolio'){		
			update_post_meta($post_ID, 'portfolio_client_project_title', sanitize_text_field($_POST['portfolio_client_project_title']));
			update_post_meta($post_ID, 'meta_project_target', sanitize_text_field($_POST['meta_project_target']));	
			update_post_meta($post_ID, 'meta_project_link', sanitize_text_field($_POST['meta_project_link']));	
			update_post_meta($post_ID, 'portfolio_project_visit_site', sanitize_text_field($_POST['portfolio_project_visit_site']));
			update_post_meta($post_ID, 'portfolio_project_button_text', sanitize_text_field($_POST['portfolio_project_button_text']));
			update_post_meta($post_ID, 'portfolio_project_summary', sanitize_text_field($_POST['portfolio_project_summary']));
			update_post_meta($post_ID, 'meta_button_target', sanitize_text_field($_POST['meta_button_target']));
			update_post_meta($post_ID, 'meta_button_link', sanitize_text_field($_POST['meta_button_link']));
			 
		}		
		else if($post_type=='page'){
			update_post_meta($post_ID, 'page_description', sanitize_text_field($_POST['page_description']));
			update_post_meta($post_ID, 'content_page_layout', sanitize_text_field($_POST['content_page_layout']));
		}
		elseif($post_type=='post'){	
			update_post_meta($post_ID, 'post_description', sanitize_text_field($_POST['post_description']));
			update_post_meta($post_ID, 'content_post_layout', sanitize_text_field($_POST['content_post_layout']));
		}
		else if($post_type=='wallstreet_testi') {
			update_post_meta($post_ID, 'testimonial_description_text', sanitize_text_field($_POST['testimonial_description_text']));
		}
		else if($post_type=='wallstreet_team') {
			update_post_meta($post_ID, 'designation_meta_save', sanitize_text_field($_POST['designation_meta_save']));
			update_post_meta($post_ID, 'description_meta_save', sanitize_text_field($_POST['description_meta_save']));
			update_post_meta($post_ID, 'fb_meta_save', sanitize_text_field($_POST['fb_meta_save']));
			update_post_meta($post_ID, 'fb_meta_save_chkbx', sanitize_text_field($_POST['fb_meta_save_chkbx']));
			update_post_meta($post_ID, 'skype_meta_save', sanitize_text_field($_POST['skype_meta_save']));
			update_post_meta($post_ID, 'skype_meta_save_chkbx', sanitize_text_field($_POST['skype_meta_save_chkbx']));
			update_post_meta($post_ID, 'rss_meta_save', sanitize_text_field($_POST['rss_meta_save']));
			update_post_meta($post_ID, 'rss_meta_save_chkbx', sanitize_text_field($_POST['rss_meta_save_chkbx']));
			update_post_meta($post_ID, 'lnkd_meta_save', sanitize_text_field($_POST['lnkd_meta_save']));
			update_post_meta($post_ID, 'lnkd_meta_save_chkbx', sanitize_text_field($_POST['lnkd_meta_save_chkbx']));			
			update_post_meta($post_ID, 'twt_meta_save', sanitize_text_field($_POST['twt_meta_save']));
			update_post_meta($post_ID, 'twt_meta_save_chkbx', sanitize_text_field($_POST['twt_meta_save_chkbx']));
			}
			
		elseif($post_type=='wallstreet_client'){	
			    update_post_meta($post_ID, 'clientstrip_link', sanitize_text_field($_POST['client_link']));
				update_post_meta($post_ID, 'meta_client_target', sanitize_text_field($_POST['meta_client_target']));
				}	
	}			
} 
?>