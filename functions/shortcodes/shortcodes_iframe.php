<?php
// this file contains the contents of the popup window
/* FindWPConfig - searching for a root of wp */
function FindWPConfig($directory){
	global $confroot;
	foreach(glob($directory."/*") as $f){
		if (basename($f) == 'wp-config.php' ){
			$confroot = str_replace("\\", "/", dirname($f));
			return true;
		}
		if (is_dir($f)){
		$newdir = dirname(dirname($f));
		}
	}
	if (isset($newdir) && $newdir != $directory){
		if (FindWPConfig($newdir)){
			return false;
		}	
	}
	return false;
}
if (!isset($table_prefix)){
	global $confroot;
	FindWPConfig(dirname(dirname(__FILE__)));
	include_once $confroot."/wp-load.php";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php _e("Insert Shortcode",'wallstreet');?></title>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo home_url(); ?>/wp-includes/js/tinymce/tiny_mce_popup.js"></script>
<style type="text/css" src="<?php echo home_url(); ?>/wp-includes/js/tinymce/themes/advanced/skins/wp_theme/dialog.css"></style>
<link rel="stylesheet" href="css/shortcode_tinymce.css" />

<script>
 jQuery(document).ready(function($){
	//select shortcode
	$("#shortcode-select").change(function ramboselect() {
		  var shortcodeSelectVal = "";
		  var shortcodeSelectText = "";
		  $("#shortcode-select option:selected").each(function ramboselect() {
				shortcodeSelectVal += $(this).val();
				shortcodeSelectText += $(this).text();
			});
			  
		  if( shortcodeSelectVal != 'default')
		  {	$('#selected-shortcode').load('types/'+shortcodeSelectVal+'.php',
			function ramboselect(){
				$('.shortcode-editor-title').text(shortcodeSelectText + ' Editor');
			});
		  } else {
			$('#selected-shortcode').text('Select Your Shortcode Above To Get Started').addClass('padding-bottom');
			$('.shortcode-editor-title').text('Shortcode Editor');
		  }
		})
		.trigger('change');	
 });
</script>
    
</head>
<body>

<div id="wpex-shortcodes-popup">

	<h2 id="shortcode-selector-title"><?php _e("Shortcode Selector",'wallstreet');?></h2>

	<div id="select-shortcode">
    	<div id="select-shortcode-inner">
    
		<form action="/" method="get" accept-charset="utf-8">
			<div>
				<select name="shortcode-select" id="shortcode-select" size="1">
               		<option value="default" selected="selected"><?php _e("Shortcodes",'wallstreet');?></option>  
					<option value="column"><?php _e("column",'wallstreet');?></option>
					<option value="tabs"><?php _e("Tabs",'wallstreet');?></option>
					<option value="accordion"><?php _e("Accordion",'wallstreet');?></option>	
                	<option value="alert"><?php _e("Alert",'wallstreet');?></option>
               		<option value="drop"><?php _e("Drop-Caps",'wallstreet');?></option>
					<option value="button"><?php _e("Button",'wallstreet');?></option>
					<option value="heading"><?php _e("Heading",'wallstreet');?></option>
					<option value="tooltip"><?php _e("Tool Tip",'wallstreet');?></option>
					<option value="list"><?php _e("List",'wallstreet');?></option>
				</select>
			</div>
		</form>
        </div>
        <!-- /select-shortcode-inner -->
	</div>
    <!-- /select-shortcode-wrap -->
    
    <h2 class="shortcode-editor-title"></h2>
	<div id="shortcode-editor">
    		<div id="shortcode-editor-inner" class="clearfix">
				<div id="selected-shortcode"> </div>
			</div>       
	</div>
</div>
</body>
</html>