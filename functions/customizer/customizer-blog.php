<?php
function wallstreet_blog_customizer( $wp_customize ) {

//Index-news Section
	$wp_customize->add_section(
        'news_section_settings',
        array(
            'title' => __('Home blog settings','wallstreet'),
            'priority'       => 750 )
    );
	
	
	// hide meta content
	$wp_customize->add_setting(
    'wallstreet_pro_options[home_meta_section_settings]',
    array(
        'default' => '',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[home_meta_section_settings]',
    array(
        'label' => __('Hide blog meta from home page','wallstreet'),
        'section' => 'news_section_settings',
        'type' => 'checkbox',
    )
	);
	
	// add section to manage News
	$wp_customize->add_setting(
    'wallstreet_pro_options[home_blog_heading]',
    array(
        'default' => __('Our latest blog post','wallstreet'),
		'capability'     => 'edit_theme_options',
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		)
	);	
	$wp_customize->add_control( 'wallstreet_pro_options[home_blog_heading]',array(
    'label'   => __('Title','wallstreet'),
    'section' => 'news_section_settings',
	 'type' => 'text',)  );	
	 
	 
	 $wp_customize->add_setting(
    'wallstreet_pro_options[home_blog_description]',
    array(
        'default' => __('We work with new customers and grow their businesses','wallstreet'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
		)
	);	
	$wp_customize->add_control('wallstreet_pro_options[home_blog_description]',array(
    'label'   => __('Description','wallstreet'),
    'section' => 'news_section_settings',
	 'type' => 'textarea',)  );


	// Blog Design layout
	$wp_customize->add_setting(
    'wallstreet_pro_options[home_blog_design]',
    array(
        'default' => 1,
		'type' => 'option',
    )
	);

	$wp_customize->add_control(
    'wallstreet_pro_options[home_blog_design]',
    array(
        'type' => 'select',
        'label' => __('Blog design style','wallstreet'),
        'section' => 'news_section_settings',
		 'choices' => array(1=>__('Grid View','wallstreet'), 2=>__('Masonry 2 Column','wallstreet'), 3=>__('Masonry 3 Column','wallstreet'), 4=>__('Masonry 4 Column','wallstreet'), 5=>__('List Style','wallstreet'), 6=>__('Switcher List Style','wallstreet')),
		));

	$wp_customize->add_setting(
    'wallstreet_pro_options[home_blog_counts]',
    array(
        'default' => 3,
		'type' => 'option',
    )
	);

	$wp_customize->add_control(
    'wallstreet_pro_options[home_blog_counts]',
    array(
        'type' => 'select',
        'label' => __('No of Post','wallstreet'),
        'section' => 'news_section_settings',
		 'choices' => array(1=>1,2=>2,3=>3,4=>4,5=>5,6=>6,7=>7,8=>8,9=>9),
		));
		

	//View all posts Button Enable
	 $wp_customize->add_setting(
    'wallstreet_pro_options[view_all_posts_btn_enabled]',
    array(
        'default' => true,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
		));	
	
	$wp_customize->add_control( 'wallstreet_pro_options[view_all_posts_btn_enabled]',array(
    'label'   => __('Enable view all posts button','wallstreet'),
    'section' => 'news_section_settings',
	 'type' => 'checkbox',)  );	
	 
	 
	 //View all posts Button text
	 $wp_customize->add_setting(
    'wallstreet_pro_options[view_all_posts_text]',
    array(
        'default' => __('View All Posts','wallstreet'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
		)
	);	
	$wp_customize->add_control( 'wallstreet_pro_options[view_all_posts_text]',array(
    'label'   => __('Button Text','wallstreet'),
    'section' => 'news_section_settings',
	 'type' => 'text',)  );
	 
	 
	  //View all posts Button Link
	 $wp_customize->add_setting(
    'wallstreet_pro_options[all_posts_link]',
    array(
        'default' =>'#',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
		));	
	
	$wp_customize->add_control( 'wallstreet_pro_options[all_posts_link]',array(
    'label'   => __('Button Link','wallstreet'),
    'section' => 'news_section_settings',
	 'type' => 'text',)  );
	 
	 //View all portfolio Button Link
	 $wp_customize->add_setting(
    'wallstreet_pro_options[view_all_lnik_target]',
    array(
        'default' => false,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
		'description' => 'Open link in a new window/tab',
		));	
	
	$wp_customize->add_control( 'wallstreet_pro_options[view_all_lnik_target]',array(
    'label'   => __('Open link in new tab','wallstreet'),
    'section' => 'news_section_settings',
	 'type' => 'checkbox',)  );
	
		}
	add_action( 'customize_register', 'wallstreet_blog_customizer' );
	?>