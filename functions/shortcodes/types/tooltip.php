<script type="text/javascript">
var tooltipDialog = {
	local_ed : 'ed',
	init : function(ed) {
		tooltipDialog.local_ed = ed;
		tinyMCEPopup.resizeToInnerSize();
	},
	insert : function inserttooltip(ed) {
	 	tinyMCEPopup.execCommand('mceRemoveNode', false, null);
	
	   
		var tooltip_text = jQuery('textarea#tooltip_text').val();
		var tooltip_url = jQuery('input#tooltip_url').val();
		var tooltip_word = jQuery('input#tooltip_word').val();
		var tip_word = jQuery('input#tip_word').val();
		
		
		
		
		var mceSelected = tinyMCE.activeEditor.selection.getContent();
		var output = '';
		output = '&nbsp;';
		
		output = '[tooltip';
			
		if(tooltip_text)
		{
			output += ' tooltip_text=\"' + tooltip_text +'\"';		
		}
		
		if(tooltip_url)
		{
			output += ' tooltip_url=\"' + tooltip_url +'\"';		
		}
			
		if(tooltip_word)
		{
			output += ' tooltip_word=\"' + tooltip_word +'\"';		
		}
		
		if(tip_word)
		{
			output += ' tip_word=\"' + tip_word +'\"';		
		}
			
		output += '/]';
		
		tinyMCEPopup.execCommand('mceReplaceContent', false, output);
		tinyMCEPopup.close();
	}
};
tinyMCEPopup.onInit.add(tooltipDialog.init, tooltipDialog);
</script>
<form action="/" method="get" accept-charset="utf-8">
    <table class="table table-bordered table-condensed">
		<tbody>
			<tr>
					<td class="lable-all">Tool Tip URL</td>
					<td>
					<input class="input-medium" placeholder="Enter Word.." type="text" id="tooltip_url" value="" name="tooltip_url">
					</td>
			</tr>
			
			<tr>
					<td class="lable-all">Tool Tip Word</td>
					<td>
					<input class="input-medium" placeholder="Enter Word.." type="text" id="tooltip_word" value="" name="tooltip_word">
					</td>
			</tr>
			
			<tr>
					<td class="lable-all">Tip Word</td>
					<td>
					<input class="input-medium" placeholder="Enter Word.." type="text" id="tip_word" value="" name="tip_word">
					</td>
			</tr>
			
			<tr>
					<td class="lable-all">Content</td>
					<td class="text-box"><textarea class="input-xlarge"  id="tooltip_text" value="This text area show all text....." name="tooltip_text" type="text"></textarea></td>
			</tr>
			
			<tr><td>&nbsp;</td>
			<td><a href="javascript:tooltipDialog.insert(tooltipDialog.local_ed)" id="insert" style="display: block; line-height: 24px;">Insert</a>
			</td>
			</tr>
		</tbody>
	</table>
</form>