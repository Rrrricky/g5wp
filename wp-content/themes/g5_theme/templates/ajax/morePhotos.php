<?php

$args = [
	'post_type' => 'animal',
	'posts_per_page' => 1,
	'paged' => $pagination,
];


$the_query = new WP_Query($args);
$max_pages = $the_query->max_num_pages;
if($the_query -> have_posts()):
	while($the_query -> have_posts()):
	$the_query -> the_post();
		the_title();
	endwhile;
	endif;
	wp_reset_postdata();
?>
