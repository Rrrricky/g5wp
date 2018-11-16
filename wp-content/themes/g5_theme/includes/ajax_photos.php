<?php

add_action('wp_ajax_ajax-morePhotos', 'post_function');
add_action('wp_ajax_nopriv_ajax-morePhotos', 'post_function');

function post_function() {
	global $wpdb, $_POST;
	$pagination = $_POST['pagination'];

	include(THEME_PATH.'/templates/ajax/morePhotos.php');
	exit;
}
