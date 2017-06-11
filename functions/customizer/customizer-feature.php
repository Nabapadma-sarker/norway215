<?php
function wallstreet_features_customizer( $wp_customize ) {
 
//Service section panel
$wp_customize->add_panel( 'wallstreet_features_options', array(
		'priority'       => 700,
		'capability'     => 'edit_theme_options',
		'title'      => __('Theme feature settings', 'wallstreet'),
	) );

	
	$wp_customize->add_section( 'features_section' , array(
		'title'      => __('Theme feature settings', 'wallstreet'),
		'panel'  => 'wallstreet_features_options',
		'priority'   => 1,
   	) );
	
	
	// Enable/disable Feature Section
	
	$wp_customize->add_setting(
    'wallstreet_pro_options[theme_feature_enabled]',
    array(
        'default' => true,
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		
    )
	);

	$wp_customize->add_control(
    'wallstreet_pro_options[theme_feature_enabled]',
    array(
        'type' => 'checkbox',
        'label' => __('Check to enable theme featured section on homepage','wallstreet'),
        'section' => 'features_section',
		
		));
		
		
	//Feature image
    $wp_customize->add_setting( 'wallstreet_pro_options[theme_feature_image]', array(
      'sanitize_callback' => 'esc_url_raw',
	  'type' => 'option',
	  'default' =>WEBRITI_TEMPLATE_DIR_URI . "/images/desk-image.png",
    ) );
    
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wallstreet_pro_options[theme_feature_image]', array(
      'label'    => __( 'Image', 'wallstreet' ),
      'section'  => 'features_section',
      'settings' => 'wallstreet_pro_options[theme_feature_image]',
    ) ) );	
	
	
	//Feature title
	
	$wp_customize->add_setting(
    'wallstreet_pro_options[theme_feature_title]',
    array(
        'default' => __('Core features of theme','wallstreet'),
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		
    )
	);

	$wp_customize->add_control(
    'wallstreet_pro_options[theme_feature_title]',
    array(
        'type' => 'text',
        'label' => __('Title','wallstreet'),
        'section' => 'features_section',
		
		));
		
	
	//Theme first icon
	$wp_customize->add_setting(
    'wallstreet_pro_options[theme_first_feature_icon]',
    array(
        'default' => 'fa-sliders',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[theme_first_feature_icon]',
    array(
        'label' => __('Icon','wallstreet'),
        'section' => 'features_section',
        'type' => 'text',
    )
	);
	
	//First Feature Title:
	
	$wp_customize->add_setting(
    'wallstreet_pro_options[theme_first_title]',
    array(
        'default' => __('Incredibly flexible','wallstreet'),
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[theme_first_title]',
    array(
        'label' => __('Title','wallstreet'),
        'section' => 'features_section',
        'type' => 'text',
		'sanitize_callback' => 'sanitize_text_field',
    )
	);
	
	//First Feature Description:
	
	$wp_customize->add_setting(
    'wallstreet_pro_options[theme_first_description]',
    array(
        'default' => 'Perspiciatis unde omnis iste natus error sit voluptaem omnis iste.',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[theme_first_description]',
    array(
        'label' => __('Description','wallstreet'),
        'section' => 'features_section',
        'type' => 'text',
		'sanitize_callback' => 'sanitize_text_field',
    )
	);
	
	//Second feature section
	//Theme second icon
	$wp_customize->add_setting(
    'wallstreet_pro_options[theme_second_feature_icon]',
    array(
        'default' => 'fa-paper-plane-o',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[theme_second_feature_icon]',
    array(
        'label' => __('Icon','wallstreet'),
        'section' => 'features_section',
        'type' => 'text',
    )
	);
	
	//second Feature Title:
	
	$wp_customize->add_setting(
    'wallstreet_pro_options[theme_second_title]',
    array(
        'default' => __('Incredibly flexible','wallstreet'),
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[theme_second_title]',
    array(
        'label' => __('Title','wallstreet'),
        'section' => 'features_section',
        'type' => 'text',
		'sanitize_callback' => 'sanitize_text_field',
    )
	);
	
	//second Feature Description:
	
	$wp_customize->add_setting(
    'wallstreet_pro_options[theme_second_description]',
    array(
        'default' => 'Perspiciatis unde omnis iste natus error sit voluptaem omnis iste.',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[theme_second_description]',
    array(
        'label' => __('Description','wallstreet'),
        'section' => 'features_section',
        'type' => 'text',
		'sanitize_callback' => 'sanitize_text_field',
    )
	);
	
	//Third feature section
	//Theme Third icon
	$wp_customize->add_setting(
    'wallstreet_pro_options[theme_third_feature_icon]',
    array(
        'default' => 'fa-bolt',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[theme_third_feature_icon]',
    array(
        'label' => __('Icon','wallstreet'),
        'section' => 'features_section',
        'type' => 'text',
    )
	);
	
	//third Feature Title:
	
	$wp_customize->add_setting(
    'wallstreet_pro_options[theme_third_title]',
    array(
        'default' => __('Incredibly flexible','wallstreet'),
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[theme_third_title]',
    array(
        'label' => __('Title','wallstreet'),
        'section' => 'features_section',
        'type' => 'text',
		'sanitize_callback' => 'sanitize_text_field',
    )
	);
	
	//third Feature Description:
	
	$wp_customize->add_setting(
    'wallstreet_pro_options[theme_third_description]',
    array(
        'default' => 'Perspiciatis unde omnis iste natus error sit voluptaem omnis iste.',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[theme_third_description]',
    array(
        'label' => __('Description','wallstreet'),
        'section' => 'features_section',
        'type' => 'text',
		'sanitize_callback' => 'sanitize_text_field',
    )
	);
	
	$wp_customize->add_section( 'features_section_back' , array(
		'title'      => __('Background Image', 'wallstreet'),
		'panel'  => 'wallstreet_features_options',
		'priority'   => 2,
   	) );
	
		// section background image
		$wp_customize->add_setting( 'wallstreet_pro_options[theme_feature_background]', array(
		  'sanitize_callback' => 'esc_url_raw',
		  'type' => 'option',
		  'default' => WEBRITI_TEMPLATE_DIR_URI . "/images/tweet-bg.jpg",
		) );
		
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wallstreet_pro_options[theme_feature_background]', array(
		  'label'    => __( 'Image', 'wallstreet' ),
		  'section'  => 'features_section_back',
		  'settings' => 'wallstreet_pro_options[theme_feature_background]',
		) ) );	
	

}
add_action( 'customize_register', 'wallstreet_features_customizer' );
?>