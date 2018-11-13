<!-- ------------------------ -->
<!-- Main Header -->
<?php get_header() ?>
<!-- Wrapper -->
<div class="wrapperAnimal">
  <!-- Section Home -->
  <section class="wrapperAnimal__home">
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
        <?php echo wp_get_attachment_image( get_field('animalhome'), 'animal-home-thumb' ); ?>
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
          <?php the_field('animaldesc'); ?>
        </p>
        <p class="wrapperAnimal__home__content__text__statut">
          Statut
        <span class="line"></span>
        </p>
        <p class="wrapperAnimal__home__content__text__title__smaller">
          <?php the_field('animalstatut'); ?>
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
        <!-- <img src="http://placehold.jp/818x530.png"> -->
        <?php echo wp_get_attachment_image( get_field('animalhabitatimg'), 'animal-habitat-thumb' ); ?>
      </div>
      <div class="wrapperAnimal__habitat__content__text">
        <div class="wrapperAnimal__habitat__content__text__side"><?php the_field('animalhabitatlocation'); ?></div>
        <div class="wrapperAnimal__habitat__content__text__main">        <?php the_field('animalhabitattext'); ?></div>
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
        <?php echo wp_get_attachment_image( get_field('animalfoodimg'), 'animal-food-thumb' ); ?>
        <!-- <img src="http://placehold.jp/1014x941.png"> -->
      </div>
      <div class="wrapperAnimal__food__content__text">
        <?php the_field('animalfoodtext'); ?>
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
        <?php the_field('animaldisappeartext'); ?>
      </div>
      <div class="wrapperAnimal__disappearance__content__image">
        <?php echo wp_get_attachment_image( get_field('animaldisappearimg'), 'animal-disappear-thumb' ); ?>
        <!-- <img src="http://placehold.jp/802x603.png"> -->
      </div>
    </div>
  </section>
  <!-- Section Disparition -->
  <section class="wrapperAnimal__donations">
    <!-- Content -->
    <div class="wrapperAnimal__donations__content">
      <div class="wrapperAnimal__donations__content__image">
        <?php echo wp_get_attachment_image( get_field('animaldonationimg'), 'animal-donation-thumb' ); ?>
        <!-- <img src="http://placehold.jp/1440x720.png"> -->
      </div>
      <div class="wrapperAnimal__donations__content__textBloc">
        <div class="wrapperAnimal__donations__content__textBloc__header">
          Agissons
        </div>
        <div class="wrapperAnimal__donations__content__textBloc__firstParagraph">
          WeathAnimal œuvre à la conservation des espèces menacées sur tous les continents. Aidez-nous à leurs rendrent leur vie et leur territoire.
        </div>
        <div class="wrapperAnimal__donations__content__textBloc__btn">
          Faire un don
        </div>
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
