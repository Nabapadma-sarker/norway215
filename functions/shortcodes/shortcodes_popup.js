(function ramboshortcodes() {
	tinymce.create('tinymce.plugins.wpex_shortcodesPlugin', {
		init : function(ed, url) {
			// Register commands
			ed.addCommand('mcewebriti_shortcodes_shortcodes', function ramboshortcodes() {
				ed.windowManager.open({
					file : url + '/shortcodes_iframe.php', // file that contains HTML for our modal window
					width : 600 + parseInt(ed.getLang('webriti_shortcodes.delta_width', 0)), // size of our window
					height : 700 + parseInt(ed.getLang('webriti_shortcodes.delta_height', 0)), // size of our window
					inline : 1
				}, {
					plugin_url : url
				});
			});
			 
			// Register wpex_shortcodess
			ed.addButton('webriti_shortcodes', {title : 'Theme Shortcode', cmd : 'mcewebriti_shortcodes_shortcodes', image: url + '/images/add1.png' });
		},
		 
		getInfo : function ramboshortcodes() {
			return {
				longname : 'Insert Shortcode',
				author : 'webriti',
				authorurl : 'http://webriti.com',
				infourl : 'http://webriti.com',
				version : tinymce.majorVersion + "." + tinymce.minorVersion
			};
		}
	});
	 
	// Register plugin
	// first parameter is the wpex_shortcodes ID and must match ID elsewhere
	// second parameter must match the first parameter of the tinymce.create() function above
	tinymce.PluginManager.add('webriti_shortcodes', tinymce.plugins.wpex_shortcodesPlugin);

})();