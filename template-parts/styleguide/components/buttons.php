<?php
/**
 * Buttons
 */

$colors = oakwood_sg_colors();

foreach ($colors as $color) : ?>
    <button type="button" class="btn btn-<?php echo esc_attr($color); ?>"><?php echo esc_html(ucfirst($color)); ?></button>
<?php endforeach; ?>
<button type="button" class="btn btn-link">Link</button>

<div class="my-3"></div>

<?php foreach ($colors as $color) : ?>
    <button type="button" class="btn btn-outline-<?php echo esc_attr($color); ?>"><?php echo esc_html(ucfirst($color)); ?></button> 
<?php endforeach; ?>

<div class="my-3"></div>

<button type="button" class="btn btn-primary btn-sm">Small button</button>
<button type="button" class="btn btn-primary">Standard button</button>
<button type="button" class="btn btn-primary btn-lg">Large button</button>
