<?php

add_action('init', 'add_region_cpt'); // As soon as the site loads (Rq. 'init' necessary)
function add_region_cpt(){

    $post_type = "region";

    $labels = array( // Nomination
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
            'hierarchical'        => false, // If parent links are accepted
            'supports'            => array( 'title','thumbnail', 'revisions'), // Handle title, thumbnail, etc.
            'public'              => true, // Public
            'show_ui'             => true, // Can get it from the front
            'show_in_menu'        => true, // Display in the back-office
            'menu_position'       => 2, // Position dans menu
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


        $taxonomy = 'animal'; // Name
        $object_type = array('region'); // Content target
        $tax_args = array(
            'label' => 'Region category', // Name displayed
            'rewrite' => array( 'slug' => 'animal' ),
            'hierarchical' => true, // If hierarchical allowed
        );

        register_taxonomy($taxonomy, $object_type, $tax_args);
}
