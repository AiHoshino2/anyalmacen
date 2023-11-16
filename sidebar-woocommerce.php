<?php
/**
 * side bar template
 *
 * @package Expert Healthcare
 */
?>
<?php if ( ! is_active_sidebar( 'expert-healthcare-woocommerce-sidebar' ) ) {	return; } ?>
<div class="col-lg-4 pl-lg-4 my-5 order-0">
	<div class="sidebar">
		<?php dynamic_sidebar('expert-healthcare-woocommerce-sidebar'); ?>
	</div>
</div>