<?php
// Footer copyright section 
	function wallstreet_copyright_customizer( $wp_customize ) {
	$wp_customize->add_panel( 'wallstreet_copyright_setting', array(
		'priority'       => 900,
		'capability'     => 'edit_theme_options',
		'title'      => __('Footer copyright settings', 'wallstreet'),
	) );
	
	$wp_customize->add_section(
        'copyright_section_one',
        array(
            'title' => __('Footer copyright settings','wallstreet'),
            'priority' => 35,
			'panel' => 'wallstreet_copyright_setting',
        )
    );
	
    //Hide scroll to top
    $wp_customize->add_setting(
    'wallstreet_pro_options[footerbar_enabled]',
    array(
        'default' => true,
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
        'type' => 'option',
    )   
    );
    $wp_customize->add_control(
    'wallstreet_pro_options[footerbar_enabled]',
    array(
        'label' => __('Enable Footer Copyright','wallstreet'),
        'section' => 'copyright_section_one',
        'type' => 'checkbox',
    ));
	
	$wp_customize->add_setting(
    'wallstreet_pro_options[footer_copyright]',
    array(
        'default' => (__('Copyright @ 2016 - WallStreet. Designed by','wallstreet').' '.'<a href="http://webriti.com" rel="nofollow" target="_blank">'.__('Webriti','wallstreet').'</a>'),
		'type' =>'option'
    )
	
);
$wp_customize->add_control(
    'wallstreet_pro_options[footer_copyright]',
    array(
        'label' => __('Copyright text','wallstreet'),
        'section' => 'copyright_section_one',
        'type' => 'textarea',
    ));
}
add_action( 'customize_register', 'wallstreet_copyright_customizer' );
?>