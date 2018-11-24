<?php


add_action('init', 'add_animal_custom_post_it'); // Dès le chargement du site (Rq. 'init' obligatoire)
function add_animal_custom_post_it(){

    $post_type = "animal";

    $labels = array( // Nommage
            'name'               => 'Animal', //
            'singular_name'      => 'animal',
            'all_items'          => 'All the animals',
            'add_new'            => 'Add a animal',
            'add_new_item'       => 'Add a animal',
            'edit_item'          => "Edit a animal",
            'new_item'           => 'New animal',
            'view_item'          => "View animal",
            'search_items'       => 'Find a animal',
            'not_found'          => 'No result',
            'not_found_in_trash' => 'No result',
            'parent_item_colon'  => 'Parent model:',
            'menu_name'          => 'Animals',
        );

        $args = array(
            'labels'              => $labels,
            'hierarchical'        => false, // Si liens parents possibles
            'supports'            => array( 'title','thumbnail', 'revisions'), // Supporte une gestion du titre, vignettes, etc.
            'public'              => true, // Tout le monde peut l'utiliser
            'show_ui'             => true, // Accessible depuis le front
            'show_in_menu'        => true, // Apparaît dans le back-office
            'menu_position'       => 2, // Position dans menu
            'menu_icon'           => 'dashicons-admin-site', // Icône (Cf. https://developer.wordpress.org/resource/dashicons/)
            'show_in_nav_menus'   => true, // Accessible depuis le menu de navigation
            'publicly_queryable'  => true, // Accessible depuis une recherche sur le site
            'exclude_from_search' => false,
            'has_archive'         => false,
            'query_var'           => true,
            'can_export'          => true,
            'rewrite'             => array( 'slug' => $post_type )
        );

        register_post_type($post_type, $args);


        $taxonomy = 'region'; // Nom
        $object_type = array('animal'); // Contenus concernés
        $tax_args = array(
            'label' => 'Animal category', // Nom affiché
            'rewrite' => array( 'slug' => 'animal' ),
            'hierarchical' => true, // Si hiérarchie possible
        );

        register_taxonomy($taxonomy, $object_type, $tax_args);
}



