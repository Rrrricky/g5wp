<?php
add_filter('give_checkout_personal_info_text', 'new_text');



function new_text($post) {
  // Infos
  return __('Vos coordonnées', 'give');

}