<?php
function wallstreet_client_customizer( $wp_customize ) {
//Front Client section
	
	$wp_customize->add_panel( 'wallstreet_client_setting', array(
		'priority'       => 800,
		'capability'     => 'edit_theme_options',
		'title'      => __('Client settings', 'wallstreet'),
	) );
	
	$wp_customize->add_section(
        'client_section_settings',
        array(
            'title' => __('Section Heading','wallstreet'),
            'description' => '',
			'panel'  => 'wallstreet_client_setting',)
    );
	
	//Client title
	$wp_customize ->add_setting (
	'wallstreet_pro_options[home_client_title]',
	array( 
	'default' => __('Our Clients','wallstreet'),
	'capability'     => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	'type' => 'option',
	) );

	$wp_customize->add_control (
	'wallstreet_pro_options[home_client_title]',
	array (  
	'label' => __('Title','wallstreet'),
	'section' => 'client_section_settings',
	'type' => 'text',
	) );
	
	//Client Discription
	$wp_customize ->add_setting (
	'wallstreet_pro_options[home_client_description]',
	array( 
	'default' => __('Have a look at our clients we are growing their business and they are going up in the market by beating their competitors.','wallstreet'),
	'capability'     => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	'type' => 'option'
	) );

	$wp_customize->add_control (
	'wallstreet_pro_options[home_client_description]',
	array (  
	'label' => __('Description','wallstreet'),
	'section' => 'client_section_settings',
	'type' => 'textarea',
	) );


	//Client link
	class WP_client_Customize_Control extends WP_Customize_Control {
    public $type = 'new_menu';
    /**
    * Render the control's content.
    */
    public function render_content() {
    ?>
    <a href="<?php bloginfo ( 'url' );?>/wp-admin/edit.php?post_type=wallstreet_client" class="button"  target="_blank"><?php _e( 'Click here to add client', 'wallstreet' ); ?></a>
    <?php
    }
	}

	$wp_customize->add_setting(
		'client',
		array(
			'default' => '',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		)	
	);
	$wp_customize->add_control( new WP_client_Customize_Control( $wp_customize, 'client', array(	
			'section' => 'client_section_settings',
			'priority'   => 500,
		))
	);
	
	}
	add_action( 'customize_register', 'wallstreet_client_customizer' );
	?>