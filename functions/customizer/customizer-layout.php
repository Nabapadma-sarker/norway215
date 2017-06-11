<?php
//Pro Button
function wallstreet_layout_customizer( $wp_customize ) {
class WP_layout_Customize_Control extends WP_Customize_Control {
    public $type = 'new_menu';
    /**
    * Render the control's content.
    */
    public function render_content() {
		
	$wallstreet_pro_options = theme_data_setup(); 
	$current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options );
	$data_enable = is_array($current_options['front_page_data']) ? $current_options['front_page_data'] : explode(",",$current_options['front_page_data']);
	$defaultenableddata=array('service','portfolio','blog','testimonials','features','client');
	$layout_disable=array_diff($defaultenableddata,$data_enable);

    ?>
 <h3><?php _e('Enable','wallstreet'); ?></h3>
  <ul class="sortable customizer_layout" id="enable">
  <?php if( !empty($data_enable[0]) )    { foreach( $data_enable as $value ){ ?>
  <li class="ui-state" id="<?php echo $value; ?>"><?php echo $value; ?></li>
  <?php } } ?>
  </ul>
  
  
 <h3><?php _e('Disable','wallstreet'); ?></h3> 
 <ul class="sortable customizer_layout" id="disable">
 <?php if(!empty($layout_disable)){ foreach($layout_disable as $val){ ?>
  <li class="ui-state" id="<?php echo $val; ?>"><?php echo $val; ?></li>
  <?php } } ?>
 </ul>
 <div class="section">
		<p> <b><?php _e('Slider section always top on the home page','wallstreet'); ?></b></p>
		<p> <b><?php _e('Note','wallstreet'); ?> </b> <?php _e('By default all the section are enable on homepage. If you do not want to display any section just drag that section to the disabled box.','wallstreet'); ?><p>
		</div>
<script>
jQuery(document).ready(function($) {
    $( ".sortable" ).sortable({
		connectWith: '.sortable'
	});
  });
   
jQuery(document).ready(function($){	
	
	// Get items id you can chose
	function webritiItems(webriti)
	{
		var columns = [];
		$(webriti + ' #enable').each(function(){
			columns.push($(this).sortable('toArray').join(','));
		});
		return columns.join('|');
	}
	
	function webritiItems_disable(webriti)
	{
		var columns = [];
		$(webriti + ' #disable').each(function(){
			columns.push($(this).sortable('toArray').join(','));
		});
		return columns.join('|');
	}
	
	//onclick check id
	$('#enable .ui-state,#disable .ui-state').mouseleave(function(){ 
		var enable = webritiItems('#customize-control-wallstreet_pro_options-layout_manager');
		var disable = webritiItems_disable('#customize-control-wallstreet_pro_options-layout_manager');

		$("#customize-control-wallstreet_pro_options-front_page_data input[type = 'text']").val(enable);
		$("#customize-control-wallstreet_pro_options-layout_textbox_disable input[type = 'text']").val(disable);
		$("#customize-control-wallstreet_pro_options-front_page_data input[type = 'text']").change();		
	});

  });
</script>

    <?php
    }
}

$wp_customize->add_panel( 'wallstreet_layout_setting', array(
		'priority'       => 1000,
		'capability'     => 'edit_theme_options',
		'title'      => __('Theme layout manager', 'wallstreet'),
	) );


$wp_customize->add_section( 'wallstreet_layout_section' , array(
		'title'      => __('Theme layout manager', 'wallstreet'),
		'panel' => 'wallstreet_layout_setting',
   	) );

$wp_customize->add_setting(
    'wallstreet_pro_options[layout_manager]',
    array(
        'default' => '',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type'=>'option'
		
    )	
);
$wp_customize->add_control( new WP_layout_Customize_Control( $wp_customize, 'wallstreet_pro_options[layout_manager]', array(
		'section' => 'wallstreet_layout_section',
		'setting' => 'wallstreet_pro_options[layout_manager]',
    ))
);

$wp_customize->add_setting(
    'wallstreet_pro_options[front_page_data]',
    array(
        'default' =>'service,portfolio,testimonials,blog,features,client',
		'type'=>'option'
    )
	
);
$wp_customize->add_control(
    'wallstreet_pro_options[front_page_data]',
    array(
        'label' => __('Enable','wallstreet'),
        'section' => 'wallstreet_layout_section',
        'type' => 'text',
		));
		
	
$wp_customize->add_setting(
    'wallstreet_pro_options[layout_textbox_disable]',
    array(
        'default' => '',
		'type'=>'option'
    )
	
);
$wp_customize->add_control(
    'wallstreet_pro_options[layout_textbox_disable]',
    array(
        'label' => __('Disable','wallstreet'),
        'section' => 'wallstreet_layout_section',
        'type' => 'text',
		));	


}
add_action( 'customize_register', 'wallstreet_layout_customizer' );
?>