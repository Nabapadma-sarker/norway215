<script type="text/javascript">
var GLSDialog = {
	local_ed : 'ed',
	init : function(ed) {
		GLSDialog.local_ed = ed;
		tinyMCEPopup.resizeToInnerSize();
	},
	insert : function insertGLS(ed) {
	 
		// Try and remove existing style / blockquote
		tinyMCEPopup.execCommand('mceRemoveNode', false, null); 
		 
		//set highlighted content variable
		var mceSelected = tinyMCE.activeEditor.selection.getContent();
		var output = '';
		output = '&nbsp;';		
		var grid_layout = jQuery('select#grid_layout').val();
				
		if(grid_layout == "two-column")
		{
			var one_column_title = jQuery('input#one_column_title').val();
			var one_column_description = jQuery('textarea#one_column_description').val(); 
			var two_column_title = jQuery('input#two_column_title').val();
			var two_column_description = jQuery('textarea#two_column_description').val();			
			
			output = '[gridsystemlayout';			
			output += ' grid_layout=\"' + grid_layout +'\"'; 
			
			if(one_column_title) { output += ' one_column_title=\"' + one_column_title +'\"';	}
			if(one_column_description)	{	output += ' one_column_description=\"' + one_column_description +'\"'; }
			if(two_column_title) { output += ' two_column_title=\"' + two_column_title +'\"';	}
			if(two_column_description)	{	output += ' two_column_description=\"' + two_column_description +'\"'; }
			output += '/]'; 
		
        }	
		
		if(grid_layout == "three-column")
		{
			var one_column_title = jQuery('input#one_column_title').val();
			var one_column_description = jQuery('textarea#one_column_description').val(); 
			var two_column_title = jQuery('input#two_column_title').val();
			var two_column_description = jQuery('textarea#two_column_description').val();
			var three_column_title = jQuery('input#three_column_title').val();
			var three_column_description = jQuery('textarea#three_column_description').val();			
			
			output = '[gridsystemlayout';			
			output += ' grid_layout=\"' + grid_layout +'\"'; 
			if(one_column_title) { output += ' one_column_title=\"' + one_column_title +'\"';	}
			if(one_column_description)	{	output += ' one_column_description=\"' + one_column_description +'\"'; }
			if(two_column_title) { output += ' two_column_title=\"' + two_column_title +'\"';	}
			if(two_column_description)	{	output += ' two_column_description=\"' + two_column_description +'\"'; }
			if(three_column_title) { output += ' three_column_title=\"' + three_column_title +'\"';	}
			if(three_column_description)	{	output += ' three_column_description=\"' + three_column_description +'\"'; }
			
			output += '/]'; 	
        }	
		
		if(grid_layout == "fourth-column")
		{
			var one_column_title = jQuery('input#one_column_title').val();
			var one_column_description = jQuery('textarea#one_column_description').val(); 
			var two_column_title = jQuery('input#two_column_title').val();
			var two_column_description = jQuery('textarea#two_column_description').val();
			var three_column_title = jQuery('input#three_column_title').val();
			var three_column_description = jQuery('textarea#three_column_description').val();
			var fourth_column_title = jQuery('input#fourth_column_title').val();
			var fourth_column_description = jQuery('textarea#fourth_column_description').val();			
			
			output = '[gridsystemlayout';			
			output += ' grid_layout=\"' + grid_layout +'\"'; 
			if(one_column_title) { output += ' one_column_title=\"' + one_column_title +'\"';	}
			if(one_column_description)	{	output += ' one_column_description=\"' + one_column_description +'\"'; }
			if(two_column_title) { output += ' two_column_title=\"' + two_column_title +'\"';	}
			if(two_column_description)	{	output += ' two_column_description=\"' + two_column_description +'\"'; }
			if(three_column_title) { output += ' three_column_title=\"' + three_column_title +'\"';	}
			if(three_column_description)	{	output += ' three_column_description=\"' + three_column_description +'\"'; }
			if(fourth_column_title) { output += ' fourth_column_title=\"' + fourth_column_title +'\"';	}
			if(fourth_column_description)	{	output += ' fourth_column_description=\"' + fourth_column_description +'\"'; }
			
			output += '/]'; 	
        }	

		tinyMCEPopup.execCommand('mceReplaceContent', false, output);
		
		tinyMCEPopup.close();
	}
};
tinyMCEPopup.onInit.add(GLSDialog.init, GLSDialog);
function SelectGridLayout()
{	var grid_layout = jQuery('select#grid_layout').val();

	if(grid_layout=="one-column"){
		$('#grid_layout_system_one').show();
		$('#grid_layout_system_two').hide();
		$('#grid_layout_system_three').hide();
		$('#grid_layout_system_fourth').hide();
	}
	
	if(grid_layout=="two-column"){
		$('#grid_layout_system_one').show();
		$('#grid_layout_system_two').show();
		$('#grid_layout_system_three').hide();
		$('#grid_layout_system_fourth').hide();
	}
	
	if(grid_layout=="three-column"){
		$('#grid_layout_system_one').show();
		$('#grid_layout_system_two').show();
		$('#grid_layout_system_three').show();
		$('#grid_layout_system_fourth').hide();
	}
	
	if(grid_layout=="fourth-column"){
		$('#grid_layout_system_one').show();
		$('#grid_layout_system_two').show();
		$('#grid_layout_system_three').show();
		$('#grid_layout_system_fourth').show();
	}
} 
</script>
<form action="/" method="get" accept-charset="utf-8">
	<div class="form-section clearfix">
        <label for="Grid Layout">Grid Layout</label>
        <select name="grid_layout" id="grid_layout" onchange=SelectGridLayout();>
            
            <option value="two-column">two-column</option>
             <option value="three-column">three-column</option>
            <option value="fourth-column">fourth-column</option>
        </select>
    </div>
	<div id="grid_layout_system_one">
		<div class="form-section clearfix">       
			<label for="hr-margin-top">Title one-column </label>
			<input type="text" name="one_column_title" id="one_column_title" />
		</div>
		<div class="form-section clearfix">       
			<label for="hr-margin-top">Description one-column </label>
			<textarea  name="one_column_description" id="one_column_description" />
		</div>
    </div>
	<div id="grid_layout_system_two" style="display:none">
		<div class="form-section clearfix">       
			<label for="hr-margin-top">Title two-column </label>
			<input type="text" name="two_column_title" id="two_column_title" />
		</div>
		<div class="form-section clearfix">       
			<label for="hr-margin-top">Description two-column</label>
			<textarea  name="two_column_description" id="two_column_description" />
		</div>
    </div>
	<div id="grid_layout_system_three" style="display:none">
		<div class="form-section clearfix">       
			<label for="hr-margin-top">Title three-column</label>
			<input type="text" name="three_column_title" id="three_column_title" />
		</div>
		<div class="form-section clearfix">       
			<label for="hr-margin-top">Description three-column</label>
			<textarea  name="three_column_description" id="three_column_description" />
		</div>
    </div>
	<div id="grid_layout_system_fourth" style="display:none">
		<div class="form-section clearfix">       
			<label for="hr-margin-top">Title fourth-column</label>
			<input type="text" name="fourth_column_title" id="fourth_column_title" />
		</div>
		<div class="form-section clearfix">       
			<label for="hr-margin-top">Description fourth-column</label>
			<textarea  name="fourth_column_description" id="fourth_column_description" />
		</div>
    </div>	
	<a href="javascript:GLSDialog.insert(GLSDialog.local_ed)" id="insert" style="display: block; line-height: 24px;">Insert</a>
</form>