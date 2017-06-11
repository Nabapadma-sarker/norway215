<?php
/**
* @Theme Name	:	wallstreet-Pro
* @file         :	theme_stup_data.php
* @package      :	wallstreet-Pro
* @author       :	webriti
* @filesource   :	wp-content/themes/wallstreet/theme_stup_data.php
*/
function theme_data_setup()
{	
	return $theme_options=array(
			//Logo and Fevicon header			
			'upload_image_logo'=>'',
			'height'=>'50',
			'width'=>'250',
			'text_title'=> true,
			'upload_image_favicon'=>'',
			'webriti_stylesheet'=>'default.css',			
			'google_analytics'=>'',
			'webrit_custom_css'=>'',
			'link_color' => '#00c2a9',
			//Slide
			'home_slider_enabled'=>true,
			'animation' => 'slide',								
			'animationSpeed' => '1500',
			'slide_direction' => 'horizontal',
			'slideshowSpeed' => '2500',
			
			// service
			'other_service_section_enabled' => true,
			'service_list' => 3,
			'service_title'=> __('Our Services','wallstreet'),
			'service_description' => __('We offer great services to our clients','wallstreet'),
			'other_service_title' => __('Other services','wallstreet'),
			'other_service_description' => __('We offer great services to our clients','wallstreet'),
			
			//portfolio
			'view_all_projects_btn_enabled' => true,
			'portfolio_list' => 4,
			'portfolio_title' => __('Featured portfolio project','wallstreet'),
			'portfolio_description' => __('Most popular of our works.','wallstreet'),
			'related_portfolio_title' => __('Related projects','wallstreet'),
			'related_portfolio_description' => __('We offer great services to our clients','wallstreet'),
			'portfolio_more_text' => __('View All Projects','wallstreet'),
			'portfolio_more_link' => '',			
			'portfolio_more_lnik_target' => false,
			
			//Taxonomy Archive Portfolio
			'taxonomy_portfolio_list' => 2,
			'wallstreet_products_category_slug' => 'portfolio-categories',
			'wallstreet_texonomy_title' => __('Featured portfolio project','wallstreet'),
			'wallstreet_texonomy_desc' => __('Most popular of our works.','wallstreet'),
			
			
			//Theme Features
			'theme_feature_enabled' => true,
			'theme_feature_image' => WEBRITI_TEMPLATE_DIR_URI . "/images/desk-image.png",
			'theme_feature_title' => __('Core features of theme','wallstreet'),
			'theme_first_feature_icon' => 'fa-sliders',
			'theme_first_title' => __('Incredibly flexible','wallstreet'),
			'theme_first_description' => 'Perspiciatis unde omnis iste natus error sit voluptaem omnis iste.',
			'theme_second_feature_icon' => 'fa-paper-plane-o',
			'theme_second_title' => __('Incredibly flexible','wallstreet'),
			'theme_second_description' => 'Perspiciatis unde omnis iste natus error sit voluptaem omnis iste.',
			'theme_third_feature_icon' => 'fa-bolt',
			'theme_third_title' => __('Incredibly flexible','wallstreet'),
			'theme_third_description' => 'Perspiciatis unde omnis iste natus error sit voluptaem omnis iste.',
			'theme_feature_background' => WEBRITI_TEMPLATE_DIR_URI . "/images/tweet-bg.jpg",
			
			//client
			'client_list'=>'',
			'total_client'=>'',
			'home_client_title'=> __('Our Clients','wallstreet'),
			'home_client_description'=> __('Have a look at our client we are growing their business and they are going up in the market by beating their competitors.','wallstreet'),
			
			
			'head_one_team' => __('Meet our','wallstreet'),
			'head_two_team' => __('Great team','wallstreet'),
			'related_project_heading' => __('Related projects','wallstreet'),
			
			'call_out_area_enabled' => true,
			'call_out_title'=> __('Wallstreet is an elegant and modern theme for business websites.','wallstreet'),
			'call_out_text'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eros elit, pretium et adipiscing vel, consectetur adipiscing elit.',
			'call_out_button_text'=> __('See All Feature','wallstreet'),
			'call_out_button_link'=>'#',
			'call_out_button_link_target' =>'on',
			
			// front page
			'front_page_data'=>'service,portfolio,testimonials,blog,features,client',
			
			//Slug
			'wallstreet_slider_slug' => 'wallstreet_slider',
			'wallstreet_service_slug' => 'wallstreet_service',
			'wallstreet_team_slug' => 'wallstreet_team',
			'wallstreet_portfolio_slug' => 'wallstreet_portfolio',
			'wallstreet_client_slug' => 'wallstreet_client',
			'wallstreet_testimonial_slug' => 'wallstreet_testimonial',
			
			//Testimonial Settings			
			'testi_slide_type' => 'scroll',
			'testi_scroll_items' => '1',
			'testi_timeout_dura' => '2000',
			'testi_scroll_dura' => '1500',
			'testi_background' => WEBRITI_TEMPLATE_DIR_URI . "/images/testimonial-bg.jpg",
					
			//Post Type slug Options			
			'service_slug' => 'wallstreet_service',
			'portfolio_slug' => 'wallstreet_portfolio',
			
			//contact page settings
			'contact_header_settings' => 'on',			
			'contact_google_map_enabled'=>'on',
			'contact_google_map_title' => __('Location map','wallstreet'),
			'contact_google_map_url' => 'https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Kota+Industrial+Area,+Kota,+Rajasthan&amp;aq=2&amp;oq=kota+&amp;sll=25.003049,76.117499&amp;sspn=0.020225,0.042014&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Kota+Industrial+Area,+Kota,+Rajasthan&amp;z=13&amp;ll=25.142832,75.879538',
			
			'contact_address_settings' => 'on',
			'contact_address_icon' => 'fa-map-marker',
			'contact_address_title' => __('Address','wallstreet'),
			'contact_address_designation_one' => 'Hoffman Parkway, P.O. Box 353',
			'contact_address_designation_two' => 'Mountain View. USA',
			
			'contact_phone_settings' => 'on',
			'contact_phone_icon' => 'fa-phone',
			'contact_phone_title' => 'Phone',
			'contact_phone_number_one' => '1-800-123-789',
			'contact_phone_number_two' => '1-800-123-789',
			
			'contact_email_settings' => 'on',
			'contact_email_icon' => 'fa-inbox',
			'contact_email_title' => 'Email',
			'contact_email_number_one' => 'info@webriti.com',
			'contact_email_number_two' => 'www.webriti.com',
			
			'contact_form_title' => __('Drop us a mail','wallstreet'),
			'contact_form_description' => __('Feel free to write us a message','wallstreet'),

			// Head Titles
			'about_team_title' => __('Our great team','wallstreet'),
			'about_team_description' => __('We offer great services to our clients','wallstreet'),
			'home_blog_heading'=> __('Our latest blog post','wallstreet'),
			'home_blog_description' => __('We work with new customers and grow their businesses','wallstreet'),
			
			//Blog Meta
			'home_meta_section_settings' => false ,
			'blog_meta_section_settings' => false , 
			'page_meta_section_settings' => false,
			'archive_page_meta_section_settings' => false,
			
			/** Social media links **/
			'about_social_media_enabled'=>true,
			'header_social_media_enabled'=>true,			
			'footer_social_media_enabled'=>true,			
			'social_media_twitter_link' =>"#",			
			'social_media_facebook_link' =>"#",
			'social_media_googleplus_link' =>"#",
			'social_media_linkedin_link' =>"#",
			'social_media_pinterest_link' =>"#",		
			'social_media_youtube_link' =>"#",
			'social_media_skype_link' =>"#",			
			'social_media_rssfeed_link' =>"#",		
			'social_media_wordpress_link' =>"#",
			'social_media_dropbox_link' =>"#",
			
			// Typography 
			'enable_custom_typography'=>false,				
			
			// general typography			
			'general_typography_fontsize'=>'16',
			'general_typography_fontfamily'=>'RobotoRegular',
			'general_typography_fontstyle'=>"",
			
			// menu title
			'menu_title_fontsize'=>'16',
			'menu_title_fontfamily'=>'RobotoRegular',
			'menu_title_fontstyle'=>"",
			
			// post title
			'post_title_fontsize'=>'40',
			'post_title_fontfamily'=>'RobotoLight',
			'post_title_fontstyle'=> "",
					
			// Service  title
			'service_title_fontsize'=>'24',
			'service_title_fontfamily'=>'RobotoRegular',
			'service_title_fontstyle'=>"",
			
			// Potfolio  title Widget Heading Title
			'portfolio_title_fontsize'=>'18',
			'portfolio_title_fontfamily'=>'RobotoMedium',
			'portfolio_title_fontstyle'=>"",
			
			// Widget Heading Title
			'widget_title_fontsize'=>'24',
			'widget_title_fontfamily'=>'RobotoRegular',
			'widget_title_fontstyle'=>"",
			
			// Call out area Title   
			'calloutarea_title_fontsize'=>'24',
			'calloutarea_title_fontfamily'=>'RobotoLight',
			'calloutarea_title_fontstyle'=>"",
			
			// Call out area descritpion      
			'calloutarea_description_fontsize'=>'15',
			'calloutarea_description_fontfamily'=>'RobotoRegular',
			'calloutarea_description_fontstyle'=>"",
			
			// Call out area purches button      
			'calloutarea_purches_fontsize' => '18',	
			'calloutarea_purches_fontfamily' => 'RobotoRegular',	
			'calloutarea_purches_fontstyle' => '',
			
			/** footer customization **/
			'footer_copyright' => __('Copyright @ 2016 - WallStreet. Designed by','wallstreet').' '.'<a href="http://webriti.com" rel="nofollow" target="_blank">'.__('Webriti','wallstreet').'</a>',
		);
}
?>