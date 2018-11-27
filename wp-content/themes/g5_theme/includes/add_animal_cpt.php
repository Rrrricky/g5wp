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
            'hierarchical'        => false, // If parent links accepted
            'supports'            => array( 'title','thumbnail', 'revisions'), // Handle title, thumbnail, etc.
            'public'              => true, // Public
            'show_ui'             => true, // Can get it from the front
            'show_in_menu'        => true, // Displayed in the back-office
            'menu_position'       => 2, // Position within menu
            'menu_icon'           => 'dashicons-admin-site', // Icon (Cf. https://developer.wordpress.org/resource/dashicons/)
            'show_in_nav_menus'   => true, // From the navigation menu
            'publicly_queryable'  => true, // From a search on the website
            'exclude_from_search' => false,
            'has_archive'         => false,
            'query_var'           => true,
            'can_export'          => true,
            'rewrite'             => array( 'slug' => $post_type )
        );

        register_post_type($post_type, $args);


        $taxonomy = 'region'; // Name
        $object_type = array('animal'); // Content targeted
        $tax_args = array(
            'label' => 'Animal category', // Name displayed
            'rewrite' => array( 'slug' => 'animal' ),
            'hierarchical' => true, // If hierarchical possible
        );

        register_taxonomy($taxonomy, $object_type, $tax_args);
}



