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
		}
	add_action( 'customize_register', 'wallstreet_blog_customizer' );
	?>