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
			'upload_image_favicon'=>'',
			'webriti_stylesheet'=>'default.css',			
			'google_analytics'=>'',
			'webrit_custom_css'=>'',
			'link_color' => '#00c2a9',
			//Scroll to top
			'scroll_to_top_enabled'=>true,
			//Slide
			'home_slider_enabled'=>true,
			'animation' => 'slide',								
			'animationSpeed' => '1500',
			'slide_direction' => 'horizontal',
			'slideshowSpeed' => '2500',
			'home_slider_desktop_title_enabled'=>true,
			'home_slider_desktop_subtitle_enabled'=>true,
			'home_slider_desktop_desc_enabled'=>true,
			'home_slider_desktop_button_enabled'=>true,
			
			'home_slider_mobile_title_enabled'=>true,
			'home_slider_mobile_subtitle_enabled'=>true,
			'home_slider_mobile_desc_enabled'=>true,
			'home_slider_mobile_button_enabled'=>true,
			
			// service
			'other_service_section_enabled' => true,
			'service_list' => 3,
			'service_variation' => 1,
			'service_title'=> __('Our Services','wallstreet'),
			'service_description' => __('We offer great services to our clients','wallstreet'),
			'other_service_title' => __('Other services','wallstreet'),
			'other_service_description' => __('We offer great services to our clients','wallstreet'),
			'service_hover_change_effect'=>true,
			
			//portfolio
			'view_all_projects_btn_enabled' => true,
			'portfolio_homepage_column_laouts'=>3,
			'portfolio_list' => 4,
			'portfolio_title' => __('Featured portfolio','wallstreet'),
			'portfolio_description' => __('Most popular of our works.','wallstreet'),
			'related_portfolio_title' => __('Related projects','wallstreet'),
			'related_portfolio_description' => __('We offer great services to our clients','wallstreet'),
			'two_thre_four_col_port_tem_title' => __('Our Portfolio','wallstreet'),
			'two_thre_four_col_port_tem_desc' => __('Most popular of our works','wallstreet'),
			'portfolio_numbers_on_templates' => 4,
			'portfolio_numbers_for_templates_category' => 8,
			'portfolio_more_text' => __('View All Projects','wallstreet'),
			'portfolio_more_link' => '',			
			'portfolio_more_lnik_target' => false,
			'related_portfolio_project_hide_show'=>true,
			
			// Blog
			'view_all_posts_btn_enabled' => true,
			'view_all_posts_text' => __('View All Posts','wallstreet'),
			'all_posts_link' => '',			
			'view_all_lnik_target' => false,
			
			//Taxonomy Archive Portfolio
			'taxonomy_portfolio_list' => 2,
			'wallstreet_products_category_slug' => 'portfolio-categories',
			'wallstreet_texonomy_title' => __('Featured portfolio','wallstreet'),
			'wallstreet_texonomy_desc' => __('Most popular of our works.','wallstreet'),
			
			
			//Theme Features
			'theme_feature_enabled' => true,
			'theme_feature_image' => WEBRITI_TEMPLATE_DIR_URI . "/images/desk-image.png",
			'feature_image_link' => '#',
			'image_link_target' => true,
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
			'home_client_description'=> __('Have a look at our clients we are growing their business and they are going up in the market by beating their competitors.','wallstreet'),
			
			//Home Team Section
			'team_design_style'=>1,
			'team_design_layout_style'=>4,
			'home_team_title'=>__('The Team','wallstreet'),
			'home_team_description'=>__('Meet Our Experts','wallstreet'),

			//Team Template Section
			'team_template_team_section_show_hide' => true,
			'team_template_feature_section_show_hide' => true,
			'team_template_client_section_show_hide' => true,

			//Testimonial template section
			'testi_template_cta_section_show_hide' => true,
			'testi_cta_title'=> __('Why choose us','wallstreet'),
			'testi_cta_description' => __('We offer great services to our clients','wallstreet'),
			'testi_template_testi_section_show_hide' => true,
			'testi_template_client_section_show_hide' => true,

			
			'head_one_team' => __('Meet our','wallstreet'),
			'head_two_team' => __('Great team','wallstreet'),
			'related_project_heading' => __('Related projects','wallstreet'),
			
			'call_out_area_enabled' => true,
			'call_out_title'=> __('Wallstreet is an elegant and modern theme for business websites.','wallstreet'),
			'call_out_text'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eros elit, pretium et adipiscing vel, consectetur adipiscing elit.',
			'call_out_button_text'=> __('See All Features','wallstreet'),
			'call_out_button_link'=>'#',
			'call_out_button_link_target' =>'on',
			
			// front page
			'front_page_data'=>'service,portfolio,team,testimonials,blog,features,client',
			
			//Slug
			'wallstreet_slider_slug' => 'wallstreet_slider',
			'wallstreet_service_slug' => 'wallstreet_service',
			'wallstreet_team_slug' => 'wallstreet_team',
			'wallstreet_portfolio_slug' => 'wallstreet_portfolio',
			'wallstreet_client_slug' => 'wallstreet_client',
			'wallstreet_testimonial_slug' => 'wallstreet_testimonial',
			
			//Testimonial Settings			
			'testi_slide_type' => 'scroll',
			'testi_design_style' => 1,
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
			
			'contact_header_contact_settings'=>'+1-800-123-789',
			'contact_header_email_settings'=>'info@webriti.com',
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

			//Header Preset
			'header_presets_stlyle' =>1,
			'enable_search_btn' => true,
			'search_effect_style_setting' => 'toogle',

			// Head Titles
			'about_team_section_show_hide' => true,
			'about_callout_section_show_hide' => true,
			'about_team_title' => __('Our great team','wallstreet'),
			'about_team_description' => __('We offer great services to our clients','wallstreet'),
			'home_blog_heading'=> __('Our latest blog post','wallstreet'),
			'home_blog_description' => __('We work with new customers and grow their businesses','wallstreet'),
			'home_blog_counts'=>3,
			'home_blog_design'=>1,
			
			//Blog Meta
			'blog_template_content_excerpt_get_seting'=>'content',
			'blog_template_content_excerpt_length'=>275,
			'blog_template_read_more'=>'Read More',
			'home_meta_section_settings' => false ,
			'blog_meta_section_settings' => false , 
			'page_meta_section_settings' => false,
			'archive_page_meta_section_settings' => false,
			
			
			/** Social media links **/
			'about_social_media_enabled'=>true,
			'header_social_media_enabled'=>true,			
			'footer_social_media_enabled'=>true,	
			'social_media_twitter_link' =>"#",	
			'twitter_link_new_tab' => false,
			'social_media_facebook_link' =>"#",
			'facebook_link_new_tab' => false,
			'social_media_linkedin_link' =>"#",
			'linkdin_link_new_tab' => false,
			'social_media_pinterest_link' =>"#",
			'pintrest_link_new_tab' => false,			
			'social_media_youtube_link' =>"#",
			'youtube_link_new_tab' => false,
			'social_media_skype_link' =>"#",
			'skype_link_new_tab' => false,			
			'social_media_rssfeed_link' =>"#",
			'rss_link_new_tab' => false,			
			'social_media_wordpress_link' =>"#",
			'wp_link_new_tab' => false,
			'social_media_dropbox_link' =>"#",
			'db_link_new_tab' => false,
			'social_media_instagram_link' =>"#",
			'insta_link_new_tab' => false,
			'social_media_vimeo_link' =>"",
			'vimeo_link_new_tab' => false,

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
			'footerbar_enabled' => true,
			'footer_copyright' => __('Copyright @ 2016 - WallStreet. Designed by','wallstreet').' '.'<a href="http://webriti.com" rel="nofollow" target="_blank">'.__('Webriti','wallstreet').'</a>',
		);
}
?>