<?php 
// Adding customizer home page setting
function hotel_theme_style_customizer( $wp_customize ){
$wp_customize->remove_control('header_textcolor');

//Theme color
class WP_color_Customize_Control extends WP_Customize_Control {
public $type = 'new_menu';

       function render_content()
       
	   {
	   echo '<h3>'.__('Light & Dark Predefined Colors Setting','wallstreet').'</h3>';
		  $name = '_customize-color-radio-' . $this->id; 
		  foreach($this->choices as $key => $value ) {
            ?>
               <label>
				<input type="radio" value="<?php echo $key; ?>" name="<?php echo esc_attr( $name ); ?>" data-customize-setting-link="<?php echo esc_attr( $this->id ); ?>" <?php if($this->value() == $key){ echo 'checked="checked"'; } ?>>
				<img <?php if($this->value() == $key){ echo 'class="color_scheem_active"'; } ?> src="<?php echo get_template_directory_uri(); ?>/images/bg-pattern/<?php echo $value; ?>" alt="<?php echo esc_attr( $value ); ?>" />
				</label>
				
            <?php
		  }
		  ?>
		  <script>
			jQuery(document).ready(function($) {
				$("#customize-control-wallstreet_pro_options-webriti_stylesheet label img").click(function(){
					$("#customize-control-wallstreet_pro_options-webriti_stylesheet label img").removeClass("color_scheem_active");
					$(this).addClass("color_scheem_active");
				});
			});
		  </script>
		  <?php
       }

}
	/* Theme Style settings */
	$wp_customize->add_section( 'theme_style' , array(
		'title'      => __('Theme Style settings', 'wallstreet'),
		'priority'   => 0,
   	) );
	
	 //Theme Color Scheme
	$wp_customize->add_setting(
	'wallstreet_pro_options[webriti_stylesheet]', array(
	'default' => '#00c2a9',  
	'capability'     => 'edit_theme_options',
	'type' => 'option',
    ));
	$wp_customize->add_control(new WP_color_Customize_Control($wp_customize,'wallstreet_pro_options[webriti_stylesheet]',
	array(
       'section' => 'theme_style',
		'type' => 'radio',
		'choices' => array(
            '#ff8a00' => 'orange-dark.jpg',
			'#ee1d24' => 'red-dark.jpg',
			'#88be4c' => 'papaya-dark.jpg',
			'#ffc400' => 'yellow-dark.jpg',
			'#22a1c4' => 'blue-dark.jpg',
			'ff8a00' => 'orange-light.jpg',
			'ee1d24' => 'red-light.jpg',
			'88be4c' => 'papaya-light.jpg',
			'ffc400' => 'yellow-light.jpg',
			'22a1c4' => 'blue-light.jpg',
			
			'default.css'=>'dark.png',
			'light.css'=>'light.png',
    )
	
	)));
	
	$wp_customize->add_setting(
	'wallstreet_pro_options[link_color]', array(
	'capability'     => 'edit_theme_options',
	'default' => '#00c2a9',
	'type' => 'option',
    ));
	
	$wp_customize->add_control( 
	new WP_Customize_Color_Control( 
	$wp_customize, 
	'wallstreet_pro_options[link_color]', 
	array(
		'label'      => __( 'Change skin color for light and dark background', 'wallstreet' ),
		'section'    => 'theme_style',
		'settings'   => 'wallstreet_pro_options[link_color]',
	) ) );
}
add_action( 'customize_register', 'hotel_theme_style_customizer' );