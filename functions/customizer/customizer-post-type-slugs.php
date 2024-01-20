<?php 

// slugs settings
function wallstreet_post_type_slugs_customizer( $wp_customize ){
	
	/* post type slugs settings */
	$wp_customize->add_panel( 'post_type_slug_settings', array(
		'priority'       => 950,
		'capability'     => 'edit_theme_options',
		'title'      => __("SEO Friendly URL", 'wallstreet'),
	) );
	
		/* post type slugs page */
		$wp_customize->add_section( 'slugs_section' , array(
			'title'      => __("SEO Friendly Url's","wallstreet"),
			'panel'  => 'post_type_slug_settings'
		) );
		
			// Slider Slug
			$wp_customize->add_setting( 'wallstreet_pro_options[wallstreet_slider_slug]' , array(
			'default' => 'wallstreet_slider',
			'sanitize_callback' => 'sanitize_text_field',
			'type'=>'option'
			) );
			$wp_customize->add_control('wallstreet_pro_options[wallstreet_slider_slug]' , array(
			'label'          => __( 'Slider slug', 'wallstreet' ),
			'section'        => 'slugs_section',
			'type'           => 'text',
			) );
			
			// services_slug
			$wp_customize->add_setting( 'wallstreet_pro_options[wallstreet_service_slug]' , array(
			'default' => 'wallstreet_service',
			'sanitize_callback' => 'sanitize_text_field',
			'type'=>'option'
			) );
			$wp_customize->add_control('wallstreet_pro_options[wallstreet_service_slug]' , array(
			'label'          => __( 'Service slug', 'wallstreet' ),
			'section'        => 'slugs_section',
			'type'           => 'text',
			) );
			
			// team_slug
			$wp_customize->add_setting( 'wallstreet_pro_options[wallstreet_team_slug]' , array(
			'default' => 'wallstreet_team',
			'sanitize_callback' => 'sanitize_text_field',
			'type'=>'option'
			) );
			$wp_customize->add_control('wallstreet_pro_options[wallstreet_team_slug]' , array(
			'label'          => __( 'Team slug', 'wallstreet' ),
			'section'        => 'slugs_section',
			'type'           => 'text',
			) );
			
			//products_slug
			$wp_customize->add_setting( 'wallstreet_pro_options[wallstreet_portfolio_slug]' , array(
			'default' => 'wallstreet_portfolio',
			'sanitize_callback' => 'sanitize_text_field',
			'type'=>'option'
			) );
			$wp_customize->add_control('wallstreet_pro_options[wallstreet_portfolio_slug]' , array(
			'label'          => __( 'Portfolio slug', 'wallstreet' ),
			'section'        => 'slugs_section',
			'type'           => 'text',
			) );
			
			
			//Portfolio category Slug
			$wp_customize->add_setting( 'wallstreet_pro_options[wallstreet_products_category_slug]' , array(
			'default' => 'portfolio-categories',
			'sanitize_callback' => 'sanitize_text_field',
			'type'=>'option'
			) );
			$wp_customize->add_control('wallstreet_pro_options[wallstreet_products_category_slug]' , array(
			'label'          => __( 'Portfolio category slug', 'wallstreet' ),
			'section'        => 'slugs_section',
			'type'           => 'text',
			) );
			
			
			// Testimonial Slug
			$wp_customize->add_setting( 'wallstreet_pro_options[wallstreet_testimonial_slug]' , array(
			'default' => 'wallstreet_testimonial',
			'sanitize_callback' => 'sanitize_text_field',
			'type'=>'option'
			) );
			$wp_customize->add_control('wallstreet_pro_options[wallstreet_testimonial_slug]' , array(
			'label'          => __( 'Testimonial slug', 'wallstreet' ),
			'section'        => 'slugs_section',
			'type'           => 'text',
			) );
			
			
			// Client Slug
			$wp_customize->add_setting( 'wallstreet_pro_options[wallstreet_client_slug]' , array(
			'default' => 'wallstreet_client',
			'sanitize_callback' => 'sanitize_text_field',
			'type'=>'option'
			) );
			$wp_customize->add_control('wallstreet_pro_options[wallstreet_client_slug]' , array(
			'label'          => __( 'Client slug', 'wallstreet' ),
			'section'        => 'slugs_section',
			'type'           => 'text',
			) );
			
			
			
			class wallstreet_Customize_slug extends WP_Customize_Control {
			public function render_content() { ?>
			<h3><?php _e("After changing the slug, please do not forget to save the permalinks. Without saving, the old permalinks will not update.","wallstreet"); ?> 
			<?php
			}
			}
			
			$wp_customize->add_setting( 'wallstreet_pro_options[wallstreet_slug_setting]', array(
			'default'				=> false,
			'capability'			=> 'edit_theme_options',
			'sanitize_callback'	=> 'wp_filter_nohtml_kses',
			));
			$wp_customize->add_control(
			new wallstreet_Customize_slug(
			$wp_customize,
			'wallstreet_pro_options[wallstreet_slug_setting]',
			array(
				'label'					=> __('Wallstreet slug','wallstreet'),
				'section'				=> 'slugs_section',
				'settings'				=> 'wallstreet_pro_options[wallstreet_slug_setting]',
			)));
			
			
			class WP_slug_Customize_Control extends WP_Customize_Control {
			public $type = 'new_menu';
			/**
			* Render the control's content.
			*/
			public function render_content() {
			?>
			<a href="<?php bloginfo ( 'url' );?>/wp-admin/options-permalink.php" class="button"  target="_blank"><?php _e( 'Click here permalinks setting', 'wallstreet' ); ?></a>
			<?php
			}
			}

			$wp_customize->add_setting(
				'slug',
				array(
					'default' => '',
					'capability'     => 'edit_theme_options',
					'sanitize_callback' => 'sanitize_text_field',
				)	
			);
			$wp_customize->add_control( new WP_slug_Customize_Control( $wp_customize, 'slug', array(	
					'section' => 'slugs_section',
				))
			);
			
			
			
	
}
add_action( 'customize_register', 'wallstreet_post_type_slugs_customizer' );