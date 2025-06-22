<?php
/**
 * @file node--article.tpl.php
 * fotomarathon's theme implementation to display an article Drupal node.
 */

?>

	<div class="col-md-12 col-sm-12 center "> 
		<?php if (render($content['field_slogan'])) : ?>
			<?php print render($content['field_slogan']); ?>
		<?php endif; ?>
	</div>

	<div class="col-md-4 col-sm-4 item-responsive"> 
		<?php if (render($content['field_product_image'])) : ?>
			<?php print render($content['field_product_image']); ?>
		<?php endif; ?>
	</div>

	<div class="col-md-8 col-sm-8"> 
		<?php if (render($content['body'])) : ?>
			<?php print render($content['body']); ?>
		<?php endif; ?>
	</div>
	
	<div class="col-md-12 col-sm-12"> 
		<?php if (render($content['field_detail'])) : ?>
			<?php print render($content['field_detail']); ?>
		<?php endif; ?>
	</div>
