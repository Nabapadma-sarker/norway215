<?php
function wallstreet_hometeam_customizer( $wp_customize ) {

//Home project Section
	$wp_customize->add_panel( 'wallstreet_team_setting', array(
		'priority'       => 699,
		'capability'     => 'edit_theme_options',
		'title'      => __('Team settings', 'wallstreet'),
	) );
	
	$wp_customize->add_section(
        'team_section_settings',
        array(
            'title' => __('Homepage team settings','wallstreet'),
            'description' => '',
			'panel'  => 'wallstreet_team_setting',)
    );
		
	// hometeam Design layout
	$wp_customize->add_setting(
    'wallstreet_pro_options[team_design_style]',
    array(
        'default' => 1,
		'type' => 'option',
    )
	);

	$wp_customize->add_control(
    'wallstreet_pro_options[team_design_style]',
    array(
        'type' => 'select',
        'label' => __('Team design style','wallstreet'),
        'section' => 'team_section_settings',
		 'choices' => array(1=>__('Style 1','wallstreet'), 2=>__('Style 2','wallstreet'), 3=>__('Style 3','wallstreet'), 4=>__('Style 4','wallstreet')),
		));

	$wp_customize->add_setting(
    'wallstreet_pro_options[team_design_layout_style]',
    array(
        'default' => 4,
		'type' => 'option',
    )
	);

	$wp_customize->add_control(
    'wallstreet_pro_options[team_design_layout_style]',
    array(
        'type' => 'select',
        'label' => __('Team design style','wallstreet'),
        'section' => 'team_section_settings',
		 'choices' => array(6=>__('2 Column Layout','wallstreet'), 4=>__('3 Column Layout','wallstreet'), 3=>__('4 Column Layout','wallstreet')),
		));

	//Sarvice title
	$wp_customize->add_setting(
    'wallstreet_pro_options[home_team_title]',
    array(
        'default' => __('The Team','wallstreet'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[home_team_title]',
    array(
        'label' => __('Title','wallstreet'),
        'section' => 'team_section_settings',
        'type' => 'text',
		'priority'   => 100,
    )
	);
	
	$wp_customize->add_setting(
    'wallstreet_pro_options[home_team_description]',
    array(
        'default' => __('Meet Our Experts','wallstreet'),
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[home_team_description]',
    array(
        'label' => __('Description','wallstreet'),
        'section' => 'team_section_settings',
        'type' => 'text',
		'sanitize_callback' => 'sanitize_text_field',
		'priority'   => 200,
    )
	);	
}
add_action( 'customize_register', 'wallstreet_hometeam_customizer' );
?>