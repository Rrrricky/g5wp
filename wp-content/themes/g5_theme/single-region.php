<?php

get_header();

$name = get_field('name_of_region');

	$args_animal = [
		'post_type' => 'animal',
		'posts_per_page' => -1,
		'tax_query' => [
			[
				'taxonomy' => 'region',
				'field' => 'slug',
				'terms' => $name,
			]
		]
	];

$main_picture = get_field('main_picture');
$secondary_picture = get_field('region_photo');
$thumb1 = get_field('thumbnail_1');
$thumb2 = get_field('thumbnail_2');
?>

<div class="RegionPage js-lazyload">
 <!-- Intern header -->
 <div class="wrapperRegion__home__header">
      <ul>
        <li>
          <a href="../..">Accueil</a>
        </li>
        <i class="fas fa-arrow-right"></i>
        <li>
          <a href="../../regions">Regions</a>
        </li>
        <i class="fas fa-arrow-right"></i>
        <li>
          <span><?php the_title(); ?></span>
          <div class="nav__active"></div>
        </li>
      </ul>
  </div>
	<?php if(!empty($main_picture)): ?>
	<img class="RegionPage__main-picture" src="<?php echo $main_picture; ?>" />
	<?php endif; ?>
	<div class="RegionPage__title">
		<h1><?php the_field("name_of_region"); ?><span>.</span></h1>
	</div>
	<!-- Main data -->
	<div class="RegionPage__data-line"></div>
	<span class="RegionPage__data-subtitle">Quelques données</span>
	<div class="RegionPage__location">
		<i class="fas fa-map-marker-alt"></i>
		<h4><span>L</span>ocalisation</h4>
		<p><?php the_field("location_text") ?></p>
	</div>
	<div class="RegionPage__area">
		<i class="fas fa-arrows-alt"></i>
		<h4><span>S</span>uperficie</h4>
		<p><?php the_field("area_text"); ?></p>
	</div>
	<div class="RegionPage__climate">
		<i class="fas fa-thermometer-three-quarters"></i>
		<h4><span>C</span>limat</h4>
		<p><?php the_field("climate_text"); ?></p>
	</div>
	<span class="RegionPage__region-subtitle">
		<?php the_field("title_of_region"); ?><span>.</span>
	</span>
	<div class="RegionPage__region-text">
		<p>
			<?php the_field("main_text"); ?>
		</p>
		<span><?php the_field("name_of_region") ?></span>
	</div>
	<div class="RegionPage__region-picture">
	<?php if(!empty($secondary_picture)): ?>
		<img src="<?php echo $secondary_picture; ?>" />
	<?php endif; ?>
	</div>
	<!-- New information -->
	<h2 class="RegionPage__climate-subtitle-1">Changement</h2>
	<h2 class="RegionPage__climate-subtitle-2">Climatique<span>.</span></h2>
	<div class="RegionPage__climate-fact-line"></div>
	<span class="RegionPage__climate-fact-subtitle">
		<?php the_field("fact") ?>
	</span>
	<div class="RegionPage__temperature-images">
	<?php if(!empty($thumb1)): ?>
		<img src="<?php echo $thumb1; ?>" />
	<?php endif; ?>
	<?php if(!empty($thumb2)): ?>
		<img src="<?php echo $thumb2; ?>" />
	<?php endif; ?>
	<div class="RegionPage__temperature-images__badfact">
		<?php if(!empty($thumb1) && !empty($thumb2)): ?>
			<p><?php the_field("fact_number") ?></p>
			<p><?php the_field("small_fact") ?></p>
		<?php endif; ?>
	</div>
	</div>
	<p class="RegionPage__temperature-text">
		<?php the_field("secondary_text"); ?>
	</p>
	<h5 class="RegionPage__species-title">Espèces en disparition<span>...</span></h5>
	<!-- Wanna display every animal with the category  -->
	<div class="RegionPage__related">
		<?php
		// Get animal list
		$the_region = new WP_Query($args_animal);
		if($the_region->have_posts()):
			while($the_region->have_posts()):
				$the_region->the_post();
				?>
				<div class="RegionPage__related__bloc">
					<img class="RegionPage__related__bloc__species-picture" src="<?php the_field('animal_home'); ?>"/>
					<a class="RegionPage__related__bloc__species-text" href="<?php the_permalink(); ?>">Découvrir</a>
				</div>
				<?php
			endwhile;
		endif;
		?>
	</div>
	<?php
	get_footer();
	wp_reset_postdata();
	?>
</div>

<!-- Footer -->
<?php
get_footer();
wp_reset_postdata();
?>

<?php
$logo = get_field('logo_header');
$logo_src = $logo ? $logo['url'] : 'https://i.ibb.co/C9yCb06/Le-Logo-Weath-Animal.png';
$fb = get_field( "facebook_link" );
$insta = get_field( "instagram_link" );
?>

<footer class="footer">
  <div class="footer__top">
    <a href="<?php echo site_url(); ?>">
      <img src="<?php echo $logo_src; ?>" alt="WeathAnimal Logo">
    </a>
  </div>
  <div class="footer__bottom">
    <div class="footer__bottom__title">
      Copyright © 2018 WeathAnimal
    </div>
    <div class="footer__bottom__text">
			WeathAnimal est un site à but lucratif qui veut éveiller et sensibiliser les personnes au réchauffement climatique et à ses conséquences. Nous voulions montrer que les régions aussi bien que les animaux sont gravement affectés par les dégâts causés par l’homme ; ils nous revient de les protéger et de les préserver. Protégez leurs territoires et leurs vies.
    </div>
    <div class="footer__bottom__socials">
      <div class="footer__bottom__socials__text">
        Restez connecté
      </div>
      <div class="footer__bottom__socials__logo">
        <a href="https://www.facebook.com/WeathAnimalOfficiel">
          <i class="fab fa-facebook"></i>
        </a>
        <a href="https://www.instagram.com/weathanimal/">
          <i class="fab fa-instagram"></i>
        </a>
      </div>
    </div>
  </div>
</footer>

