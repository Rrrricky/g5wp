<?php get_header(); ?>



	<main id="404" class="error-page">
		<h1 class="error-page__title"><?php the_field('404-title', 'options'); ?></h1>
		<a class="error-page__link" href="<?php echo esc_url(home_url( '/' )); ?>"><?php the_field('404-back_home_link_text', 'options'); ?></a>
	</main>

<?php get_footer(); ?>

