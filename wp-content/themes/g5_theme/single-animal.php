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
        <?php echo wp_get_attachment_image( get_field('first_image'), 'animal-home-thumb' ); ?>
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
          Statut
        <span class="line"></span>
        </p>
        <p class="wrapperAnimal__home__content__text__title__smaller">
          <?php the_field('statut'); ?>
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
        <img src="http://placehold.jp/818x530.png">
      </div>
      <div class="wrapperAnimal__habitat__content__text">
        <div class="wrapperAnimal__habitat__content__text__side">Iles Bornéo et Sumatra</div>
        <div class="wrapperAnimal__habitat__content__text__main">        l'Orang-outan, est un genre de primates appartenant à la famille des hominidés.
        Son aire de répartition, en voie de rétrécissement, se trouve en Insulinde, plus précisément dans les îles de Bornéo et Sumatra.
        Les orangs-outans vivent dans les forêts primaires et secondaires. Bien qu’on les retrouve à plus de 1 500 mètres au-dessus du niveau de la mer, ils vivent pour la plupart dans les zones de basses terres et préfèrent les forêts de vallées fluviales ou les plaines inondées.</div>
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
        <img src="http://placehold.jp/1014x941.png">
      </div>
      <div class="wrapperAnimal__food__content__text">
        Les orangs-outans sont parmi les plus arboricoles des grands singes. Ils passent la majeure partie de leur temps dans les arbres, à la recherche de nourriture. L'animal se nourrit la plupart du temps de fruits, de jeunes pousses, d'écorce, de petits vertébrés, d'œufs d'oiseaux et d'insectes.
        Principalement frugivore (durians, fruits du jaquier, mangues, litchis, mangoustans, figues) mais se nourrit aussi de feuilles, lianes, jeunes pousses et petites proies animales (termites, fourmis, contenu des nids d’oiseaux)
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
        Le changement climatique exerce une pression supplémentaire sur les forêts d’Indonésie et met donc un peu plus en péril la survie des orangs-outans. Les précipitations plus violentes liées au changement climatique que l’on attend sur la majorité des îles de l’archipel, devraient accentuer le risque d’inondations et de glissements de terrain. Les modèles climatiques suggèrent que, d’ici 2025, les précipitations annuelles devraient s’accroître de manière significative.
        <br><br>
        Outre l’impact direct et négatif sur les forêts, ce renforcement des précipitations influencerait aussi le rythme de croissance et les cycles de reproduction des plantes préférées des orangs-outans. La quantité de nourriture disponible risque ainsi de diminuer, en affectant les capacités de reproduction des femelles.
        <br><br>
        Le dérèglement climatique pourrait provoquer des sécheresses plus intenses et augmenter le risque de feux de forêts impactant d’ores et déjà l’habitat des grands singes.
      </div>
      <div class="wrapperAnimal__disappearance__content__image">
        <img src="http://placehold.jp/802x603.png">
      </div>
    </div>
  </section>
  <!-- Section Disparition -->
  <section class="wrapperAnimal__donations">
    <!-- Content -->
    <div class="wrapperAnimal__donations__content">
      <div class="wrapperAnimal__donations__content__image">
        <img src="http://placehold.jp/1440x720.png">
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
