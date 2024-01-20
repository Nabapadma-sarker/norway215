<?php
function wallstreet_header_customizer( $wp_customize ) {

/* Header Section */
	$wp_customize->add_panel( 'header_options', array(
		'priority'       => 450,
		'capability'     => 'edit_theme_options',
		'title'      => __('Header settings', 'wallstreet'),
	) );
	
	/* favicon option */
    $wp_customize->add_section( 'wallstreet_favicon' , array(
      'title'       => __('Site Favicon','wallstreet'),
      'priority'    => 300,
      'description' => __( 'Upload a Favicon', 'wallstreet' ),
	  'panel'  => 'header_options',
    ) );
    
    $wp_customize->add_setting('wallstreet_pro_options[upload_image_favicon]', array(
      'sanitize_callback' => 'esc_url_raw',
	   'capability'     => 'edit_theme_options',
	   'type' => 'option', 
    ) );
    
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wallstreet_pro_options[upload_image_favicon]', array(
      'label'    => __( 'Upload a Favicon (ideal width and height is 16x16 or 32x32)', 'wallstreet' ),
      'section'  => 'wallstreet_favicon',
    ) ) );
	
	
	
	//Header social Icon

	$wp_customize->add_section(
        'header_social_icon',
        array(
            'title' => __('Social Links','wallstreet'),
           'priority'    => 400,
			'panel' => 'header_options',
        )
    );
	


	

	
	//Custom css
	$wp_customize->add_section( 'custom_css' , array(
		'title'      => __('Custom CSS', 'wallstreet'),
		'panel'  => 'header_options',
		'priority'   => 100,
   	) );
	$wp_customize->add_setting(
	'wallstreet_pro_options[webrit_custom_css]'
		, array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type'=> 'option',
    ));
    $wp_customize->add_control( 'wallstreet_pro_options[webrit_custom_css]', array(
        'label'   => __('Custom CSS', 'wallstreet'),
        'section' => 'custom_css',
        'type' => 'textarea',
		'priority'   => 100,
    )); 


	//Custom css
	$wp_customize->add_section( 'header_contact' , array(
		'title'      => __('Header contact settings', 'wallstreet'),
		'panel'  => 'header_options',
		'priority'   => 500,
   	) );
	
	//Text logo
	$wp_customize->add_setting(
	'wallstreet_pro_options[contact_header_settings]'
    ,array(
	'default' => true,
	'type' =>'option',
	
	));

	$wp_customize->add_control(
    'wallstreet_pro_options[contact_header_settings]',
    array(
        'type' => 'checkbox',
        'label' => __('Enable/Disable contact header','wallstreet'),
        'section' => 'header_contact',
		'priority'   => 500,
    )
	);

	$wp_customize->add_setting(
	'wallstreet_pro_options[contact_header_contact_settings]'
    ,array(
	'default' => '+1-800-123-789',
	'type' =>'option',
	
	));

	$wp_customize->add_control(
    'wallstreet_pro_options[contact_header_contact_settings]',
    array(
        'type' => 'text',
        'label' => __('Header contact info','wallstreet'),
        'section' => 'header_contact',
		'priority'   => 500,
    )
	);

	$wp_customize->add_setting(
	'wallstreet_pro_options[contact_header_email_settings]'
    ,array(
	'default' => 'info@webriti.com',
	'type' =>'option',
	
	));

	$wp_customize->add_control(
    'wallstreet_pro_options[contact_header_email_settings]',
    array(
        'type' => 'text',
        'label' => __('Header email info','wallstreet'),
        'section' => 'header_contact',
		'priority'   => 500,
    )
	);


	//Header Preset
	$wp_customize->add_section( 'header_presets' , array(
		'title'      => __('Header Preset settings', 'wallstreet'),
		'panel'  => 'header_options',
		'priority'   => 600,
   	) );

   $wp_customize->add_setting(
    'wallstreet_pro_options[header_presets_stlyle]',
    array(
        'default' => 1,
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		
    )
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[header_presets_stlyle]',
    array(
        'type' => 'select',
        'label' => __('Select header preset style','wallstreet'),
        'section' => 'header_presets',
		 'choices' => array(1=>__('Style 1','wallstreet'), 2=>__('Style 2','wallstreet'), 3=>__('Style 3','wallstreet'), 4=>__('Style 4','wallstreet'), 5=>__('Style 5','wallstreet'), 6=>__('Style 6','wallstreet')),
		));

	//Search Enable Search button
	$wp_customize->add_setting(
	'wallstreet_pro_options[enable_search_btn]'
    ,array(
	'default' => true,
	'type' =>'option',
	
	));

	$wp_customize->add_control(
    'wallstreet_pro_options[enable_search_btn]',
    array(
        'type' => 'checkbox',
        'label' => __('Enable/Disable Search Icon','wallstreet'),
        'section' => 'header_presets',
		'priority'   => 500,
    )
	);
	//SEARCH EFFECT OR STYLES
	$wp_customize->add_setting('wallstreet_pro_options[search_effect_style_setting]', 
	array(
		'default' 			=> 'toogle',
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field'
		)
	);

	$wp_customize->add_control('wallstreet_pro_options[search_effect_style_setting]', 
	array(		
		'label' 	=> esc_html__('Choose Position', 'wallstreet'),		
		'section' 	=> 'header_presets',
		'type' => 'select',
		'choices' 	=>  array(
			'toogle' 	=> esc_html__('Toogle', 'wallstreet'),
			'popup_light' 	=> esc_html__('Pop up light', 'wallstreet'),
			'popup_dark' 	=> esc_html__('Pop up dark', 'wallstreet'),
			)
		)
	);
	}
	add_action( 'customize_register', 'wallstreet_header_customizer' );
	?>