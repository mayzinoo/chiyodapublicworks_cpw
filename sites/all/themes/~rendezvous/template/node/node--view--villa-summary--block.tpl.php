<?php

?>

<div class="col-md-6 col-sm-6">
	<div class="smallpadding">
		<a href="<?php print $node_url;?>" class="bold">
			<?php print $title; ?>
		</a>
	</div>
	
	<div class="img-responsive smallpadding">
		<?php
			print render($content['field_thumbnail_image']);
		?>
	</div>

	<div class=" smallpadding">
		<?php
			hide($content['field_thumbnail_image']); 	
			print render($content);
		?>
	</div>
		
	<a class="more" href="<?php print $node_url;?>">Read More</a>
</div>
