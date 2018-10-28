<?php 


add_action('init', 'add_service_custom_post_it'); // 'init' necessary
function add_service_custom_post_it(){

    $post_type = "animal";

    $labels = array( 
            'name'               => 'Animal', 
            'singular_name'      => 'Animal',
            'all_items'          => 'All the animals',
            'add_new'            => 'Add an animal',
            'add_new_item'       => 'Add an animal',
            'edit_item'          => "Edit an animal",
            'new_item'           => 'New animal',
            'view_item'          => "View animal",
            'search_items'       => 'Find an animal',
            'not_found'          => 'No result',
            'not_found_in_trash' => 'No result',
            'parent_item_colon'  => 'Parent model:',
            'menu_name'          => 'Animal',
        );
    
        $args = array(
            'labels'              => $labels,
            'hierarchical'        => false,
            'supports'            => array( 'title','thumbnail','editor', 'revisions'), // Supporte une gestion du titre, vignettes, etc.
            'public'              => true, // Everybody can use it
            'show_ui'             => true, // Accessible from the front
            'show_in_menu'        => true, // Display in the back-office
            'menu_position'       => 3, // Position inside the menu
            'menu_icon'           => 'dashicons-art', // Icon (Cf. https://developer.wordpress.org/resource/dashicons/)
            'show_in_nav_menus'   => true, // Accessible from the nav menu
            'publicly_queryable'  => true, // Accessible from a search
            'exclude_from_search' => false,
            'has_archive'         => false,
            'query_var'           => true,
            'can_export'          => true,
            'rewrite'             => array( 'slug' => $post_type )
        );
    
        register_post_type($post_type, $args);

        
        $taxonomy = 'animal'; // Name
        $object_type = array('animal'); 
        $tax_args = array(
            'label' => 'Animal', // Name displayed 
            'rewrite' => array( 'slug' => 'subject-service' ), 
            'hierarchical' => true, 
        );

        register_taxonomy($taxonomy, $object_type, $tax_args);
}



