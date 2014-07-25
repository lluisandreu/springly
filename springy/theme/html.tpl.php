<?php
global $base_path;
$path_to_theme = $base_path . path_to_theme('springy');
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="<?php print $language->language; ?>"> <!--<![endif]-->
<head>

<!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <![endif]-->
<?php print $head; ?>

<title><?php print $head_title; ?></title>

<!-- Stylesheets -->
<?php print $styles; ?>


<?php
if(theme_get_setting('modernizr_settings')){
  print '<!-- MODERNIZR -->';
  print '<script src="'. $path_to_theme . '/js/libs/modernizr-2.6.2.min.js' . '"></script>';
}
?>

</head>

<body class="<?php print $classes; ?>" <?php print $attributes;?>>

<!-- $page_top -->
<?php print $page_top; ?>

<!-- Javascript messages --><div id="js-messages"></div>

<!-- $page -->
<?php print $page; ?>

<?php if(theme_get_setting('jquery_settings')): ?>
<!-- jQuery -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php print $path_to_theme . "/js/lib/jquery-1.10.1.min.js"; ?>"><\/script>')</script>
<?php endif; ?>

<!-- Initiate Gumby -->
<?php if(theme_get_setting('gumby_js_settings')): ?>
<script gumby-touch="<?php print $path_to_theme . '/js/libs'; ?>" src="<?php print $path_to_theme . '/gumby.min.js'; ?>"></script>
<?php else: ?>
<script gumby-touch="<?php print $path_to_theme . '/js/libs'; ?>" src="<?php print $path_to_theme . '/js/libs/gumby.js'; ?>"></script>
<script src="<?php print $path_to_theme . '/js/libs/ui/gumby.retina.js'; ?>"></script>
<script src="<?php print $path_to_theme . '/js/libs/ui/gumby.fixed.js'; ?>"></script>
<script src="<?php print $path_to_theme . '/js/libs/ui/gumby.skiplink.js'; ?>"></script>
<script src="<?php print $path_to_theme . '/js/libs/ui/gumby.toggleswitch.js'; ?>"></script>
<script src="<?php print $path_to_theme . '/js/libs/ui/gumby.tabs.js'; ?>"></script>
<script src="<?php print $path_to_theme . '/js/libs/ui/jquery.validation.js'; ?>"></script>
<script src="<?php print $path_to_theme . '/js/libs/gumby.init.js'; ?>"></script>
<?php endif; ?>
<script src="<?php print $path_to_theme . '/js/plugins.js'; ?>"></script>
<script src="<?php print $path_to_theme . '/js/main.js'; ?>"></script>

<!-- Custom Scripts -->
<?php print $scripts; ?>

<!--[if lt IE 7 ]>
<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
<![endif]-->

<!-- $page_bottom -->
<?php print $page_bottom; ?>
  </body>
</html>