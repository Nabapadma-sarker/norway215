<?php
/**
 * Single Blog Options Customizer
 *
 * @package busiprof
 */
function wallstreet_single_blog_customizer ( $wp_customize )
{


/******************** Logo Length *******************************/
	$wp_customize->add_setting( 'busiprof_logo_length',
			array(
				'default' => '156',
				'transport' => 'postMessage',
				'sanitize_callback' => 'absint'
			)
		);
		$wp_customize->add_control( new Wallsteet_Slider_Custom_Control( $wp_customize, 'busiprof_logo_length',
			array(
				'label' => esc_html__( 'Logo Width', 'busiprof' ),
				'priority' => 50,
				'section' => 'title_tagline',
				'input_attrs' => array(
					'min' => 0,
					'max' => 500,
					'step' => 1,
				),
			)
		) );

}
add_action( 'customize_register', 'wallstreet_single_blog_customizer' );