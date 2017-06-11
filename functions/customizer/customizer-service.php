<?php
function wallstreet_service_customizer( $wp_customize ) {
 
//Service section panel
$wp_customize->add_panel( 'wallstreet_service_options', array(
		'priority'       => 600,
		'capability'     => 'edit_theme_options',
		'title'      => __('Service settings', 'wallstreet'),
	) );

	
	$wp_customize->add_section( 'service_section_head' , array(
		'title'      => __('Service heading', 'wallstreet'),
		'panel'  => 'wallstreet_service_options',
		'priority'   => 50,
   	) );
	
	
	//Number of services
	
	$wp_customize->add_setting(
    'wallstreet_pro_options[service_list]',
    array(
        'default' => 3,
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		
    )
	);

	$wp_customize->add_control(
    'wallstreet_pro_options[service_list]',
    array(
        'type' => 'select',
        'label' => __('Number of services on service section','wallstreet'),
        'section' => 'service_section_head',
		'priority'   => 50,
		'choices' => array(3=>3,6=>6,9=>9,12=>12,15=>15,18=>18,21=>21,24=>24),
		));
		
	
	//Sarvice title
	$wp_customize->add_setting(
    'wallstreet_pro_options[service_title]',
    array(
        'default' => __('Our Services','wallstreet'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[service_title]',
    array(
        'label' => __('Title','wallstreet'),
        'section' => 'service_section_head',
        'type' => 'text',
		'priority'   => 100,
    )
	);
	
	$wp_customize->add_setting(
    'wallstreet_pro_options[service_description]',
    array(
        'default' => __('We offer great services to our clients','wallstreet'),
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[service_description]',
    array(
        'label' => __('Description','wallstreet'),
        'section' => 'service_section_head',
        'type' => 'text',
		'sanitize_callback' => 'sanitize_text_field',
		'priority'   => 200,
    )
	);
	
	//Add Service setting
	class WP_service_Customize_Control extends WP_Customize_Control {
    public $type = 'new_menu';
    /**
    * Render the control's content.
    */
    public function render_content() {
    ?>
    <a href="<?php bloginfo ( 'url' );?>/wp-admin/edit.php?post_type=wallstreet_service" class="button"  target="_blank"><?php _e( 'Click here to add service', 'wallstreet' ); ?></a>
    <?php
    }
}

$wp_customize->add_setting(
    'service',
    array(
        'default' => '',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
    )	
);
$wp_customize->add_control( new WP_service_Customize_Control( $wp_customize, 'service', array(	
		'section' => 'service_section_head',
		'priority'   => 300,
    ))
);	

		//Other service section
		$wp_customize->add_section( 'other_service_section' , array(
		'title'      => __('Other services section', 'wallstreet'),
		'panel'  => 'wallstreet_service_options',
		'priority'   => 50,
		) );
	
		//Enable . disbaled other services
		$wp_customize->add_setting(
		'wallstreet_pro_options[other_service_section_enabled]',
		array(
			'default' => true,
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
			'type' => 'option',
		)	
		);
		$wp_customize->add_control(
		'wallstreet_pro_options[other_service_section_enabled]',
		array(
			'label' => __('Enable other service section in service template','wallstreet'),
			'section' => 'other_service_section',
			'type' => 'checkbox',
			'priority'   => 50,
		));
		
		//Sarvice title
		$wp_customize->add_setting(
		'wallstreet_pro_options[other_service_title]',
		array(
			'default' => __('Other services','wallstreet'),
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
			'type' => 'option'
		)	
		);
		$wp_customize->add_control(
		'wallstreet_pro_options[other_service_title]',
		array(
			'label' => __('Title','wallstreet'),
			'section' => 'other_service_section',
			'type' => 'text',
			'priority'   => 100,
		)
		);
		
		//other service description
		
		//Sarvice title
		$wp_customize->add_setting(
		'wallstreet_pro_options[other_service_description]',
		array(
			'default' => __('We offer great services to our clients','wallstreet'),
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
			'type' => 'option'
		)	
		);
		$wp_customize->add_control(
		'wallstreet_pro_options[other_service_description]',
		array(
			'label' => __('Description','wallstreet'),
			'section' => 'other_service_section',
			'type' => 'text',
			'priority'   => 100,
		)
		);
		
		//Add Service setting
	class WP_other_service_Customize_Control extends WP_Customize_Control {
    public $type = 'new_menu';
    /**
    * Render the control's content.
    */
    public function render_content() {
    ?>
    <a href="<?php bloginfo ( 'url' );?>/wp-admin/edit.php?post_type=wallstreet_service" class="button"  target="_blank"><?php _e( 'Click here to add service', 'wallstreet' ); ?></a>
    <?php
    }
}

$wp_customize->add_setting(
    'other_service',
    array(
        'default' => '',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
    )	
);
$wp_customize->add_control( new WP_other_service_Customize_Control( $wp_customize, 'other_service', array(	
		'section' => 'other_service_section',
		'priority'   => 300,
    ))
);


//Service callout

$wp_customize->add_section(
        'service_callout_settings',
        array(
            'title' => __('Service callout settings','wallstreet'),
            'description' => '',
			'panel'  => 'wallstreet_service_options',)
    );
	
	
	//Enable and disabled service callout Section
	
	$wp_customize->add_setting(
    'wallstreet_pro_options[call_out_area_enabled]',
    array(
        'default' => true,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[call_out_area_enabled]',
    array(
        'label' => __('Enable Callout area section','wallstreet'),
        'section' => 'service_callout_settings',
        'type' => 'checkbox',
    )
	);
	
	// add section to manage callout
	$wp_customize->add_setting(
    'wallstreet_pro_options[call_out_title]',
    array(
        'default' => __('Wallstreet is an elegant and modern theme for business websites.','wallstreet'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
		)
	);	
	$wp_customize->add_control( 'wallstreet_pro_options[call_out_title]',array(
    'label'   => __('Title','wallstreet'),
    'section' => 'service_callout_settings',
	 'type' => 'text',)  );	
	 
	 
	 $wp_customize->add_setting(
    'wallstreet_pro_options[call_out_text]',
    array(
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eros elit, pretium et adipiscing vel, consectetur adipiscing elit.',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
		)
	);	
	$wp_customize->add_control('wallstreet_pro_options[call_out_text]',array(
    'label'   => __('Description','wallstreet'),
    'section' => 'service_callout_settings',
	 'type' => 'text',)  );	
	 
	 
	$wp_customize ->add_setting (
	'wallstreet_pro_options[call_out_button_text]',
	array( 
	'default' => __('Purchase Now','wallstreet'),
	'capability'     => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	'type' => 'option',
	) 
	);

	$wp_customize->add_control (
	'wallstreet_pro_options[call_out_button_text]',
	array (  
	'label' => __('Button Text','wallstreet'),
	'section' => 'service_callout_settings',
	'type' => 'text',
	) );
	
	$wp_customize ->add_setting (
	'wallstreet_pro_options[call_out_button_link]',
	array( 
	'default' => '#',
	'capability'     => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	'type' => 'option',
	) );

	$wp_customize->add_control (
	'wallstreet_pro_options[call_out_button_link]',
	array (
	
	'label' => __('Button Link','wallstreet'),
	'section' => 'service_callout_settings',
	'type' => 'text',
	) );

	$wp_customize->add_setting(
		'wallstreet_pro_options[call_out_button_link_target]',
		array('capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
		'default' => true,
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[call_out_button_link_target]',
		array(
			'type' => 'checkbox',
			'label' => __('Open link in new tab','wallstreet'),
			'section' => 'service_callout_settings',
		)
	);

}
add_action( 'customize_register', 'wallstreet_service_customizer' );
?>