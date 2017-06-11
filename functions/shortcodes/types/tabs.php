<script type="text/javascript">
/* Tabs   script js*/
var TabsDialog = {
	local_ed : 'ed',
	init : function(ed) {
		TabsDialog.local_ed = ed;
		tinyMCEPopup.resizeToInnerSize();
	},
	insert : function insertTabs(ed) {
	 	tinyMCEPopup.execCommand('mceRemoveNode', false, null);
	    var style = jQuery('select#tabs-style').val();
	    var wrap = jQuery('select#tabs-wrap').val();
		var tabs_title = jQuery('input#tabs_title').val();
		var tabs_text = jQuery('textarea#tabs_text').val(); 
		var mceSelected = tinyMCE.activeEditor.selection.getContent();
		var output = '';		
		 if(wrap == 'yes') {
			output += '[tabgroup ';
			if(tabs_title) 
			{	
				output += ' tabs_title=\"' + tabs_title +'\"';
				
			}
			output += ']';
		     }
		output += '[tabs ';
		
		if(tabs_title) 
		{	
			output += ' tabs_title=\"' + tabs_title +'\"';
			
		}
			output += ' wrap=\"' + wrap +'\"';
		if(tabs_text) 
		{	
			output += " tabs_text=\'" + tabs_text +"\'";
		}
		output += '/]';
		
		if(wrap == 'yes') {
			output += '[/tabgroup]';
		}
		tinyMCEPopup.execCommand('mceReplaceContent', false, output);
		tinyMCEPopup.close();
	}
};
tinyMCEPopup.onInit.add(TabsDialog.init, TabsDialog);
</script>
<form action="/" method="get" accept-charset="utf-8">
       	<table class="table table-bordered table-condensed">
			<tbody>
				<tr>
				  <td>&nbsp;</td>
				  <td class="lable-all">Select Setting </td>
				</tr>				
				<tr>
				   <td class="lable-all" >New Tab Group?<br/ ><small>Select yes if this is the first tab in the set.</small></td>
                    <td class="lable-all"> 
					    <select name="tabs-wrap" id="tabs-wrap" size="1">
                           <option value="no" selected="selected">No</option>
                           <option value="yes">Yes</option>
						</select>  
				    </td>
          		</tr>
				<tr>
					<td class="lable-all">Tab Title</td>
					<td><input class="input-medium" placeholder="home" type="text" id="tabs_title" value="" name="tabs_title"></td>
				</tr>				
				<tr>
					<td class="lable-all">Tab Content</td>
					<td class="text-box"><textarea class="input-xlarge" placeholder="This text area show all text" id="tabs_text" value="This text area show all text....." name="tabs_text" type="text">This text area show all text.....</textarea></td>
				</tr>				
				<tr>
					<td>&nbsp;</td>
					<td><a href="javascript:TabsDialog.insert(TabsDialog.local_ed)" id="insert" style="display: block; line-height: 24px;">Insert</a>
					</td>
				</tr>
			</tbody>
		</table>    
</form>