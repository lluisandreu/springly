<div id="<?php print $block_html_id; ?>" class="block">

  <?php print render($title_prefix); ?>
<?php if ($block->subject): ?>
  <h2 class="block__title"><?php print $block->subject ?></h2>
<?php endif;?>
  <?php print render($title_suffix); ?>
  <div class="block__content">
    <?php print $content ?>
  </div>
</div>