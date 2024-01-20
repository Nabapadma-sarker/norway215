<?php
/**
* @Theme Name	:	wallstreet-Pro
* @file         :	index-service.php
* @package      :	wallstreet-Pro
@author       :	webriti
* @filesource   :	wp-content/themes/wallstreet/index-service.php
*/
?>
<!-- wallstreet Service Section ---->
<?php $wallstreet_pro_options=theme_data_setup();
$current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options ); 
get_template_part('section-variation/home/service/servic-'.$current_options['service_variation']); ?>