<!-- Get the image to display -->
<?php
$image = get_field('first_image');
$size = 'full'; // (thumbnail, medium, large, full or custom size)
?>
<!-- ------------------------ -->

<?php get_header() ?>

<div class="animal-wrapper">
  <!-- Header interne -->
  <div class="animal-wrapper__header">
    <ul>
      <li>
        <a href="http://localhost:3000/g5_wordpress/">Accueil</a>
      </li>
      <i class="fas fa-arrow-right"></i>
      <li>
        <a href="http://localhost:3000/g5_wordpress/animaux/">Animaux</a>
      </li>
      <i class="fas fa-arrow-right"></i>
      <li>
        <span style="color:white;"><?php the_title(); ?></span>
        <div class="nav__active"></div>
      </li>
    </ul>
  </div>
  <!-- Image de fond -->
  <div class="animal-wrapper__img">
    <?php echo wp_get_attachment_image( $image, $size ); ?>
  </div>
  <!-- Texte -->
  <div class="animal-wrapper__text" style="font-size:40px">
    <p class="animal-wrapper__statut">
      Espece
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
</div>

<?php get_footer() ?>
