<?php

get_header();
$id = get_the_ID();

	$home_picture = get_field('animal_home');
	$habitat_picture = get_field('animal_habitat_img');
	$alimentaire_picture = get_field('animal_food_img');
	$disparition_picture = get_field('animal_disappear_img');
	$donation_picture = get_field('animal_donation_img');

?>

<!-- Wrapper -->
<div class="wrapperAnimal js-lazyload">
  <!-- Home section -->
  <section class="wrapperAnimal__home">
    <div class="wrapperAnimal__home__displayVideo" >
      <iframe id="video" width="1045" height="880" src="<?php the_field('youtubeLink'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture;" allowfullscreen></iframe>
    </div>
    <div class="wrapperAnimal__home__close">
      <i class="fas fa-window-close"></i>
    </div>
    <!-- Intern Header -->
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
      <!-- Image background -->
      <div class="wrapperAnimal__home__content__img js-parallax" data-amplitude="0.5">
				<img src="<?php echo $home_picture ?>" alt="Main picture of the animal">
      </div>
      <!-- Text -->
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
      <!-- Video -->
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
      <div class="wrapperAnimal__home__footer__list">
        <div class="wrapperAnimal__home__footer__list__current-number"><?= $index; ?>  <?php echo $count_posts ?></div>
        <div class="wrapperAnimal__home__footer__list__navigation-arrows">
          <i class="far fa-long-arrow-left wrapperAnimal__home__footer__list__navigation-arrows-left"></i>
          <i class="far fa-long-arrow-right wrapperAnimal__home__footer__list__navigation-arrows-right"></i>
        </div>
      </div>
    </div>
  </section>
  <!-- Habitat section -->
  <section class="wrapperAnimal__habitat">
    <!-- Intern header -->
    <div class="wrapperAnimal__habitat__header">
      L'habitat<span class="dotColored">.</span>
    </div>
    <!-- Content -->
    <div class="wrapperAnimal__habitat__content">
      <div class="wrapperAnimal__habitat__content__map">
        <img src="<?php echo $habitat_picture; ?>" alt="habitation picture for animals">
      </div>
      <div class="wrapperAnimal__habitat__content__text">
        <div class="wrapperAnimal__habitat__content__text__side">
          <?php the_field('animal_habitat_location'); ?>
        </div>
        <div class="wrapperAnimal__habitat__content__text__main">
          <?php the_field('animal_habitat_text', $id); ?>
        </div>
      </div>
    </div>
  </section>
  <!-- Consuption habits section -->
  <section class="wrapperAnimal__food">
    <!-- Intern header -->
    <div class="wrapperAnimal__food__header">
      Habitudes<br><span class="rightSidedHeader">alimentaires<span class="dotColored">.</span></span>
    </div>
    <!-- Content -->
    <div class="wrapperAnimal__food__content">
      <div class="wrapperAnimal__food__content__img">
        <img src="<?php echo $alimentaire_picture; ?>" alt="some food for animals">
        <span class="rightSidedHeader">alimentaires<span class="dotColored">.</span></span>
      </div>
      <div class="wrapperAnimal__food__content__text">
        <?php the_field('animal_food_text', $id); ?>
      </div>
    </div>
  </section>
  <!-- vanishing section -->
  <section class="wrapperAnimal__disappearance">
    <!-- Intern header -->
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
        <img src="<?php echo $disparition_picture?>" alt="Some food for animals in danger">
      </div>
    </div>
  </section>
  <!-- Donation section -->
  <section class="wrapperAnimal__donations">
    <!-- Content -->
    <div class="wrapperAnimal__donations__content">
      <div class="wrapperAnimal__donations__content__image">
        <img src="<?php echo $donation_picture; ?>" alt="landscape with the sun in background">
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
<!-- Main Footer / Call functions-->
<?php get_footer() ?>

<?php
$logo = get_field('logo_header');
$logo_src = $logo ? $logo['url'] : 'https://i.ibb.co/C9yCb06/Le-Logo-Weath-Animal.png';
$fb = get_field( "facebook_link" );
$insta = get_field( "instagram_link" );
?>

<footer class="footer">
  <div class="footer__top">
    <a href="<?php echo site_url(); ?>">
      <img src="<?php echo $logo_src; ?>" alt="Weath Animal Logo">
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
