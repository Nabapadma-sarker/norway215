<?php
function wallstreet_slider_customizer( $wp_customize ) {

	//slider Section 
	$wp_customize->add_panel( 'wallstreet_slider_setting', array(
		'priority'       => 500,
		'capability'     => 'edit_theme_options',
		'title'      => __('Slider settings', 'wallstreet'),
	) );
	
	$wp_customize->add_section(
        'slider_section_settings',
        array(
            'title' => __('Slider settings','wallstreet'),
            'description' => '',
			'panel'  => 'wallstreet_slider_setting',)
    );
	
	//Hide slider
	
	$wp_customize->add_setting(
    'wallstreet_pro_options[home_slider_enabled]',
    array(
        'default' => true,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[home_slider_enabled]',
    array(
        'label' => __('Enable home slider','wallstreet'),
        'section' => 'slider_section_settings',
        'type' => 'checkbox',
		'priority'   => 100,
    ));
	
	//Slider animation
	
	$wp_customize->add_setting(
    'wallstreet_pro_options[animation]',
    array(
        'default' => 'slide',
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		
    )
	);

	$wp_customize->add_control(
    'wallstreet_pro_options[animation]',
    array(
        'type' => 'select',
        'label' => __('Select slider animation','wallstreet'),
        'section' => 'slider_section_settings',
		'priority'   => 200,
		 'choices' => array('slide'=>__('slide','wallstreet'), 'fade'=>__('fade','wallstreet')),
		));
		
		
	 //Slider animation
	
	$wp_customize->add_setting(
    'wallstreet_pro_options[slide_direction]',
    array(
        'default' => 'horizontal',
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		
    )
	);

	$wp_customize->add_control(
    'wallstreet_pro_options[slide_direction]',
    array(
        'type' => 'select',
        'label' => __('Slide direction','wallstreet'),
        'section' => 'slider_section_settings',
		'priority'   => 250,
		'choices' => array('horizontal'=> __('horizontal','wallstreet'), 'vertical'=> __('vertical','wallstreet')),
		));	
		
	$wp_customize->add_setting(
    'wallstreet_pro_options[animationSpeed]',
    array(
        'default' =>'1500',
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		
    )
	);

	$wp_customize->add_control(
    'wallstreet_pro_options[animationSpeed]',
    array(
        'type' => 'select',
        'label' => __('Animation speed','wallstreet'),
        'section' => 'slider_section_settings',
		'priority'   => 300,
		 'choices' => array('500'=>'0.5','1000'=>'1.0','1500'=>'1.5','2000' => '2.0','2500' => '2.5' ,'3000' =>'3.0' , '3500' => '3.5', '4000' => '4.0','4500' => '4.5' ,'5000' => '5.0' , '5500' => '5.5' )));	
		 
	// Slide show speed
	$wp_customize->add_setting(
    'wallstreet_pro_options[slideshowSpeed]',
    array(
        'default' => '2500',
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		
    )
	);

	$wp_customize->add_control(
    'wallstreet_pro_options[slideshowSpeed]',
    array(
        'type' => 'select',
        'label' => __('Slideshow speed','wallstreet'),
        'section' => 'slider_section_settings',
		'priority'   => 300,
		 'choices' => array('500'=>'0.5','1000'=>'1.0','1500'=>'1.5','2000' => '2.0','2500' => '2.5' ,'3000' =>'3.0' , '3500' => '3.5', '4000' => '4.0','4500' => '4.5' ,'5000' => '5.0' , '5500' => '5.5' )));	
	
	//Add Slider setting
	class WP_slider_Customize_Control extends WP_Customize_Control {
    public $type = 'new_menu';
    /**
    * Render the control's content.
    */
    public function render_content() {
    ?>
    <a href="<?php bloginfo ( 'url' );?>/wp-admin/edit.php?post_type=wallstreet_slider" class="button"  target="_blank"><?php _e( 'Click here ho add slider', 'wallstreet' ); ?></a>
    <?php
    }
}

$wp_customize->add_setting(
    'slider',
    array(
        'default' => '',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
    )	
);
$wp_customize->add_control( new WP_slider_Customize_Control( $wp_customize, 'slider', array(	
		'section' => 'slider_section_settings',
		'priority'   => 500,
    ))
);		}
	add_action( 'customize_register', 'wallstreet_slider_customizer' );
	?>