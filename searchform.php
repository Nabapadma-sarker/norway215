<?php
/**
*Theme Name	: Wallstreet
	
 * @file           searchform.php
 * @package        wallstreet
 * @author         webriti
 * @filesource     wp-content/themes/wallstreet/searchform.php
*/
?>
<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="text" class="search_widget_input"  name="s" id="s" placeholder="<?php esc_attr_e( "Search Here", 'wallstreet' ); ?>" />
	<input type="submit" id="searchsubmit" class="search_btn" style="" name="submit" value="<?php esc_attr_e( "Search", 'wallstreet' ); ?>" />
</form>