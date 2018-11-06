<?php

/*

Template Name: Home

*/

?>


<?php get_header() ?>

	<main id="home-page-template" class="custom-home-page">
		<?php

		$images = get_field('photo_gallery');

		if($images): ?>
				<ul class="custom-home-page__slides-container">
						<?php foreach( $images as $image ): ?>
								<li>
									<span style="background-image: url(<?php echo $image['url']; ?>);"></span>
								</li>
						<?php endforeach; ?>
				</ul>
		<?php endif; ?>

		<h1 class="custom-home-page__title"><?php the_field('title'); ?></h1>
		<div class="custom-home-page__subtitle"><?php the_field('subtitle'); ?></div>
		<button class="custom-home-page__button"><?php the_field('button_text'); ?>
			<div class="custom-home-page__button__line"></div>
		</button>
		<span class="custom-home-page__catch"><?php the_field('slogan'); ?></span>
	</main>
<?php get_footer() ?>






