<?php


add_action('init', 'add_acf_option_page_support');

function add_acf_option_page_support(){
  if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
      'page_title'    => 'Options',
      'menu_title'    => 'Options',
      'menu_slug'     => 'options',
      'capability'    => 'edit_posts',
      'position'      => 3,
      'icon_url'      => 'dashicons-welcome-widgets-menus'
    ));

    acf_add_options_sub_page(array(
      'page_title'    => 'Options Générales',
      'menu_title'    => 'Général',
      'parent_slug'   => 'options',
    ));

    acf_add_options_sub_page(array(
      'page_title'    => 'Configuration des réseaux sociaux',
      'menu_title'    => 'Réseaux sociaux',
      'parent_slug'   => 'options',
		));

    acf_add_options_sub_page(array(
      'page_title'    => 'Options de la Page 404',
      'menu_title'    => 'Page 404',
			'parent_slug'   => 'options',
			'menu_slug' => '404-parameter'
    ));

		acf_add_options_sub_page(array(
      'page_title'    => 'Options de la souris',
      'menu_title'    => 'Souris',
			'parent_slug'   => 'options',
			'menu_slug' => 'mouse-parameter'
    ));

    acf_add_options_sub_page(array(
      'page_title'    => 'Options du logo',
      'menu_title'    => 'Logo',
			'parent_slug'   => 'options',
			'menu_slug' => 'logo-parameter'
    ));
}}
