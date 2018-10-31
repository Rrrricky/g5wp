<?php

/**
 * Load scripts and styles on all pages
 */


function add_scripts() {

  // Call scripts
  wp_enqueue_script('js', JS_URL . '/custom/custom.min.js', array(), '1.0', true); // true to use querySelector

  // Call styles
  wp_enqueue_style('reset', CSS_URL . '/reset.css');
  wp_enqueue_style('css', CSS_URL . '/custom/main.min.css');
}


add_action('wp_enqueue_scripts', 'add_scripts');
