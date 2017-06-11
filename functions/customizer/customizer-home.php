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
      'title'       => __('Site favicon','wallstreet'),
      'priority'    => 300,
      'description' => __( 'Upload a favicon', 'wallstreet' ),
	  'panel'  => 'header_options',
    ) );
    
    $wp_customize->add_setting('wallstreet_pro_options[upload_image_favicon]', array(
      'sanitize_callback' => 'esc_url_raw',
	   'capability'     => 'edit_theme_options',
	   'type' => 'option', 
    ) );
    
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wallstreet_pro_options[upload_image_favicon]', array(
      'label'    => __( 'Choose your favicon (ideal width and height is 16x16 or 32x32)', 'wallstreet' ),
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
	
	//Header logo setting
	$wp_customize->add_section( 'header_logo' , array(
		'title'      => __('Header logo setting', 'wallstreet'),
		'panel'  => 'header_options',
		'priority'   => 400,
   	) );
	$wp_customize->add_setting(
		'wallstreet_pro_options[upload_image_logo]'
		, array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
		'type' => 'option',
    ));
	
	$wp_customize->add_control(
		   new WP_Customize_Image_Control(
			   $wp_customize,
			   'wallstreet_pro_options[upload_image_logo]',
			   array(
				   'label'          => __( 'Upload a 150x150 for Logo Image', 'wallstreet' ),
				   'section'        => 'header_logo',
				   'priority'   => 50,
			   )
		   )
	);
	
	//Enable/Disable logo text
	$wp_customize->add_setting(
    'wallstreet_pro_options[text_title]',array(
	'default'    => true,
	'sanitize_callback' => 'sanitize_text_field',
	'type' => 'option'
	));

	$wp_customize->add_control(
    'wallstreet_pro_options[text_title]',
    array(
        'type' => 'checkbox',
        'label' => __('Enable/Disable Logo','wallstreet'),
        'section' => 'header_logo',
		'priority'   => 100,
    )
	);
	
	
	//Logo width
	
	$wp_customize->add_setting(
    'wallstreet_pro_options[width]',array(
	'sanitize_callback' => 'sanitize_text_field',
	'default' => 250,
	'type' => 'option',
	
	));

	$wp_customize->add_control(
    'wallstreet_pro_options[width]',
    array(
        'type' => 'text',
        'label' => __('Enter Logo Width','wallstreet'),
        'section' => 'header_logo',
		'priority'   => 400,
    )
	);
	
	//Logo Height
	$wp_customize->add_setting(
    'wallstreet_pro_options[height]',array(
	'sanitize_callback' => 'sanitize_text_field',
	'default' => 50,
	'type'=>'option',
	
	));

	$wp_customize->add_control(
    'wallstreet_pro_options[height]',
    array(
        'type' => 'text',
        'label' => __('Enter Logo Height','wallstreet'),
        'section' => 'header_logo',
		'priority'   =>410,
    )
	);
	
	
	
	//Text logo
	$wp_customize->add_setting(
	'wallstreet_pro_options[text_title]'
    ,array(
	'default' => true,
	'sanitize_callback' => 'sanitize_text_field',
	'type' =>'option',
	
	));

	$wp_customize->add_control(
    'wallstreet_pro_options[text_title]',
    array(
        'type' => 'checkbox',
        'label' => __('Show Logo text','wallstreet'),
        'section' => 'header_logo',
		'priority'   => 200,
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
		'title'      => __('Header contact setting', 'wallstreet'),
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
	}
	add_action( 'customize_register', 'wallstreet_header_customizer' );
	?>