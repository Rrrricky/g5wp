
<!-- Get the image to display -->
<?php
$image = get_field('first_image');
$size = 'full'; // (thumbnail, medium, large, full or custom size)
?>
<!-- ------------------------ -->

<?php get_header() ?>


<div class="animal-wrapper">

  <div class="animal-wrapper__img">
    <?php echo wp_get_attachment_image( $image, $size ); ?>
  </div>

  <div class="animal-wrapper__text" style="font-size:40px">
    <p class="animal-wrapper__statut">
      Espece
      <span class="line"></span>
    </p>
    <p class="animal-wrapper__title">
      <?php the_field('espece'); ?>
    </p>
    <p class="animal-wrapper__statut">
      Status
      <span class="line"></span>
    </p>
    <p class="animal-wrapper__title__smaller">
      <?php the_field('statut'); ?>
    </p>
  </div>

</div>



<?php get_footer() ?>
