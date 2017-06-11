<?php
function wallstreet_project_customizer( $wp_customize ) {

//Home project Section
	$wp_customize->add_panel( 'wallstreet_project_setting', array(
		'priority'       => 700,
		'capability'     => 'edit_theme_options',
		'title'      => __('Project settings', 'wallstreet'),
	) );
	
	$wp_customize->add_section(
        'project_section_settings',
        array(
            'title' => __('Home project setting','wallstreet'),
            'description' => '',
			'panel'  => 'wallstreet_project_setting',)
    );
	
	
	// Number of Portfolio section
	$wp_customize->add_setting(
    'wallstreet_pro_options[portfolio_list]',
    array(
       'default' => 4,
	   'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
		)
	);	
	$wp_customize->add_control( 'wallstreet_pro_options[portfolio_list]',array(
	 'type' => 'select',
	 'label'   => __('Number of portfolio on portfolio section','wallstreet'),
    'section' => 'project_section_settings',
	'choices' => array(4=>4,8=>8,12=>12,16=>16,20=>20,24=>24),
		)
	);
	
	// //Project Title
	$wp_customize->add_setting(
    'wallstreet_pro_options[portfolio_title]',
    array(
        'default' => __('Featured portfolio project','wallstreet'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
		)
	);	
	$wp_customize->add_control('wallstreet_pro_options[portfolio_title]',array(
    'label'   => __('Title','wallstreet'),
    'section' => 'project_section_settings',
	 'type' => 'text',)  );	
	 
	//Project Description 
	 $wp_customize->add_setting(
    'wallstreet_pro_options[portfolio_description]',
    array(
        'default' => __('Most popular of our works.','wallstreet'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
		)
	);	
	$wp_customize->add_control( 'wallstreet_pro_options[portfolio_description]',array(
    'label'   => __('Description','wallstreet'),
    'section' => 'project_section_settings',
	 'type' => 'text',)  );
	 
	 //View all portfolio Button Link
	 $wp_customize->add_setting(
    'wallstreet_pro_options[view_all_projects_btn_enabled]',
    array(
        'default' => true,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
		));	
	
	$wp_customize->add_control( 'wallstreet_pro_options[view_all_projects_btn_enabled]',array(
    'label'   => __('Enable view all porfolio button','wallstreet'),
    'section' => 'project_section_settings',
	 'type' => 'checkbox',)  );
	 
	 
	 //Project Project Button text
	 $wp_customize->add_setting(
    'wallstreet_pro_options[portfolio_more_text]',
    array(
        'default' => __('View All Projects','wallstreet'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
		)
	);	
	$wp_customize->add_control( 'wallstreet_pro_options[portfolio_more_text]',array(
    'label'   => __('Button Text','wallstreet'),
    'section' => 'project_section_settings',
	 'type' => 'text',)  );
	 
	 //View all portfolio Button Link
	 $wp_customize->add_setting(
    'wallstreet_pro_options[portfolio_more_link]',
    array(
        'default' =>'#',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
		));	
	
	$wp_customize->add_control( 'wallstreet_pro_options[portfolio_more_link]',array(
    'label'   => __('Button Link','wallstreet'),
    'section' => 'project_section_settings',
	 'type' => 'text',)  );
	 
	 //View all portfolio Button Link
	 $wp_customize->add_setting(
    'wallstreet_pro_options[portfolio_more_lnik_target]',
    array(
        'default' => false,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
		'description' => 'Open link in a new window/tab',
		));	
	
	$wp_customize->add_control( 'wallstreet_pro_options[portfolio_more_lnik_target]',array(
    'label'   => __('Open link in new tab','wallstreet'),
    'section' => 'project_section_settings',
	 'type' => 'checkbox',)  );
	 
	 
	 //link
	class WP_project_Customize_Control extends WP_Customize_Control {
    public $type = 'new_menu';
    /**
    * Render the control's content.
    */
    public function render_content() {
    ?>
    <a href="<?php bloginfo ( 'url' );?>/wp-admin/edit.php?post_type=wallstreet_portfolio" class="button"  target="_blank"><?php _e( 'Click here to add project', 'wallstreet' ); ?></a>
    <?php
    }
}

$wp_customize->add_setting(
    'project',
    array(
        'default' => '',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
    )	
);
$wp_customize->add_control( new WP_project_Customize_Control( $wp_customize, 'project', array(	
		'section' => 'project_section_settings',
    ))
);



}		
	add_action( 'customize_register', 'wallstreet_project_customizer' );
	?>