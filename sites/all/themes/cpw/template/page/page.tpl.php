<?php
/**
* @file
* stargrace's theme implementation to display a single Drupal page.
*/
?>

<header>
    <div class="header-top">
    <div class="row">
        <div class="container">
            <div class="col-md-8 col-lg-8">
                <div class="container midpadding">
                    <div class="logo left wow fadeIn" data-wow-duration="1000ms" >
                        <?php if ($logo) : ?>
                            <a href="<?php print $front_page;?>" title="<?php print t('Home');?>" rel="home">
                                <img src="<?php print $logo;?>" id="logo" alt="<?php print t('Home');?>" />
                            </a>        
                        <?php endif;?>
                    </div>

                    <h2>CHIYODA & PUBLIC WORK CO.,LTD</h2>  
                    
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                    <section class="header-right midpadding">
                        <?php if (isset ($page['header_right'])) : ?>
                              <!-- BEFORE CONTENT BLOCK REGION -->
                              <?php print render($page['header_right']);?>
                              <!-- END BEFORE CONTENT BLOCK REGION -->
                        <?php endif;?>
                    </section>
            </div>
        </div><!-- end of container -->
    </div>    
    </div><!-- end of header top -->

    <div class="row">
            <section id="navbar">
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
                </div><!-- end of container -->
            </section>
    </div><!-- end of header bottom -->
</div>
</header>


<div class="innerpage-title">
    <div class="largetoppadding container">
        <div class="row">
        <div class="col-md-12 col-sm-12 nopadding">
            <?php print render($title_prefix);?>
                <h1 class="page_title"><?php print $title;?></h1>
            <?php print render($title_suffix);?>
        </div>
        </div>
    </div>
</div>

<section class="wow fadeIn" data-wow-duration="1500ms">
    <div class="container">
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

<section class="wow fadeInDown" data-wow-duration="1500ms">
    <div data-stellar-background-ratio="0.1">
            <?php if (isset ($page['after_content'])) : ?>
                  <!-- BEFORE CONTENT BLOCK REGION -->
                  <?php print render($page['after_content']);?>
                  <!-- END BEFORE CONTENT BLOCK REGION -->
                <?php endif;?>
    </div>
</section>
<section class="wow fadeInDown" data-wow-duration="1500ms">
    <div class="after_content_two">
            <?php if (isset ($page['after_content_two'])) : ?>
                  <!-- BEFORE CONTENT BLOCK REGION -->
                  <?php print render($page['after_content_two']);?>
                  <!-- END BEFORE CONTENT BLOCK REGION -->
                <?php endif;?>
    </div>
</section>
<footer>
    <div class="container">
            <div class="col-md-12 col-lg-12">
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