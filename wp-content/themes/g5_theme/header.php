<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />

        <!-- Appel du fichier style.css de notre thème -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
        <!---------------------------------------------------------------->

        <div class="header">
            <p class="header__logo">Opensave</p>
            <p class="header__links">Animaux</p>
            <p class="header__links">Régions</p>
            <p class="header__links">À la une</p>
            <p class="header__search"><i class="fas fa-search"></i> Search</p>
        </div>

        <!---------------------------------------------------------------->
        <!-- Execution de la fonction wp_head() obligatoire ! -->
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header id="header">
			<div class="wrap">
				<div class="wrap__ball wrap__ball-js"></div>
			</div>
        </header>
