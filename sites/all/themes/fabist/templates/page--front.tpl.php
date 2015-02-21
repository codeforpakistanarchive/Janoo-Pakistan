<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>
<div id="page">
  <?php if ($page['header_upper']): ?>
    <div class="header-upper">
	  <?php print render($page['header_upper']); ?>
	</div>
  <?php endif; ?>
  <div class="page-inner">
    <header class="header" id="header" role="banner">
      <div class="header-top">
	  	<div class="header-upper-area1-2">
	  	  <?php print render($page['header_upper_1']); ?>
		  <?php print render($page['header_upper_2']); ?>
		  </div>
        <div class="header-left">
          <?php if ($logo): ?>
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image" /></a>
          <?php endif; ?>
          <?php if ($site_name || $site_slogan): ?>
            <div class="header__name-and-slogan" id="name-and-slogan">
              <?php if ($site_name): ?>
                <h1 class="header__site-name" id="site-name">
                  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="header__site-link" rel="home"><span><?php print $site_name; ?></span></a>
                </h1>
              <?php endif; ?>
              <?php if ($site_slogan): ?>
                <div class="header__site-slogan" id="site-slogan"><?php print $site_slogan; ?></div>
              <?php endif; ?>
            </div>
          <?php endif; ?>
	    </div>

	  <a href="#" class="nav-toggles icon-align-justify">Main Navigation</a>
	  <div class="header-last">
          <div id="search-box">
		  <div class="search-icon">
		   <span class="icon">
		   </span>
		  </div>
	        <?php print $search_box;  ?>
	      </div>
          <?php print render($page['header_last']); ?>
        </div>
	  <div id="navigation">
        <?php if ($main_menu) {
			  $pid = variable_get('menu_main_links_source', 'main-menu');
			  $tree = menu_tree($pid);
			  $tree = str_replace(' class="menu"', '', $tree);
			  $main_menu = drupal_render($tree);
			  }else{
			  $main_menu = FALSE;
			  }
	    ?>
        <?php if ($main_menu): ?>
          <nav id="main-menu" role="navigation" tabindex="-1">
            <?php print $main_menu; ?>
          </nav>
        <?php endif; ?>
        <?php print render($page['navigation']); ?>
      </div>
      </div>
    </header>
	<div id="main-section">
	<?php if ($title): ?>
	<div class="main-section-header">
     <?php print render($title_prefix); ?>
      <h1 class="page__title title" id="page-title"><?php print $title; ?></h1>
     <?php print render($title_suffix); ?>
     <?php print $breadcrumb; ?>
	</div>
	 <?php endif; ?>
	 <div class="revo-slider">
	 <?php print render($page['slider']); ?>
	 </div>
      <?php print render($page['header']); ?>
	<?php if(($page['content_top_1']) || ($page['content_top_1']) || ($page['content_top_1'])): ?>
	  <div class="content-top">
        <?php print render($page['content_top_1']); ?>
	    <?php print render($page['content_top_2']); ?>
	    <?php print render($page['content_top_3']); ?>
	  </div>
	<?php endif; ?>
	<?php if(($page['content_top_upper_1']) || ($page['content_top_upper_2'])): ?>
	  <div class="content-top-upper">
        <?php print render($page['content_top_upper_1']); ?>
	    <?php print render($page['content_top_upper_2']); ?>
	  </div>
	<?php endif; ?>
	<?php if(($page['content_top_lower_1']) || ($page['content_top_lower_2'])): ?>
	  <div class="content-top-lower">
        <?php print render($page['content_top_lower_1']); ?>
	    <?php print render($page['content_top_lower_2']); ?>
	  </div>
	<?php endif; ?>
	<?php if(($page['content_top_lower_1']) || ($page['content_top_lower_2'])): ?>
	  <div class="content-left-right">
        <?php print render($page['content_left']); ?>
	    <?php print render($page['content_right']); ?>
	  </div>
	<?php endif; ?>
	<?php print render($page['sidebar_first']); ?>
    <div id="main">
      <div id="content" class="column" role="main">
        <?php print render($page['highlighted']); ?>
        <a id="main-content"></a>
        <?php print $messages; ?>
        <?php print render($tabs); ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?>
          <ul class="action-links"><?php print render($action_links); ?></ul>
        <?php endif; ?>
      </div>
    </div>
 	<?php print render($page['sidebar_second']); ?>
	<?php if(($page['content_bottom_1']) || ($page['content_bottom_2']) || ($page['content_bottom_3'])): ?>
      <div class="content-bottom">
        <?php print render($page['content_bottom_1']); ?>
	    <?php print render($page['content_bottom_2']); ?>
	    <?php print render($page['content_bottom_3']); ?>
      </div>
	<?php endif; ?>
	<?php if(($page['content_bottom_upper_1']) || ($page['content_bottom_upper_2'])): ?>
      <div class="content-bottom-upper">
        <?php print render($page['content_bottom_upper_1']); ?>
	    <?php print render($page['content_bottom_upper_2']); ?>
      </div>
	<?php endif; ?>
	<?php if(($page['content_bottom_lower_1']) || ($page['content_bottom_lower_2'])): ?>
      <div class="content-bottom-lower">
        <?php print render($page['content_bottom_lower_1']); ?>
	    <?php print render($page['content_bottom_lower_2']); ?>
      </div>
	<?php endif; ?>
	<?php if(($page['content_footer_1']) || ($page['content_footer_2'])): ?>
	  <div class="content-footer">
        <?php print render($page['content_footer_1']); ?>
	    <?php print render($page['content_footer_2']); ?>
	  </div>
	<?php endif; ?>
	</div>
  	<footer class="l-footer" role="contentinfo">
	<div class="footer-inner">
	<?php if(($page['footer_1']) || ($page['footer_2']) || ($page['footer_3']) || ($page['footer_4'])): ?>
      <?php print render($page['footer_1']); ?>
	  <?php print render($page['footer_2']); ?>
	  <?php print render($page['footer_3']); ?>
	  <?php print render($page['footer_4']); ?>
	<?php endif; ?>
	</div>
  	</footer>
  </div>
  <div class="bottom-inner">
  <div class="bottom-left-right">
   <div class="bottem-left">
   <p>&copy; 2014 Theme Boutique. All rights reserved.</p>
   </div>
   <div class="bottom-right">
   <div class="social">
    <ul class="toolbar"><li>
    <a href="http://www.dribbble.com/" target="_blank"><br><span class="dribbble"></span> </a></li>
    <li>
    <a href="http://www.facebook.com/" target="_blank"><br><span class="facebook"></span> </a></li>
    <li>
    <a href="http://www.linkedin.com/" target="_blank"><br><span class="linkedin"></span> </a></li>
    <li>
    <a href="http://www.pinterest.com/" target="_blank"><br><span class="pinterest"></span> </a></li>
    <li>
    <a href="http://www.twitter.com/" target="_blank"><br><span class="twitter"></span> </a></li>
    <li>
    <a href="" target="_blank"><br><span class="rss"></span> </a></li>
    </ul>
   </div>
   </div>
  </div>
  <?php print render($page['bottom']); ?>
  </div>	
  <div id="toTop" style="display: none;"><a href="#top" class="top"></a></div>
</div>