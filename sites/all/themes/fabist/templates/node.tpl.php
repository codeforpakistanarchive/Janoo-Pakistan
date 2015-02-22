<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>
<article class="node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php if ($title_prefix || $title_suffix || $display_submitted || $unpublished || !$page && $title): ?>
    <header>
      <?php print render($title_prefix); ?>
      <?php if (!$page && $title): ?>
        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
      <?php endif; ?>
      <?php print render($title_suffix); ?>

 

      <?php if ($unpublished): ?>
        <mark class="unpublished"><?php print t('Unpublished'); ?></mark>
      <?php endif; ?>
    </header>
  <?php endif; ?>
  <div class="content-left">
    <?php print views_embed_view('submitted_by','block'); ?>
  </div>
  <div class="main-content">
  <?php print views_embed_view('node_view', 'block'); 
  print views_embed_view('share_this', 'block'); 
   global $user;
  if($user->uid != 0){
      echo "<div class='share-form-submit'>";
      echo "<h1>Post a Page Link</h1>";
      $block = module_invoke('formblock', 'block_view', 'share_link');
      print render($block['content']);
      echo "</div>";
  }
    if($user->uid == 0){
      echo "<div class='share-form-submit'>";
      echo "<h1>Please login to Post Page Link</h1>";
      $block = module_invoke('user', 'block_view', 'login');
      print render($block['content']);
      echo "</div>";
        
    }
      ?>
  </div>
</article>
