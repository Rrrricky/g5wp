<?php get_header(); ?>

	<main id="404" class="error-page">
		<h1 class="error-page__title"><?php the_field('404-title', 'options'); ?></h1>
		<a class="error-page__link" href="<?php echo esc_url(home_url( '/' )); ?>"><?php the_field('404-back_home_link_text', 'options'); ?></a>
	</main>

	<?php

	$args = [
		'post_type' => 'animal',
		'paged' => $pagination,
	];

	$the_query = new WP_Query($args);
	$max_pages = $the_query->max_num_pages;
	if($the_query -> have_posts()):
		while($the_query -> have_posts()):
			$the_query -> the_post();
			?>
			<div class="ajax-section"></div>
		<?php
		endwhile;
	endif;
	wp_reset_postdata();
	?>

	<script>var max_paged = <?php echo $max_pages; ?>;</script>
	<div>
		<a href="#" class="readMore" title="ReadMore" data-pagination="1">Lire plus</a>
	</div>



<?php get_footer(); ?>

