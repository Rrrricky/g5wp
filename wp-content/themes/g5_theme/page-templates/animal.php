<?php

/*

Template Name: Animal template

*/

?>

<?php get_header() ?>
	<main id="animal-page-template" class="page-template grid-menu">

	<?php
	$args = array( 'post_type' => 'animal');
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
	?>
			<div class="grid-menu__items">
				<div class="grid-menu__number"></div>
				<div class="grid-menu__name"><?php the_title(); ?></div>
				<?php the_post_thumbnail( 'menu-thumb' ); ?>
			</div>
	<?php
	endwhile;
	?>

	</main>
<?php get_footer() ?>
