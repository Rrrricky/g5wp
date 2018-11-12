<!-- Main Header -->
<?php get_header() ?>

<!-- Wrapper -->
<div id="wrapperAnimal">
  <!-- Section Home -->
  <section class="animal-wrapper">
    <!-- Header interne -->
    <div class="animal-wrapper__header">
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
    <!-- Background Img -->
    <div class="animal-wrapper__img">
      <?php echo wp_get_attachment_image( get_field('first_image'), 'full' ); ?>
    </div>
    <!-- Texte -->
    <div class="animal-wrapper__text" style="font-size:40px">
      <p class="animal-wrapper__statut">
        Espèce
        <span class="line"></span>
      </p>
      <p class="animal-wrapper__title">
        <?php the_title(); ?>
      </p>
      <p class="animal-wrapper__statut">
        Statut
      <span class="line"></span>
      </p>
      <p class="animal-wrapper__title__smaller">
        <?php the_field('statut'); ?>
      </p>
	  </div>
    <!-- Vidéo -->
    <div class="animal-wrapper__video">
      <a href="#">Voir la vidéo<br>
        <i class="far fa-play-circle"></i>
      </a>
	  </div>
	  <!-- Mouse icon -->
	  <div class="animal-wrapper__mouse">
  	  <div class="animal-wrapper__mouse__mouse-icon">
    	  <span class="animal-wrapper__mouse__mouse-icon__mouse-wheel"></span>
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
    <div class="animal-wrapper__list">
      <div class="animal-wrapper__list__current-number"><?= $index; ?> / <?php echo $count_posts ?></div>
      <div class="animal-wrapper__list__navigation-arrows">
        <i class="far fa-long-arrow-left animal-wrapper__list__navigation-arrows-left"></i>
        <i class="far fa-long-arrow-right animal-wrapper__list__navigation-arrows-right"></i>
      </div>
    </div>
  </section>
</div>

<!-- Main Footer -->
<?php get_footer() ?>
