<div class="iac-container">
    <div class="profile"<?php print $attributes; ?>>
      <?php print render($user_profile); ?>
    </div>
    <?php
    global $user;
    if($user->uid) {
            print '<div class="iac iac-edit"><a href="'.url('user/'.$user->uid.'/edit').'">&nbsp;</a></div>';
    }
?>
</div>