<?php

?>

<div class="col-md-6 col-sm-6 bigbottommargin">
<div class="col-md-4 col-sm-4">
	
	<div class="item-responsive">
		<?php
			print render($content['field_activities_image']);
		?>
	</div>

</div>

<div class="col-md-8 col-sm-8">
	


	<div class=" smallpadding">
		<?php
			hide($content['field_activities_image']); 	
			print render($content);
		?>
	</div>
		
	<a class="more activitiesmore" href="<?php print $node_url;?>">Read More</a>
	</div>
</div>

<br>
<br>