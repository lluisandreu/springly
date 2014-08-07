<div class="iac-container">
    <div class="profile"<?php print $attributes; ?>>
      <?php print render($user_profile); ?>
    </div>
    <?php
    global $user;
    if($user->uid) {
            print '<div class="iac iac-edit pretty medium primary btn icon-left icon-vcard"><a href="'.url('user/'.$user->uid.'/edit').'">Edit my profile</a></div>';
    }
?>
</div>