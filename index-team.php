<?php 
$wallstreet_pro_options=theme_data_setup();
$current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options ); 
get_template_part('section-variation/home/team/team-'.$current_options['team_design_style']);
?>