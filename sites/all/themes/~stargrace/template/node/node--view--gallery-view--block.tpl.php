<?php

?>


<?php $imgcount = count($node->field_gallery_image['und']);   ?>

<?php for ($i = 0; $i < $imgcount; $i++):  ?>
	<div class="gallery-light">
		<img src="<?php echo file_create_url($node->field_gallery_image['und'][$i]['uri']); ?>" >
		
			<div id="gallery-title">			
				<img class="jslghtbx-thmb" src="http://stargracemyanmar.com/stargrace/sites/all/themes/stargrace/images/zoom.png"  alt="" data-jslghtbx="<?php echo file_create_url($node->field_gallery_image['und'][$i]['uri']); ?>" data-jslghtbx-group="group3"
				data-jslghtbx-caption="This picture was taken at <a href='http://en.wikipedia.org/wiki/Lake_Constance'>Bodensee, Germany</a>.">
			
			
			</div>
	</div>
<?php endfor; ?>





