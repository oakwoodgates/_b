<?php

/**
 * Spinners
 */

$colors = oakwood_sg_colors();

foreach ($colors as $color) : ?>
	<div class="spinner-border text-<?php echo esc_attr($color); ?>" role="status">
		<span class="visually-hidden">Loading...</span>
	</div>
<?php
endforeach; ?>

<div class="my-3"></div>

<?php foreach ($colors as $color) :	?>
	<div class="spinner-grow text-<?php echo esc_attr($color); ?>" role="status">
		<span class="visually-hidden">Loading...</span>
	</div>
<?php endforeach; ?>

<div class="my-3"></div>

<button class="btn btn-primary" type="button" disabled>
	<span class="spinner-grow spinner-grow-sm" aria-hidden="true"></span>
	<span class="visually-hidden" role="status">Loading...</span>
</button>
<button class="btn btn-primary" type="button" disabled>
	<span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
	<span role="status">Loading...</span>
</button>
