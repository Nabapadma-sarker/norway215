<?php
/**
* @Theme Name	:	wallstreet-Pro
* @file         :	index-calloutarea.php
* @package      :	wallstreet-Pro
@author       :	webriti
* @filesource   :	wp-content/themes/wallstreet/index-calloutarea.php
*/
?>
<!-- wallstreet Callout Section -->
<?php  $wallstreet_pro_options=theme_data_setup();
		$current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options ); ?>
<?php if($current_options['call_out_area_enabled'] == true){ ?>
<div class="row">		
	<div class="callout-section">
		<h3><?php if($current_options['call_out_title']!='') { echo $current_options['call_out_title']; } ?></h3>
		<p><?php if($current_options['call_out_text']!='') { echo $current_options['call_out_text']; } ?><br>
		<?php if($current_options['call_out_button_text'] !='') {  ?>
		<a <?php if($current_options['call_out_button_link_target'] =='on'){ echo "target='_blank'"; } ?> class="normal-button  reverse" href="<?php if($current_options['call_out_button_link'] !='') { echo $current_options['call_out_button_link']; } ?>" ><?php echo $current_options['call_out_button_text']; ?></a>
		<?php } ?>
		</p>
	</div>		
</div>
<?php } ?>
<!-- /wallstreet Callout Section -->