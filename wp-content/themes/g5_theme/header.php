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

                <?php // SYNTAXE : wp_nav_menu( array $args = array() )
                    $args=array(
                    'theme_location' => 'header', // nom du slug
                    'menu' => 'header_fr', // nom à donner cette occurence du menu
                    'menu_class' => 'header__links', // classe pour la div crée
                );
                wp_nav_menu($args);
                ?>

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
