<script type="text/javascript">
/*alert  script js*/
var AlertDialog = {
	local_ed : 'ed',
	init : function(ed) {
		AlertDialog.local_ed = ed;
		tinyMCEPopup.resizeToInnerSize();
	},
	insert : function insertAlert(ed) {
	 	tinyMCEPopup.execCommand('mceRemoveNode', false, null);
	
	    var alert_style = jQuery('select#alert_style').val();
		var alert_heading = jQuery('input#alert_heading').val();
		var alert_text = jQuery('textarea#alert_text').val(); 
		var alert_color = jQuery('select#alert_color').val(); 
		var mceSelected = tinyMCE.activeEditor.selection.getContent();
		var output = '';
		output = '&nbsp;';
		
		output = '[alert ';
		
		if(alert_heading) 
		{	
			output += ' alert_heading=\"' + alert_heading +'\"';
		}
		if(alert_text) 
		{	
			output += ' alert_text=\"' + alert_text +'\"';
		}
		
		if(alert_style)
		{
			output += ' alert_style=\"' + alert_style +'\"';		
		}
		
		output += '/]';
		tinyMCEPopup.execCommand('mceReplaceContent', false, output);
		tinyMCEPopup.close();
	}
};
tinyMCEPopup.onInit.add(AlertDialog.init, AlertDialog);
</script>
<form action="/" method="get" accept-charset="utf-8">
    <table class="table table-bordered table-condensed">
		<tbody>
			<tr><td class="lable-all">Alert Type</td>
    			<td><select class="select-medium" size="1" id="alert_style" name="alert_style">
					<option value="alert-warning" selected="selected">Warning</option>
					<option value="alert-error">Error</option>
					<option value="alert-success">Success</option>
					<option value="alert-info">Info</option>
					</select>
				</td>
    		</tr>				
			<tr><td class="lable-all">Title</td>
    			<td><input class="input-medium" placeholder="http://facebook.com" type="text" id="alert_heading" value="" name="alert_heading"></td>
    		</tr>
			<tr><td class="lable-all">Content</td>
				<td class="text-box"><textarea class="input-xlarge"  id="alert_text" value="This text area show all text....." name="alert_text" type="text">This text area show all text.....</textarea></td>
			</tr>
			<tr><td>&nbsp;</td>
				<td><a href="javascript:AlertDialog.insert(AlertDialog.local_ed)" id="insert" style="display: block; line-height: 24px;">Insert</a></td>
			</tr>
		</tbody>
	</table>
</form>