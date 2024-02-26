<?php
/**
 * Alerts
 */
$colors = oakwood_sg_colors();
?>

<?php foreach ( $colors as $color ) : ?>
	<div class="alert alert-<?php echo esc_attr( $color ); ?> alert-dismissible fade show" role="alert">
		A simple <?php echo esc_html( ucwords( $color ) ); ?> alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>	
<?php endforeach; ?>

<div class="alert alert-success" role="alert">
	<h4 class="alert-heading">Well done!</h4>
	<p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
	<hr>
	<p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
</div>
