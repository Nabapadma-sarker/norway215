<?php
function wallstreet_testimonial_customizer( $wp_customize ) {

//Home project Section
	$wp_customize->add_panel( 'wallstreet_test_setting', array(
		'priority'       => 750,
		'capability'     => 'edit_theme_options',
		'title'      => __('Testimonial settings', 'wallstreet'),
	) );
	
	$wp_customize->add_section(
        'test_section_settings',
        array(
            'title' => __('Home testimonial setting','wallstreet'),
            'description' => '',
			'panel'  => 'wallstreet_test_setting',)
    );
	
	//Testimonial animation
	
	$wp_customize->add_setting(
    'wallstreet_pro_options[testi_slide_type]',
    array(
        'default' => 'scroll',
		'type' => 'option',
    )
	);

	$wp_customize->add_control(
    'wallstreet_pro_options[testi_slide_type]',
    array(
        'type' => 'select',
        'label' => __('Slide type variations','wallstreet'),
        'section' => 'test_section_settings',
		 'choices' => array('scroll'=>__('scroll', 'wallstreet'), 'fade'=>__('fade', 'wallstreet') ,'crossfade'=>__('crossfade','wallstreet'),'cover-fade' =>__('cover-fade','wallstreet')),
		));
		
	
	//Testimonial Scroll Items
	
	$wp_customize->add_setting(
    'wallstreet_pro_options[testi_scroll_items]',
    array(
        'default' => '1',
		'type' => 'option',
    )
	);

	$wp_customize->add_control(
    'wallstreet_pro_options[testi_scroll_items]',
    array(
        'type' => 'select',
        'label' => __('Scroll items','wallstreet'),
        'section' => 'test_section_settings',
		 'choices' => array(1=>1,2=>2,3=>3),
		));
		
	//Testimonial Animation speed	
	$wp_customize->add_setting(
    'wallstreet_pro_options[testi_scroll_dura]',
    array(
        'default' => 1500,
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		
    )
	);

	$wp_customize->add_control(
    'wallstreet_pro_options[testi_scroll_dura]',
    array(
        'type' => 'select',
        'label' => __('Scroll duration','wallstreet'),
        'section' => 'test_section_settings',
		'priority'   => 300,
		 'choices' => array('500'=>'0.5','1000'=>'1.0','1500'=>'1.5','2000' => '2.0','2500' => '2.5' ,'3000' =>'3.0' , '3500' => '3.5', '4000' => '4.0','4500' => '4.5' ,'5000' => '5.0' , '5500' => '5.5' )));	
		 
	//Testimonail Time out Duration
	$wp_customize->add_setting(
    'wallstreet_pro_options[testi_timeout_dura]',
    array(
        'default' => 2000,
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		
    )
	);

	$wp_customize->add_control(
    'wallstreet_pro_options[testi_timeout_dura]',
    array(
        'type' => 'select',
        'label' => __('Time out duration','wallstreet'),
        'section' => 'test_section_settings',
		'priority'   => 300,
		 'choices' => array('500'=>'0.5','1000'=>'1.0','1500'=>'1.5','2000' => '2.0','2500' => '2.5' ,'3000' =>'3.0' , '3500' => '3.5', '4000' => '4.0','4500' => '4.5' ,'5000' => '5.0' , '5500' => '5.5' )));	

		 
		
	//Testimonail link
	class WP_testmonial_Customize_Control extends WP_Customize_Control {
		public $type = 'new_menu';
		/**
		* Render the control's content.
		*/
		public function render_content() {
		?>
		<a href="<?php bloginfo ( 'url' );?>/wp-admin/edit.php?post_type=wallstreet_testimonial" class="button"  target="_blank"><?php _e( 'Click here to add testimonial', 'wallstreet' ); ?></a>
		<?php
		}
	}

	$wp_customize->add_setting(
		'testimonial',
		array(
			'default' => '',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		)	
	);
	$wp_customize->add_control( new WP_testmonial_Customize_Control( $wp_customize, 'testimonial', array(	
			'section' => 'test_section_settings',
			'priority'   => 500,
		))
	);

	$wp_customize->add_section(
        'test_section_back',
        array(
            'title' => __('Background Image','wallstreet'),
            'description' => '',
			'panel'  => 'wallstreet_test_setting',)
    );
	
		// section background image
		$wp_customize->add_setting( 'wallstreet_pro_options[testi_background]', array(
		  'sanitize_callback' => 'esc_url_raw',
		  'type' => 'option',
		  'default' => WEBRITI_TEMPLATE_DIR_URI . "/images/testimonial-bg.jpg",
		) );
		
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wallstreet_pro_options[testi_background]', array(
		  'label'    => __( 'Image', 'wallstreet' ),
		  'section'  => 'test_section_back',
		  'settings' => 'wallstreet_pro_options[testi_background]',
		) ) );
	
}
add_action( 'customize_register', 'wallstreet_testimonial_customizer' );
?>