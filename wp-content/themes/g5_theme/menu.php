<button class="hamburger hamburger--collapse" type="button">
  <span class="hamburger-box">
    <span class="hamburger-inner"></span>
  </span>
</button>
<nav class="nav">
  <p class="nav__logo">Opensave</p>
                <?php // SYNTAXE : wp_nav_menu( array $args = array() )
                    $args=array(
                    'theme_location' => 'header', // nom du slug
                    'menu' => 'header_fr', // nom à donner cette occurence du menu
                    'menu_class' => 'nav__links', // classe pour la div crée
                );
                wp_nav_menu($args);
                ?>
	<p class="nav__search"><i class="fas fa-search"></i> Recherche</p>
</nav>
