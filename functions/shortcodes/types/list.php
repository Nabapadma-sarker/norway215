<script type="text/javascript">
fields = 1;
function addInput() {
	jQuery('#text').append('<tr  id="tr-title'+fields+'"><td class="lable-all" id="title-label'+fields+'">List-Item-'+fields+'</td><td><input type="text" id="list-item'+fields+'" style="font-size:13px;margin-bottom:1%" class="input-medium" value="" /></td></tr><tr>&nbsp;&nbsp;</tr>');
	fields += 1;
	jQuery("#more_field").find('input:button').val("Add More List Item");
	jQuery("#remove_button").show();
 }
 function remove_field() {
		if(fields!="1"){
			fields=fields-1;
			jQuery("#tr-title"+fields).remove();
			jQuery("#tr-text"+fields).remove();
		}
	}

var ListDialog = {
	local_ed : 'ed',
	init : function(ed) {
		ListDialog.local_ed = ed;
		tinyMCEPopup.resizeToInnerSize();
	},
	insert : function insertList(ed) {
	 
		// Try and remove existing style / blockquote
		tinyMCEPopup.execCommand('mceRemoveNode', false, null);		
		fields= fields-1;
		
		
		var list_item = new Array();
			for(i=1;i<=fields;i++)
			{
				var item = jQuery("#list-item"+i).val();
				list_item[i] = item; 
			}
			
		var list_style = jQuery("#list_style").val();
		var mceSelected = tinyMCE.activeEditor.selection.getContent();
		var output ='[list' +' '+'fields="'+fields +'" '+'list_style="'+list_style+'" ';
		if(list_item) 
		{	output += ' list_item="' + list_item +'"';	}
		
		output += ' /]';
		
		tinyMCEPopup.execCommand('mceReplaceContent', false, output);
		 
		// Return
		tinyMCEPopup.close();
	}
};
tinyMCEPopup.onInit.add(ListDialog.init, ListDialog);
</script>
<style>
.shortcode-button{
background: #2ea2cc;
background: -webkit-gradient(linear, left top, left bottom, from(#2ea2cc), to(#1e8cbe));
background: -webkit-linear-gradient(top, #2ea2cc 0%,#1e8cbe 100%);
background: linear-gradient(top, #2ea2cc 0%,#1e8cbe 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#2ea2cc', endColorstr='#1e8cbe',GradientType=0 );
border-color: #0074a2;
-webkit-box-shadow: inset 0 1px 0 rgba(120,200,230,0.5);
box-shadow: inset 0 1px 0 rgba(120,200,230,0.5);
color: #fff;
text-decoration: none;
text-shadow: 0 1px 0 rgba(0,86,132,0.7);

}
.shortcode-button:hover{
background: #2ea2cc;
background: -webkit-gradient(linear, left top, left bottom, from(#2ea2cc), to(#1e8cbe));
background: -webkit-linear-gradient(top, #2ea2cc 0%,#1e8cbe 100%);
background: linear-gradient(top, #2ea2cc 0%,#1e8cbe 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#2ea2cc', endColorstr='#1e8cbe',GradientType=0 );
border-color: #0074a2;
-webkit-box-shadow: inset 0 1px 0 rgba(120,200,230,0.5);
box-shadow: inset 0 1px 0 rgba(120,200,230,0.5);
color: #fff;
text-decoration: none;
text-shadow: 0 1px 0 rgba(0,86,132,0.7);
opacity:0.8;
}
.remove-button{
background-color: #da4f49;
background-image: -moz-linear-gradient(top, #ee5f5b, #bd362f);
background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ee5f5b), to(#bd362f));
background-image: -webkit-linear-gradient(top, #ee5f5b, #bd362f);
background-image: -o-linear-gradient(top, #ee5f5b, #bd362f);
background-image: linear-gradient(to bottom, #ee5f5b, #bd362f);
background-repeat: repeat-x;
border-color: #bd362f #bd362f #802420;
border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
color:#fff;
width:30% !important;
float: right !important;

}
</style>
<form action="/" method="get" accept-charset="utf-8">
		<table class="table table-bordered table-condensed">
			<tbody>
			   <tr>
    			<td class="lable-all">List Style</td>
    			<td>
					<select class="select-medium" size="1" id="list_style" name="list_style">
						<!---<option value="unordered" selected="selected">unordered</option>
						<option value="ordered">ordered</option>
						<option value="circle">circle</option> ----->
						<option value="chevron circle right" selected="selected">chevron circle right</option>
						<option value="thumbs up">thumbs up</option>
						<option value="check circle">check circle</option>
						<option value="caret right">caret right</option>
						<option value="chevron right">chevron right</option>
						<option value="angle double right">angle double right</option>
						<option value="dot circle">dot circle</option>
						<option value="arrow">arrow</option>
					</select>
				</td>
    		</tr>
			</tbody>
		</table>
		<table class="table table-bordered table-condensed">
			<tbody id="text">				
				<tr><td>&nbsp;</td>
				<td> <a href="javascript:ListDialog.insert(ListDialog.local_ed)" id="insert" style="display: block; line-height: 24px;">Insert</a></td>
				</tr>
			</tbody>
		</table>
		<div style="margin-bottom: 2%;margin-top:3%" >
			<div  id="more_field" style="float:left">	
				<input type="button" onclick="addInput()" class="shortcode-button" name="add" id="more"  value="Add List Item" /><br>
			</div>	
			<input type="button" onclick="remove_field()" class="remove-button" name="remove_button" id="remove_button"  value="Remove Last Field" style="display:none;" />
		</div>
</form>