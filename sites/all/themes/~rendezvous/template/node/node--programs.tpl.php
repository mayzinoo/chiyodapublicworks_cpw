<?php
/**
 * @file node--article.tpl.php
 * fotomarathon's theme implementation to display an article Drupal node.
 */

?>
<div class="inner-program">
	<div class="full-title col-md-6 col-sm-6 center largesidepadding bigpadding"> 
		<?php if (render($content['field_tour_title_detail'])) : ?>
			<div class="node-image">
				<?php print render($content['field_tour_title_detail']); ?>
			</div>
		<?php endif; ?>
	</div>

	<div class="col-md-6 col-sm-6 nopadding bigbottommargin"> 
		<?php if (render($content['field_slide_image'])) : ?>
			<div class="node-image">
				<?php print render($content['field_slide_image']); ?>
			</div>
		<?php endif; ?>
	</div>

	<div class="container">
		<?php
		// We hide the comments and links now so that we can render them later.
		hide($content['comments']);
		hide($content['links']);
		hide($content['field_slide_image']);
		print render($content);
		?>
	</div>
</div>