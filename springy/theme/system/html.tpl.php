<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="<?php print $language->language; ?>"> <!--<![endif]-->
<head>

<!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <![endif]-->

<!-- Drupal render $head -->
<?php print $head; ?>

<title><?php print $head_title; ?></title>

<!-- Drupal render Stylesheets -->
<?php print $styles; ?>

<!-- Drupal header Scripts -->
<?php print $head_scripts; ?>

<!--[if lt IE 9]>
    <div class="message warning"><p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p></div>
<![endif]-->
</head>

<body class="<?php print $classes; ?>" <?php print $attributes;?>>

<!-- Drupal render $page_top -->
<?php print $page_top; ?>

<!-- Drupal render $page -->
<?php print $page; ?>

<!-- Drupal render Scripts -->
<?php print $scripts; ?>

<!--[if lt IE 7 ]>
<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
<![endif]-->

<!-- Drupal render $page_bottom -->
<?php print $page_bottom; ?>
  </body>
</html>