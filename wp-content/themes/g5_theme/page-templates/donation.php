<?php

/*

Template Name: Donation template

*/

?>

<?php get_header() ?>

<section class="donation">
  <div class="donation__sideImg">
    <img src="https://placeimg.com/563/823/nature">
  </div>
  <div class="donation__sideWrap">
    <div class="donation__sideWrap__internWrap">
      <div class="donation__sideWrap__internWrap__header">
        Vous seuls avez le pouvoir changer les choses et sauver notre <strong>planète.</strong>
      </div>
      <div class="donation__sideWrap__internWrap__form">
        <!-- <div class="donation__sideWrap__internWrap__form__title">
        <span class="dot"></span>
          <strong>ETAPE - 1</strong>  CHOISISSEZ LA FRÉQUENCE
        </div> -->
        <div class="donation__sideWrap__internWrap__form__content">
        <?php echo do_shortcode('[give_form id="334"]'); ?>
        </div>
        <!-- <div class="donation__sideWrap__internWrap__form__title" id="second">
        <span class="dot"></span>
        <strong>ETAPE - 2</strong>  ENTREZ VOS COORDONNÉES ET CONFIRMEZ LE DON
        </div> -->
        <div class="donation__sideWrap__internWrap__form__content">

        </div>
      </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer() ?>