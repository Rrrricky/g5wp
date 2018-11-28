<?php

/**
 * Load scripts and styles on all pages
 */


function add_scripts() {

	// Call scripts
  wp_enqueue_script('js', JS_URL . '/custom/custom.min.js', array(), '1.0', true); // true to use querySelector
	wp_localize_script('js', 'ajaxurl', admin_url('admin-ajax.php'));

  // Call styles
  wp_enqueue_style('reset', CSS_URL . '/reset.css');
  wp_enqueue_style('css', CSS_URL . '/custom/main.min.css');
	wp_enqueue_style('autocomplete', CSS_URL . '/auto-complete.css');



	$translation_array = array( 'templateUrl' => get_stylesheet_directory_uri() );
	//after wp_enqueue_script
	wp_localize_script( 'js', 'object_name', $translation_array );

}


add_action('wp_enqueue_scripts', 'add_scripts');
