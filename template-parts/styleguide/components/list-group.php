<?php
/**
 * Component: List Group
 *
 * @package     Oakwood
 * @subpackage  Oakwood/Components/Styleguide
 * @since       1.0
 */

$colors = oakwood_sg_colors();
?>
<ul class="list-group mb-3">
	<li class="list-group-item disabled" aria-disabled="true">A disabled item</li>
	<li class="list-group-item">A second item</li>
	<li class="list-group-item">A third item</li>
	<li class="list-group-item">A fourth item</li>
	<li class="list-group-item">And a fifth one</li>
</ul>

<ul class="list-group list-group-flush mb-3">
	<li class="list-group-item">An item</li>
	<li class="list-group-item">A second item</li>
	<li class="list-group-item">A third item</li>
	<li class="list-group-item">A fourth item</li>
	<li class="list-group-item">And a fifth one</li>
</ul>

<div class="list-group">

	<!-- <a href="javascript:void(0);" class="list-group-item list-group-item-action">A simple default list group item</a> -->
	<?php foreach ( $colors as $color ) : ?>
		<!-- <a href="javascript:void(0);" class="list-group-item list-group-item-action list-group-item-<?php echo esc_attr( $color ); ?>">A simple <?php echo esc_attr( $color ); ?> list group item</a> -->
	<?php endforeach; ?>

	<!-- <a href="javascript:void(0);" class="list-group-item list-group-item-action active" aria-current="true">The current default list group item</a> -->
	<?php foreach ( $colors as $color ) : ?>
		<!-- <a href="javascript:void(0);" class="list-group-item list-group-item-action list-group-item-<?php echo esc_attr( $color ); ?> active" aria-current="true">The current <?php echo esc_attr( $color ); ?> list group item</a> -->
	<?php endforeach; ?>
	
	<!-- <a href="javascript:void(0);" class="list-group-item list-group-item-action disabled" aria-disabled="true">A disabled default list group item</a> -->
	<?php foreach ( $colors as $color ) : ?>
		<!-- <a href="javascript:void(0);" class="list-group-item list-group-item-action list-group-item-<?php echo esc_attr( $color ); ?> disabled" aria-disabled="true">A disabled <?php echo esc_attr( $color ); ?> list group item</a> -->
	<?php endforeach; ?>

</div>
