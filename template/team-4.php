<?php
// Template Name: Team 4
get_header(); 
get_template_part('index', 'banner'); 
$wallstreet_pro_options=theme_data_setup();
$current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options ); 
if($current_options['team_template_team_section_show_hide']==true):
get_template_part('section-variation/home/team/team-4');
endif;
if($current_options['team_template_feature_section_show_hide']==true):
get_template_part('index', 'features');
endif;
if($current_options['team_template_client_section_show_hide']==true):
get_template_part('index', 'client');
endif;
get_footer(); ?>