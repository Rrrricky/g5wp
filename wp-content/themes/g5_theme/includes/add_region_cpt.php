<?php


add_action('init', 'add_region_custom_post_it'); // Dès le chargement du site (Rq. 'init' obligatoire)
function add_region_custom_post_it(){

    $post_type = "region";

    $labels = array( // Nommage
            'name'               => 'Region', //
            'singular_name'      => 'region',
            'all_items'          => 'All the regions',
            'add_new'            => 'Add a region',
            'add_new_item'       => 'Add a region',
            'edit_item'          => "Edit a region",
            'new_item'           => 'New region',
            'view_item'          => "View region",
            'search_items'       => 'Find a region',
            'not_found'          => 'No result',
            'not_found_in_trash' => 'No result',
            'parent_item_colon'  => 'Parent model:',
            'menu_name'          => 'Regions',
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
        $object_type = array('regions'); // Contenus concernés
        $tax_args = array(
            'label' => 'Subject', // Nom affiché
            'rewrite' => array( 'slug' => 'region' ),
            'hierarchical' => false, // Si hiérarchie possible
        );

        register_taxonomy($taxonomy, $object_type, $tax_args);
}



