<?php
/**
 * Badges
 */

$colors = oakwood_sg_colors();
?>
<h4>Badges <span class="badge text-bg-primary">New</span></h4>

<?php foreach ( $colors as $color ) : ?>
	<span class="badge bg-<?php echo esc_attr( $color ); ?>"><?php echo esc_html( ucwords( $color ) ); ?></span>
<?php endforeach; ?>

<div class="my-3"></div>

<h4>Pill Badges <span class="badge rounded-pill text-bg-primary">New</span></h4>
<?php foreach ( $colors as $color ) : ?>
	<span class="badge rounded-pill bg-<?php echo esc_attr( $color ); ?>"><?php echo esc_html( ucwords( $color ) ); ?></span>
<?php endforeach; 
?>

<div class="my-3"></div>

<button type="button" class="btn btn-primary">
	Notifications <span class="badge text-bg-dark">4</span>
</button>

<button type="button" class="btn btn-primary position-relative">
	Inbox
	<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
		99+	<span class="visually-hidden">unread messages</span>
	</span>
</button>

<a href="javascript:void(0);"><span class="badge bg-primary">Linked Badge</span></a> 
<a href="javascript:void(0);" class="badge bg-primary">Linked Badge</a>
