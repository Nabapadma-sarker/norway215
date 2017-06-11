<script type="text/javascript">
var ColumnDialog = {
	local_ed : 'ed',
	init : function(ed) {
		ColumnDialog.local_ed = ed;
		tinyMCEPopup.resizeToInnerSize();
	},
	insert : function insertColumn(ed) {		
		tinyMCEPopup.execCommand('mceRemoveNode', true, null);
		var size = jQuery('select#column-size').val();		
		var textdata = jQuery('textarea#column-content').val();		
		var mceSelected = tinyMCE.activeEditor.selection.getContent();
		if(!textdata)
		{  textdata = "text"; }		
		var	output ='';			
		if(size == "col-md-6")
		{ 	output1 = "[column size='" + size + "' ] "+ textdata + "[/column]";
			output2 = output1;
			output = "[row]" + output1 + output2 + "[/row]";		
		}
		if(size == "col-md-12")
		{ 	var output1 = "[column size='" + size + "' ] "+ textdata + "[/column]";			
			output = "[row]" + output1 + "[/row]<br>";		
		}
		if(size == "col-md-3")
		{ 	var output1 = "[column size='" + size + "' ] "+ textdata + "[/column]";	
			var output2 = output3 = output4 = output1;			
			output = "[row]" + output1 + output2 + output3 + output4 +"[/row]";	
		}
		if(size == "col-md-4")
		{ 	var output1 = "[column size='" + size + "' ] "+ textdata + "[/column]";	
			var output2 = output3 = output1;			
			output = "[row]" + output1 + output2 + output3 +"[/row]";	
		}
		if(size == "col-md-8")
		{ 	var output1 = "[column size='" + size + "' ] "+ textdata + "[/column]";	
			var output2 = "[column size='col-md-4' ]"+ textdata + "[/column]";				
			output = "[row]" + output1 + output2  +"[/row]";	
		}
		if(size == "col-md-9")
		{ 	var output1 = "[column size='" + size + "' ] "+ textdata + "[/column]";	
			var output2 = "[column size='col-md-3' ] "+ textdata + "[/column]";				
			output = "[row]" + output1 + output2  +"[/row]";
		}		
		tinyMCEPopup.execCommand('mceReplaceContent', true, output);
		tinyMCEPopup.close();
	}
};
tinyMCEPopup.onInit.add(ColumnDialog.init, ColumnDialog);
 
</script>
<form action="/" method="get" accept-charset="utf-8">
    <div class="form-section clearfix">
        <label for="column-size">Size</label>
        <select name="column-size" id="column-size" size="1">
            <option value="col-md-6" selected="selected">1/2</option>
            <option value="col-md-3">1/4</option>   
			<option value="col-md-4">1/3</option>                     
            <option value="col-md-8">2/3</option>
            <option value="col-md-9">3/4</option>
			<option value="col-md-12">full width layout</option>
        </select>
    </div>
	<div class="form-section clearfix">
        <label for="column-content">Content<br /><small>Leave Blank To Use Highlighted</small></label>
        <textarea type="text" name="" value="" id="column-content"></textarea>
    </div>
    <a href="javascript:ColumnDialog.insert(ColumnDialog.local_ed)" id="insert" style="display: block; line-height: 24px;">Insert</a>
</form>