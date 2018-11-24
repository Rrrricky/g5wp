<?php
get_header();

/*
$args_animal = [
		'post_type' => 'animal',
		'posts_per_page' => -1,
		'tax_query' => [
			[
				'taxonomy' => 'animal',
				'field' => "name",
				'terms' => "Afrique de l'Est",
			]
		]
	];

	// Get animal list
	$the_animals = new WP_Query($args_animal);
	if($the_animals->have_posts()):
		while($the_animals->have_posts()):
			$the_animals->the_post();
				the_title();
				$img = the_field('animal_home');
		endwhile;
	endif;
	wp_reset_postdata();
*/
$id = get_the_ID();

$home_picture = get_field('animal_home');
$habitat_picture = get_field('animal_habitat_img');
$alimentaire_picture = get_field('animal_food_img');
$disparition_picture = get_field('animal_disappear_img');
$donation_picture = get_field('animal_donation_img');

?>

<!-- Wrapper -->
<div class="wrapperAnimal">

  <!-- Section Home -->
  <section class="wrapperAnimal__home">
    <div class="wrapperAnimal__home__displayVideo" >
      <iframe id="video" width="1045" height="880" src="<?php the_field('youtubeLink'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture;" allowfullscreen></iframe>
    </div>
    <div class="wrapperAnimal__home__close">
      <i class="fas fa-window-close"></i>
    </div>
    <!-- Header interne -->
    <div class="wrapperAnimal__home__header">
      <ul>
        <li>
          <a href="../..">Accueil</a>
        </li>
        <i class="fas fa-arrow-right"></i>
        <li>
          <a href="../../animaux">Animaux</a>
        </li>
        <i class="fas fa-arrow-right"></i>
        <li>
          <span style="color:white;"><?php the_title(); ?></span>
          <div class="nav__active"></div>
        </li>
      </ul>
    </div>
    <!-- Main content -->
    <div class="wrapperAnimal__home__content">
      <!-- Background Img -->
      <div class="wrapperAnimal__home__content__img">
        <img src="<?php echo $home_picture ?>" alt="">
      </div>
      <!-- Texte -->
      <div class="wrapperAnimal__home__content__text" style="font-size:40px">
        <p class="wrapperAnimal__home__content__text__statut">
          Espèce
          <span class="line"></span>
        </p>
        <p class="wrapperAnimal__home__content__text__title">
          <?php the_title(); ?>
        </p>
        <p class="wrapperAnimal__home__content__text__statut">
          Description
          <span class="line"></span>
        </p>
        <p class="wrapperAnimal__home__content__text__title__desc">
          <?php the_field('animal_desc'); ?>
        </p>
        <p class="wrapperAnimal__home__content__text__statut">
          Statut
        <span class="line"></span>
        </p>
        <p class="wrapperAnimal__home__content__text__title__smaller">
          <?php the_field('animal_statut'); ?>
        </p>
      </div>
    </div>
    <!-- Footer -->
    <div class="wrapperAnimal__home__footer">
      <!-- Vidéo -->
      <div class="wrapperAnimal__home__footer__video">
        <a href="#">Voir la vidéo<br>
          <i class="far fa-play-circle"></i>
        </a>
      </div>
      <!-- Mouse icon -->
      <div class="wrapperAnimal__home__footer__mouse">
        <div class="wrapperAnimal__home__footer__mouse__mouse-icon">
          <span class="wrapperAnimal__home__footer__mouse__mouse-icon__mouse-wheel"></span>
        </div>
      </div>
      <!-- List number -->
      <?php
      /*
        $current_post_id = get_the_ID();
        $count_posts = wp_count_posts('animal')->publish;
        $wp_query = new WP_Query(array('post_type' => 'animal', 'posts_per_page' => -1)); ?>
        <?php
        $i=1;
        if($wp_query->have_posts()):
          while($wp_query->have_posts()):
            $wp_query->the_post();
            if(get_the_ID()==$current_post_id) {
              $index = $i;
            }
            $i++;
          endwhile;
          wp_reset_postdata();
        endif;
        $published_posts = $count_posts->publish;
        */
      ?>
      <div class="wrapperAnimal__home__footer__list">
        <div class="wrapperAnimal__home__footer__list__current-number"><?= $index; ?> / <?php echo $count_posts ?></div>
        <div class="wrapperAnimal__home__footer__list__navigation-arrows">
          <i class="far fa-long-arrow-left wrapperAnimal__home__footer__list__navigation-arrows-left"></i>
          <i class="far fa-long-arrow-right wrapperAnimal__home__footer__list__navigation-arrows-right"></i>
        </div>
      </div>
    </div>
  </section>
  <!-- Section Habitat -->
  <section class="wrapperAnimal__habitat">
    <!-- Header interne -->
    <div class="wrapperAnimal__habitat__header">
      L'habitat<span class="dotColored">.</span>
    </div>
    <!-- Content -->
    <div class="wrapperAnimal__habitat__content">
      <div class="wrapperAnimal__habitat__content__map">
        <img src="<?php echo $habitat_picture; ?>" alt="">
      </div>
      <div class="wrapperAnimal__habitat__content__text">
        <div class="wrapperAnimal__habitat__content__text__side">
        <p><?php the_field('animal_habitat_location'); ?></p></div>
        <div class="wrapperAnimal__habitat__content__text__main">
        <?php the_field('animal_habitat_text', $id); ?></div>
      </div>
    </div>
  </section>
  <!-- Section Habitudes alimentaires -->
  <section class="wrapperAnimal__food">
    <!-- Header interne -->
    <div class="wrapperAnimal__food__header">
      Habitudes<br><span class="rightSidedHeader">alimentaires<span class="dotColored">.</span></span>
    </div>
    <!-- Content -->
    <div class="wrapperAnimal__food__content">
      <div class="wrapperAnimal__food__content__img">
        <img src="<?php echo $alimentaire_picture; ?>" alt="">
        <span class="rightSidedHeader">alimentaires<span class="dotColored">.</span></span>
      </div>
      <div class="wrapperAnimal__food__content__text">
        <?php the_field('animal_food_text', $id); ?>
      </div>
    </div>
  </section>
  <!-- Section Disparition -->
  <section class="wrapperAnimal__disappearance">
    <!-- Header interne -->
    <div class="wrapperAnimal__disappearance__header">
      Disparition<span class="dotColored">.</span>
    </div>
    <!-- Content -->
    <div class="wrapperAnimal__disappearance__content">
      <div class="wrapperAnimal__disappearance__content__text">
        <?php the_field('animal_disappear_text', $id); ?>
      </div>
      <div class="wrapperAnimal__disappearance__content__image">
      <div class="wrapperAnimal__disappearance__content__box">
        <div class="wrapperAnimal__disappearance__content__box__title">
          A savoir
        </div>
        <div class="wrapperAnimal__disappearance__content__box__text">
          <?php the_field('animal_disappear_box_text', $id); ?>
        </div>
      </div>

        <img src="<?php echo $disparition_picture?>">
      </div>
    </div>
  </section>
  <!-- Section Donation -->
  <section class="wrapperAnimal__donations">
    <!-- Content -->
    <div class="wrapperAnimal__donations__content">
      <div class="wrapperAnimal__donations__content__image">
        <img src="<?php echo $donation_picture; ?>" alt="">
      </div>
      <div class="wrapperAnimal__donations__content__textBloc">
        <div class="wrapperAnimal__donations__content__textBloc__header">
          Agissons
        </div>
        <div class="wrapperAnimal__donations__content__textBloc__firstParagraph">
          WeathAnimal œuvre à la conservation des espèces menacées sur tous les continents. Aidez-nous à leurs rendrent leur vie et leur territoire.
        </div>

        <a href="../../donation" class="wrapperAnimal__donations__content__textBloc__btn">
          <div class="content">
            <span>Faire un don</span>
          </div>
        </a>
        <div class="wrapperAnimal__donations__content__textBloc__secondParagraph">
          Ce n’est qu’avec votre aide que nous arriverons à les sauver.
</div>
      </div>
    </div>
  </section>
</div>
<!-- Main Footer -->
<?php get_footer() ?>
