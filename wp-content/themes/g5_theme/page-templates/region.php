<?php

/*

Template Name: Region template

*/

?>

<?php get_header() ?>
	<main id="region-page-template" class="page-template grid-menu">

	<?php
	$args = array( 'post_type' => 'region');
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
	?>
			<a class="grid-menu__items" href="<?php the_permalink() ?>">
				<div class="grid-menu__items__number"></div>
				<div class="grid-menu__items__name"><?php the_title(); ?></div>
				<div class="grid-menu__items__item js-lazyload"><?php the_post_thumbnail( 'menu-thumb' ); ?></div>
			</a>
	<?php
	endwhile;
	?>

	</main>
<?php get_footer() ?>
