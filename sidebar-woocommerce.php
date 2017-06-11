<?php
/**
 * side bar template
 *
 * @package WordPress
 * @subpackage spasalon
 */
?>

<?php if ( is_active_sidebar( 'woocommerce' )  ) : ?>
<!--Sidebar-->
<div class="col-md-4 col-xs-12">
	<div class="sidebar-section">
		<?php dynamic_sidebar( 'woocommerce' ); ?>
	</div>
</div>
<!--/End of Sidebar-->
<?php endif; ?>