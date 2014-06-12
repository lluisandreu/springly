<?php
/**
 * Implements hook_preprocess_html().
 */
function springy_preprocess_html(&$variables) {
    drupal_add_css("http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic", array('type' => 'external'));
}

function springy_preprocess_page(&$vars) {
    // Meta Viewport
    $viewport = '<meta name="viewport" content="initial-scale=1, maximum-scale=1">';
    $addtohead = array(
        '#type' => 'markup',
        '#markup' => $viewport
    );

    drupal_add_html_head($addtohead,'viewport');
}
