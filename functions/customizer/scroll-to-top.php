<?php
function wallstreet_scroll_to_top_customizer( $wp_customize ) {

	//Scroll To Top Section 	
	$wp_customize->add_section(
        'scroll_top_section_settings',
        array(
            'title' => __('Scroll to top settings','wallstreet'),
            'description' => '',
    )
    );
	
	//Hide scroll to top
	$wp_customize->add_setting(
    'wallstreet_pro_options[scroll_to_top_enabled]',
    array(
        'default' => true,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[scroll_to_top_enabled]',
    array(
        'label' => __('Enable Scroll To Top Setting','wallstreet'),
        'section' => 'scroll_top_section_settings',
        'type' => 'checkbox',
		'priority'   => 100,
    ));
	
	}
	add_action( 'customize_register', 'wallstreet_scroll_to_top_customizer' );
	?>