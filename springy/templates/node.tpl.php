<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix iac-container"<?php print $attributes; ?>>

  <div class="content"<?php print $content_attributes; ?>>
    <?php
      print render($content);
    ?>
  </div>
<?php
global $user;
if((in_array("administrator",$user->roles)) || ($user->uid == 1)) {
        print '<div class="iac iac-edit"><a href="'.url('node/'.$node->nid.'/edit').'">&nbsp;</a></div>';
}
?>
</div>