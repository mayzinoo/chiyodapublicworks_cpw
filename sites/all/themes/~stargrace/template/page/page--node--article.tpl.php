<?php
/**
* @file
* stargrace's theme implementation to display a single Drupal page.
*/
?>

<header class="inner">
    <div class="container smallpadding">
		<div class="logo col-md-2 col-sm-2">
			<?php if ($logo) : ?>			
				<a href="<?php print $front_page;?>" title="<?php print t('Home');?>" rel="home">
					<img src="<?php print $logo;?>" id="logo" alt="<?php print t('Home');?>" />
				</a>		
			<?php endif;?>
	    </div>
		 
		<div id="navbar" class="col-md-9 col-sm-9" >
			<!-- button -->	
				<div class="fm-button">
                    <span class="fm-bar"></span>
                    <span class="fm-bar"></span>
                    <span class="fm-bar"></span>
				</div>
			<!-- end button -->
			<div class="navigation">
				<?php if (isset ($page['menu'])) {print render($page['menu']);}?>
			</div>
		</div>		
		 
		<div class="col-md-1 col-sm-1">
			<?php if (isset ($page['header_language'])) {print render($page['header_language']);}?>
		</div>
	</div>		
</header>

<div class="grey-solid">
	<div class="midpadding">
		<div class="container">
		<div class="col-md-12 col-sm-12">
			<?php print render($title_prefix);?>
				<h2 class="page_title"><?php print $title;?></h2>
			<?php print render($title_suffix);?>
		</div>
		</div>
	</div>
</div>
	
<div class="before_content_no_wrapper">	
	<?php if (isset ($page['before_content_no_wrapper'])) : ?>
		  <!-- BEFORE CONTENT BLOCK REGION -->
		  <?php print render($page['before_content_no_wrapper']);?>
		  <!-- END BEFORE CONTENT BLOCK REGION -->
	<?php endif;?>
</div>

<section class="wow fadeIn" data-wow-duration="1500ms">
	<div class="container">
		<?php if (isset ($page['before_content'])) : ?>
			<!-- BEFORE CONTENT BLOCK REGION -->
			<?php print render($page['before_content']);?>
			<!-- END BEFORE CONTENT BLOCK REGION -->
		<?php endif;?>
		
		<div class="row midpadding">
			<?php if (($page['sidebar_left'])) : ?>
				<div class="<?php if ($page['sidebar_right']) {echo "col-md-5 col-lg-5";}else {echo "col-md-5 col-lg-5";}?>">
					<?php print render($page['sidebar_left']);?>
				</div>
			<?php endif;?>

			<div class="<?php if (($page['sidebar_right']) AND ($page['sidebar_left'])) {echo "col-md-6 col-lg-6";}elseif (($page['sidebar_right']) OR ($page['sidebar_left'])) {echo "col-md-7 col-lg-7";}else {echo "col-md-12 col-lg-12";}?>">		
					<?php print $messages;?>

					<?php if ($tabs = render($tabs)) : ?>
						<div id="drupal_tabs" class="tabs ">
							<?php print render($tabs);?>
						</div>
					<?php endif;?>
					
					<?php print render($page['help']);?>
					
					<?php if ($action_links) : ?>
						<ul class="action-links">
							<?php print render($action_links);?>
						</ul>
					<?php endif;?>

					<?php if (isset ($page['content'])) {print render($page['content']);}?>
			</div>

			<?php if (($page['sidebar_right'])) : ?>
				<div class="<?php if ($page['sidebar_left']) {echo "col-md-5 col-lg-5";}else {echo "col-md-5 col-lg-5";}?>">
					<?php print render($page['sidebar_right']);?>
				</div>
			<?php endif;?>
		</div>
	</div>
</section>
	
<section class="wow slideInUp" data-wow-duration="1500ms">
	<div class="after_content">	
		<div class="container">	
			<?php if (isset ($page['after_content'])) : ?>
				  <!-- BEFORE CONTENT BLOCK REGION -->
				  <?php print render($page['after_content']);?>
				  <!-- END BEFORE CONTENT BLOCK REGION -->
				<?php endif;?>
		</div>
	</div>
</section>

<div class="after_content_two">
	<div class="container midpadding">
		<?php if (isset ($page['after_content_two'])) : ?>
		  <!-- BEFORE CONTENT BLOCK REGION -->
		  <?php print render($page['after_content_two']);?>
		  <!-- END BEFORE CONTENT BLOCK REGION -->
		<?php endif;?>
	</div>
</div>

<footer>
	<div class="footer-top">
		<div class="container midpadding">
				<div class="col-sm-6 col-md-8 col-lg-8 midpadding">
				  <?php if (isset ($page['footer_top_left'])) : ?>
						<?php print render($page['footer_top_left']);?>
					  <?php endif;?>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-4 midpadding">
				  <?php if (isset ($page['footer_top_right'])) : ?>
						<?php print render($page['footer_top_right']);?>
					  <?php endif;?>
				</div>
		</div>
	</div>

	<div class="footer-bottom">
		<div class="container smallpadding">
				<div class="col-sm-6 col-md-9 col-lg-9">
				  <?php if (isset ($page['footer_bottom_left'])) : ?>
						<?php print render($page['footer_bottom_left']);?>
					  <?php endif;?>
				</div>
				<div class="col-sm-6 col-md-3 col-lg-3">
				  <?php if (isset ($page['footer_bottom_right'])) : ?>
						<?php print render($page['footer_bottom_right']);?>
					  <?php endif;?>
				</div>
		</div>
	</div>
</footer>
<script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    document.getElementById('moar').onclick = function() {
      var section = document.createElement('section');
      section.className = 'section--purple wow fadeInDown';
      this.parentNode.insertBefore(section, this);
    };
</script>