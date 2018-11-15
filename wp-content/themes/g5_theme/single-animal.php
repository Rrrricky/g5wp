<?php
$homePic = get_field('animal_home');


$habitatPic = get_field('animal_habitat_img');


$foodPic = get_field('animal_food_img');


$disappearPic = get_field('animal_disappear_img');


$donationPic = get_field('animal_donation_img');

?>
<!-- ------------------------ -->
<!-- Main Header -->
<?php get_header() ?>
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
        <img src="<?php echo $homePic; ?>" alt="">
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
        <img src="<?php echo $habitatPic; ?>" alt="">
      </div>
      <div class="wrapperAnimal__habitat__content__text">
        <div class="wrapperAnimal__habitat__content__text__side"><?php the_field('animal_habitat_location'); ?></div>
        <div class="wrapperAnimal__habitat__content__text__main">        <?php the_field('animal_habitat_text'); ?></div>
      </div>
    </div>
  </section>
  <!-- Section Habitudes alimentaires -->
  <section class="wrapperAnimal__food">
    <!-- Header interne -->
    <div class="wrapperAnimal__food__header">
      Habitudes<br>
      <span class="rightSidedHeader">alimentaires<span class="dotColored">.</span></span>
    </div>
    <!-- Content -->
    <div class="wrapperAnimal__food__content">
      <div class="wrapperAnimal__food__content__img">
        <img src="<?php echo $foodPic; ?>" alt="">
      </div>
      <div class="wrapperAnimal__food__content__text">
        <?php the_field('animal_food_text'); ?>
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
        <?php the_field('animal_disappear_text'); ?>
      </div>
      <div class="wrapperAnimal__disappearance__content__box">
        <div class="wrapperAnimal__disappearance__content__box__title">
          A savoir
        </div>
        <div class="wrapperAnimal__disappearance__content__box__text">
          <?php the_field('animal_disappear_box_text'); ?>
        </div>
      </div>
      <div class="wrapperAnimal__disappearance__content__image">
        <img src="<?php echo $disappearPic; ?>" alt="">
      </div>
    </div>
  </section>
  <!-- Section Donation -->
  <section class="wrapperAnimal__donations">
    <!-- Content -->
    <div class="wrapperAnimal__donations__content">
      <div class="wrapperAnimal__donations__content__image">
        <img src="<?php echo $donationPic; ?>" alt="">
      </div>
      <div class="wrapperAnimal__donations__content__textBloc">
        <div class="wrapperAnimal__donations__content__textBloc__header">
          Agissons
        </div>
        <div class="wrapperAnimal__donations__content__textBloc__firstParagraph">
          WeathAnimal œuvre à la conservation des espèces menacées sur tous les continents. Aidez-nous à leurs rendrent leur vie et leur territoire.
        </div>
        <a href="<?php the_field('animal_donation_link'); ?>" class="wrapperAnimal__donations__content__textBloc__btn">
          Faire un don
        </a>
        <div class="wrapperAnimal__donations__content__textBloc__secondParagraph">
          Ce n’est qu’avec votre aide que nous arriverons à les sauver.
</div>
      </div>
    </div>
  </section>
  <!-- Section Footer -->
  <section class="wrapperAnimal__footer">
  </section>
</div>
<!-- Main Footer -->
<?php get_footer() ?>
