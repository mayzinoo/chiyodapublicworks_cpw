<?php

?>

<div class="col-md-4 col-sm-4 item-responsive midbottommargin">
<div class="light-grey-solid smallborder">
    <?php
        print render($content['field_thumbnail_project_image']);
    ?>

<div class="midpadding center">
    <a href="<?php print $node_url;?>" class="uppercase">
        <?php print $title; ?>
    </a>
</div>
</div>
</div>