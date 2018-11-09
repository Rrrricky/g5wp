<?php get_header() ?>


<div class="animal-wrapper">

  <div class="animal-wrapper__img">
    <?php the_post_thumbnail( 'page-thumb' ); ?>
  </div>

  <div class="animal-wrapper__text" style="font-size:40px">
    <p class="animal-wrapper__status">
      Espece
      <span class="line"></span>
    </p>
    <p class="animal-wrapper__title">
      <?php the_title(); ?>
    </p>
    <p class="animal-wrapper__status">
      Status
      <span class="line"></span>
    </p>
    <p class="animal-wrapper__title__smaller">
      En Danger
    </p>
  </div>

</div>



<?php get_footer() ?>
