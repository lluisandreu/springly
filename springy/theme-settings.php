<?php

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function springy_form_system_theme_settings_alter(&$form, &$form_state) {


  // Add a checkbox to toggle the breadcrumb trail.
  /*
   *$form['toggle_breadcrumb'] = array(
   *  '#type' => 'checkbox',
   *  '#title' => t('Display the breadcrumb'),
   *  '#default_value' => theme_get_setting('toggle_breadcrumb'),
   *  '#description'   => t('Show a trail of links from the homepage to the current page.'),
   *);
   */

    $font_list = array(
        'roboto' => '<a href="https://www.google.com/fonts/specimen/Roboto" target="_blank">Roboto</a>',
        'roboto_slab' => '<a href="https://www.google.com/fonts/specimen/Roboto+Slab" target="_blank">Roboto Slab</a>',
        'open_sans' => '<a href="https://www.google.com/fonts/specimen/Open+Sans" target="_blank">Open Sans</a>',
        'source_sans_pro' => '<a href="https://www.google.com/fonts/specimen/Source+Sans+Pro" target="_blank">Source Sans Pro</a>',
        'ubuntu' => '<a href="https://www.google.com/fonts/specimen/Ubuntu" target="_blank">Ubuntu</a>',
    );

    $form['viewport'] = array(
        '#type' => 'fieldset',
        '#title' => t('Viewport settings'),
        '#description' => t('Let\'s you define the viewport meta tag content'),
    );

    $form['viewport']['viewport_settings'] = array(
        '#type' => 'textfield',
        '#title' => t('Viewport content'),
        '#default_value' => theme_get_setting('viewport_settings'),
        '#description' => t('Change the setting into content=""'),
    );

    $form['jquery'] = array(
        '#type' => 'fieldset',
        '#title' => t('jQuery settings'),
        '#description' => t('Replace Drupal jQuery version for the Springy one.'),

        'jquery_settings' => array(
            '#type' => 'checkbox',
            '#title' => 'Replace jQuery',
            '#default_value' => theme_get_setting('jquery_settings'),
            '#description' => t('Springy and Gumby come with jQuery 1.10.1, untick this setting if you want to use Drupal jQuery version. This may breack some features!'),
        ),
    );

    $form['gumby_js'] = array(
        '#type' => 'fieldset',
        '#title' => t('Gumby JS settings'),
        '#description' => t('Aggregate all Gumby JS in one gumby.min.js file. Recommended for production sites.'),

        'gumby_js_settings' => array(
            '#type' => 'checkbox',
            '#title' => 'Aggregate and minify gumby JS files',
            '#default_value' => theme_get_setting('gumby_js_settings'),
        ),
    );

    $form['modernizr'] = array(
        '#type' => 'fieldset',
        '#title' => t('Modernizr'),

        'modernizr_settings' => array(
            '#type' => 'checkbox',
            '#title' => t('Include the last version of Modernizr. Recommended!'),
            '#default_value' => theme_get_setting('modernizr_settings'),
            '#description' => t('Modernizr is a JavaScript library that detects HTML5 and CSS3 features in the user’s browser.'),
        ),
    );

    $form['google_fonts_load'] = array(
        '#type' => 'fieldset',
        '#title' => t('Load some Google Fonts'),

        'font_settings' => array(
            '#type' => 'checkboxes',
            '#title' => t('Select the fonts you want to load'),
            '#options' => $font_list,
            '#description' => t('Selected fonts will be printed in the html.tpl.php using a <"link"> tag'),
            '#default_value' => theme_get_setting('font_settings'),
        ),
    );


}