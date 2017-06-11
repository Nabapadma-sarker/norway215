<?php
/*	@Theme Name	:	Wallstreet-Pro
* 	@file         :	sidebar.php
* 	@package      :	Wallstreet-pro
* 	@filesource   :	wp-content/themes/Wallstreet/sidebar.php
*/	
?>

<?php  if ( is_active_sidebar( 'sidebar_primary' ) ) { ?>
<!--Sidebar Area-->
	<div class="col-md-4">
		<div class="sidebar-section">
			<?php dynamic_sidebar( 'sidebar_primary' );	?>
		</div>
	</div>
<!--Sidebar Area-->
<?php } ?>