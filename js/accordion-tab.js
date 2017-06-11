/* Accordion Js */
   
		jQuery(document).ready(function() {
		
			jQuery('.collapse').on('shown.bs.collapse', function(){jQuery(this).parent().find(".fa-plus").removeClass("fa-plus").addClass("fa-minus");}).on('hidden.bs.collapse', function(){jQuery(this).parent().find(".fa-minus").removeClass("fa-minus").addClass("fa-plus");});
		
		});