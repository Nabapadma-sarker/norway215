<?php
function wallstreet_social_customizer( $wp_customize ) {
/* Header Section */
	$wp_customize->add_panel( 'social_link_options', array(
		'priority'       => 450,
		'capability'     => 'edit_theme_options',
		'title'      => __('Social link settings', 'wallstreet'),
	) );
	
	//Header social Icon

	$wp_customize->add_section(
        'social_icon',
        array(
            'title' => __('Social Links','wallstreet'),
           'priority'    => 400,
			'panel' => 'social_link_options',
        )
    );
	
	//Show and hide Header Social Icons
	$wp_customize->add_setting(
	'wallstreet_pro_options[header_social_media_enabled]'
    ,
    array(
        'default' => true,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[header_social_media_enabled]',
    array(
        'label' => __('Enable social media links on header section','wallstreet'),
        'section' => 'social_icon',
        'type' => 'checkbox',
    )
	);
	
	//About enable/disable social icon
	$wp_customize->add_setting(
	'wallstreet_pro_options[about_social_media_enabled]'
    ,
    array(
        'default' => true,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[about_social_media_enabled]',
    array(
        'label' => __('Enable social media links on about us section','wallstreet'),
        'section' => 'social_icon',
        'type' => 'checkbox',
    )
	);
	
	//Footer enable/disable social icon
	$wp_customize->add_setting(
	'wallstreet_pro_options[footer_social_media_enabled]'
    ,
    array(
        'default' => true,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[footer_social_media_enabled]',
    array(
        'label' => __('Enable social media links on footer section','wallstreet'),
        'section' => 'social_icon',
        'type' => 'checkbox',
    )
	);
	
	//twitter link
	
	$wp_customize->add_setting(
    'wallstreet_pro_options[social_media_twitter_link]',
    array(
        'default' => '#',
		'type' => 'theme_mod',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[social_media_twitter_link]',
    array(
        'label' => __('Twitter URL','wallstreet'),
        'section' => 'social_icon',
        'type' => 'text',
    )
	);
	
	//twitter link new tab/window 
	$wp_customize->add_setting(
	'wallstreet_pro_options[twitter_link_new_tab]'
    ,
    array(
        'default' => false,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[twitter_link_new_tab]',
    array(
        'label' => __('Open link in new tab','wallstreet'),
        'section' => 'social_icon',
        'type' => 'checkbox',
    )
	);
	

	// Facebook link
	$wp_customize->add_setting(
    'wallstreet_pro_options[social_media_facebook_link]',
    array(
        'default' => '#',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[social_media_facebook_link]',
    array(
        'label' => __('Facebook URL','wallstreet'),
        'section' => 'social_icon',
        'type' => 'text',
    )
	);
	
	
	//facebook link new tab/window 
	$wp_customize->add_setting(
	'wallstreet_pro_options[facebook_link_new_tab]'
    ,
    array(
        'default' => false,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[facebook_link_new_tab]',
    array(
        'label' => __('Open link in new tab','wallstreet'),
        'section' => 'social_icon',
        'type' => 'checkbox',
    )
	);
	
	//Linkdin link
	
	$wp_customize->add_setting(
	'wallstreet_pro_options[social_media_linkedin_link]' ,
    array(
        'default' => '#',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[social_media_linkedin_link]',
    array(
        'label' => __('LinkedIn URL','wallstreet'),
        'section' => 'social_icon',
        'type' => 'text',
    )
	);
	
	//linkdin link new tab/window 
	$wp_customize->add_setting(
	'wallstreet_pro_options[linkdin_link_new_tab]'
    ,
    array(
        'default' => false,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[linkdin_link_new_tab]',
    array(
        'label' => __('Open link in new tab','wallstreet'),
        'section' => 'social_icon',
        'type' => 'checkbox',
    )
	);
	
	//Pinterest Profile Link:
	
	$wp_customize->add_setting(
	'wallstreet_pro_options[social_media_pinterest_link]' ,
    array(
        'default' => '#',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[social_media_pinterest_link]',
    array(
        'label' => __('Pinterest URL','wallstreet'),
        'section' => 'social_icon',
        'type' => 'text',
    )
	);
	
	//linkdin link new tab/window 
	$wp_customize->add_setting(
	'wallstreet_pro_options[pintrest_link_new_tab]'
    ,
    array(
        'default' => false,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[pintrest_link_new_tab]',
    array(
        'label' => __('Open link in new tab','wallstreet'),
        'section' => 'social_icon',
        'type' => 'checkbox',
    )
	);
	
	//Youtube Profile Link:
	
	$wp_customize->add_setting(
	'wallstreet_pro_options[social_media_youtube_link]' ,
    array(
        'default' => '#',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[social_media_youtube_link]',
    array(
        'label' => __('Youtube URL','wallstreet'),
        'section' => 'social_icon',
        'type' => 'text',
    )
	);
	
	//youtube link new tab/window 
	$wp_customize->add_setting(
	'wallstreet_pro_options[youtube_link_new_tab]'
    ,
    array(
        'default' => false,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[youtube_link_new_tab]',
    array(
        'label' => __('Open link in new tab','wallstreet'),
        'section' => 'social_icon',
        'type' => 'checkbox',
    )
	);
	
	//Skype Profile Link:
	$wp_customize->add_setting(
	'wallstreet_pro_options[social_media_skype_link]' ,
    array(
        'default' => '#',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[social_media_skype_link]',
    array(
        'label' => __('Skype URL','wallstreet'),
        'section' => 'social_icon',
        'type' => 'text',
    )
	);
	
	//skype link new tab/window 
	$wp_customize->add_setting(
	'wallstreet_pro_options[skype_link_new_tab]'
    ,
    array(
        'default' => false,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[skype_link_new_tab]',
    array(
        'label' => __('Open link in new tab','wallstreet'),
        'section' => 'social_icon',
        'type' => 'checkbox',
    )
	);
	
	//Rss Feed Link:
	
	$wp_customize->add_setting(
	'wallstreet_pro_options[social_media_rssfeed_link]' ,
    array(
        'default' => '#',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[social_media_rssfeed_link]',
    array(
        'label' => __('RSS URL','wallstreet'),
        'section' => 'social_icon',
        'type' => 'text',
    )
	);
	
	//skype link new tab/window 
	$wp_customize->add_setting(
	'wallstreet_pro_options[rss_link_new_tab]'
    ,
    array(
        'default' => false,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[rss_link_new_tab]',
    array(
        'label' => __('Open link in new tab','wallstreet'),
        'section' => 'social_icon',
        'type' => 'checkbox',
    )
	);
	
	//WordPress Profile Link:
	
	$wp_customize->add_setting(
	'wallstreet_pro_options[social_media_wordpress_link]' ,
    array(
        'default' => '#',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[social_media_wordpress_link]',
    array(
        'label' => __('WordPress URL','wallstreet'),
        'section' => 'social_icon',
        'type' => 'text',
    )
	);
	
	//wordpress link new tab/window 
	$wp_customize->add_setting(
	'wallstreet_pro_options[wp_link_new_tab]'
    ,
    array(
        'default' => false,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[wp_link_new_tab]',
    array(
        'label' => __('Open link in new tab','wallstreet'),
        'section' => 'social_icon',
        'type' => 'checkbox',
    )
	);
	
	//Dropbox Profile Link:
	
	$wp_customize->add_setting(
	'wallstreet_pro_options[social_media_dropbox_link]' ,
    array(
        'default' => '#',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[social_media_dropbox_link]',
    array(
        'label' => __('Dropbox URL','wallstreet'),
        'section' => 'social_icon',
        'type' => 'text',
    )
	);
	
	//wordpress link new tab/window 
	$wp_customize->add_setting(
	'wallstreet_pro_options[db_link_new_tab]'
    ,
    array(
        'default' => false,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[db_link_new_tab]',
    array(
        'label' => __('Open link in new tab','wallstreet'),
        'section' => 'social_icon',
        'type' => 'checkbox',
    )
	);
	
	
	//Instagram Profile Link:
	
	$wp_customize->add_setting(
	'wallstreet_pro_options[social_media_instagram_link]' ,
    array(
        'default' => '#',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[social_media_instagram_link]',
    array(
        'label' => __('Instagram URL','wallstreet'),
        'section' => 'social_icon',
        'type' => 'text',
    )
	);
	
	//Instagram link new tab/window 
	$wp_customize->add_setting(
	'wallstreet_pro_options[insta_link_new_tab]'
    ,
    array(
        'default' => false,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[insta_link_new_tab]',
    array(
        'label' => __('Open link in new tab','wallstreet'),
        'section' => 'social_icon',
        'type' => 'checkbox',
    )
	);
	
	
	//Vimeo Profile Link:
	
	$wp_customize->add_setting(
	'wallstreet_pro_options[social_media_vimeo_link]' ,
    array(
        'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )
	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[social_media_vimeo_link]',
    array(
        'label' => __('Vimeo URL','wallstreet'),
        'section' => 'social_icon',
        'type' => 'text',
    )
	);
	
	//Vimeo link new tab/window 
	$wp_customize->add_setting(
	'wallstreet_pro_options[vimeo_link_new_tab]'
    ,
    array(
        'default' => false,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[vimeo_link_new_tab]',
    array(
        'label' => __('Open link in new tab','wallstreet'),
        'section' => 'social_icon',
        'type' => 'checkbox',
    )
	);
	
	
	
	}
	add_action( 'customize_register', 'wallstreet_social_customizer' );
	?>