<?php
/**
* @file
* rendezvous's theme implementation to display a single Drupal page.
*/
?>

<header>
<div class="container right">
	          <?php if (isset ($page['header_language'])) {print render($page['header_language']);}?>
	</div>
	<div class="logo center">
		<div class="container">
			<?php if ($logo) : ?>			
				<a href="<?php print $front_page;?>" title="<?php print t('Home');?>" rel="home">
					<img src="<?php print $logo;?>" id="logo" alt="<?php print t('Home');?>" />
				</a>		
			<?php endif;?>
		</div>
	</div>
	
	<div id="navbar">
		<div class="container">
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
	</div>	
</header>


	<div class="lightpink-solid title-bg">
		<div class="midpadding">
			<div class="container">
				<?php print render($title_prefix);?>
					<h2 class="page_title"><?php print $title;?></h2>
				<?php print render($title_suffix);?>
			</div>
		</div>
	</div>
<section class="wow fadeIn" data-wow-duration="500ms">
	<?php if (isset ($page['before_content'])) : ?>
	<!-- BEFORE CONTENT BLOCK REGION -->
		<?php print render($page['before_content']);?>
	<!-- END BEFORE CONTENT BLOCK REGION -->
	<?php endif;?>	
</section>
				
<section class="content wow fadeIn" data-wow-duration="1500ms">
	<div class="container midpadding">	
		<div class="row">
			<?php if (($page['sidebar_left'])) : ?>
			<aside id="sidebar-left">
				<div class="<?php if ($page['sidebar_right']) {echo "col-md-3 col-lg-3";}else {echo "col-md-3 col-lg-3";}?> sidebar">
					<div id="sticky-sidebar">
						<?php print render($page['sidebar_left']);?>
					</div>
				</div>
			</aside>
			<?php endif;?>

			<div class="<?php if (($page['sidebar_right']) AND ($page['sidebar_left'])) {echo "col-md-6 col-lg-6";}elseif (($page['sidebar_right']) OR ($page['sidebar_left'])) {echo "col-md-9 col-lg-9";}else {echo "col-md-12 col-lg-12";}?>">		
			
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
			<div class="<?php if ($page['sidebar_left']) {echo "col-md-3 col-lg-3";}else {echo "col-md-3 col-lg-3";}?>">
				<?php print render($page['sidebar_right']);?>
			</div>
			<?php endif;?>
			</div>
		</div>
</section>

<section class="wow fadeIn" data-wow-duration="2000ms">
		<div class="col-md-12 col-sm-12">
			<?php if (isset ($page['after_content'])) : ?>
			  <!-- BEFORE CONTENT BLOCK REGION -->
			  <?php print render($page['after_content']);?>
			  <!-- END BEFORE CONTENT BLOCK REGION -->
			<?php endif;?>
		</div>
</section>

<footer>
	<div class="footer-top">
		<div class="container">
<?php if (isset ($page['menu'])) : ?>
				<?php print render($page['menu']);?>
			<?php endif;?>
			<?php if (isset ($page['footer_top'])) : ?>
				<?php print render($page['footer_top']);?>
			<?php endif;?>
		</div>
	</div>

	<div class="container bigpadding">
			<div class="col-md-9 col-lg-9">
			  <?php if (isset ($page['footer_left'])) : ?>
					<?php print render($page['footer_left']);?>
				  <?php endif;?>
			</div>
			<div class="col-md-3 col-lg-3">
			  <?php if (isset ($page['footer_right'])) : ?>
					<?php print render($page['footer_right']);?>
				  <?php endif;?>
			</div>
	</div>
	
	<div class="footer-bottom smallpadding">
		<div class="container">
			<?php if (isset ($page['footer_bottom'])) : ?>
				<?php print render($page['footer_bottom']);?>
			<?php endif;?>
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
