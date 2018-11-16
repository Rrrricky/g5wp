<?php get_header(); ?>

	<main id="404" class="error-page">
		<h1 class="error-page__title"><?php the_field('404-title', 'options'); ?></h1>
		<a class="error-page__link" href="<?php echo esc_url(home_url( '/' )); ?>"><?php the_field('404-back_home_link_text', 'options'); ?></a>
	</main>

	<form action="#" method="get" class="search-bar">
          <div class="search-bloc">
            <input class="search-input autocomplete" type="text" value="<?= $_GET['name'] ?>" name="name" placeholder="Search an animal">
            <span class="magnifying-icon-js">
              <svg version='1.1' id='search-icon' xmlns='http://www.w3.org/2000/svg' x='0px' y='0px' width='25px' height='30px' viewBox='0 0 446.25 446.25' style='enable-background:new 0 0 446.25 446.25;'xml:space='preserve'>'<g><g id='search'><path d='M318.75,280.5h-20.4l-7.649-7.65c25.5-28.05,40.8-66.3,40.8-107.1C331.5,73.95,257.55,0,165.75,0S0,73.95,0,165.7S73.95,331.5,165.75,331.5c40.8,0,79.05-15.3,107.1-40.8l7.65,7.649v20.4L408,446.25L446.25,408L318.75,280.5z M165.75,280.5C102,280.5,51,229.5,51,165.75S102,51,165.75,51S280.5,102,280.5,165.75S229.5,280.5,165.75,280.5z'/></g></g></svg>
            </span>
          </div>
  </form>

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

