<?php
/*

Template Name: Donation template

*/
$donationSideImage = get_field('donation_leftImage');
?>

<?php get_header() ?>

<section class="donation">
  <div class="donation__sideImg">
    <img src="<?php echo $donationSideImage; ?>">
  </div>
  <div class="donation__sideWrap">
    <div class="donation__sideWrap__internWrap">
      <div class="donation__sideWrap__internWrap__header">
        <?php the_field('donation_header'); ?> <strong><?php the_field('donation_header_colored'); ?></strong>
      </div>
      <div class="donation__sideWrap__internWrap__desc">
        <?php the_field('donation_desc'); ?>
      </div>
      <div class="donation__sideWrap__internWrap__form">
        <!-- <div class="donation__sideWrap__internWrap__form__title">
        <span class="dot"></span>
          <strong>ETAPE - 1</strong>  CHOISISSEZ LA FRÉQUENCE
        </div> -->
        <div class="donation__sideWrap__internWrap__form__content">
          <?php echo do_shortcode('[donate]'); ?>
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

<!-- Footer -->
<?php get_footer() ?>

<?php
$logo = get_field('logo_header');
$logo_src = $logo ? $logo['url'] : 'https://i.ibb.co/C9yCb06/Le-Logo-Weath-Animal.png';
$fb = get_field( "facebook_link" );
$insta = get_field( "instagram_link" );
?>
