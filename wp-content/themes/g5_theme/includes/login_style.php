<?php

// Change logo
  function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(https://i.ibb.co/C9yCb06/Le-Logo-Weath-Animal.png);
    height:65px;
    width:auto;
    background-size: 320px 65px;
    background-repeat: no-repeat;
          padding-bottom: 20px;
        }
    </style>
  <?php }
  add_action( 'login_enqueue_scripts', 'my_login_logo' );
// Change link
  function my_login_logo_url() {
      return home_url();
  }
  add_filter( 'login_headerurl', 'my_login_logo_url' );

  function my_login_logo_url_title() {
      return 'WeathAnimal';
  }
  add_filter( 'login_headertitle', 'my_login_logo_url_title' );
// Stylify login page with css
  function my_login_stylesheet() {
    wp_enqueue_style( 'custom-login', CSS_URL . '/style-login.css' );
    wp_enqueue_script( 'custom-login', get_stylesheet_directory_uri() . '/style-login.js' );
  }
  add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );
?>