<?php 
/**
 * Progress
 */

$colors = oakwood_sg_colors();
?>

<?php foreach ( $colors as $color ) : 
	$big = rand( 60, 100 );
	$sml = rand( 20, 40 );
	?>
	<div class="progress mb-1" role="progressbar" aria-label="Example with label" aria-valuenow="<?php echo $big; ?>" aria-valuemin="0" aria-valuemax="100">
		<div class="progress-bar bg-<?php echo $color; ?>" style="width: <?php echo $big; ?>%"><?php echo $big; ?>%</div>
	</div>
	<div class="progress mb-1" role="progressbar" aria-label="Example with label" aria-valuenow="<?php echo $sml; ?>" aria-valuemin="0" aria-valuemax="100">
		<div class="progress-bar bg-<?php echo $color; ?>" style="width: <?php echo $sml; ?>%"><?php echo $sml; ?>%</div>
	</div>
	<div class="progress mb-3" role="progressbar" aria-label="Striped example" aria-valuenow="<?php echo ($big/2); ?>" aria-valuemin="0" aria-valuemax="100">
		<div class="progress-bar progress-bar-striped bg-<?php echo $color; ?>" style="width: <?php echo ($big/2); ?>%"></div>
	</div>

<?php endforeach; ?>

<div class="my-3"></div>

<div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
	<div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 75%"></div>
</div>

<div class="my-3"></div>

<div class="progress-stacked">
	<div class="progress" role="progressbar" aria-label="Segment one - default example" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
		<div class="progress-bar"></div>
	</div>
	<div class="progress" role="progressbar" aria-label="Segment two - animated striped success example" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
		<div class="progress-bar progress-bar-striped progress-bar-animated bg-success"></div>
	</div>
</div>
