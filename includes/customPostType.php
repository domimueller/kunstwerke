<?php


// register custom post type InseratPosttype

function insertion_custom_post_type() {
    register_post_type('InseratPosttype',
        array(
            'labels'      => array(
                'name'               => _x('Inserat', 'General name', 'wptheme.smartfarming'),
                'singular_name'      => _x('Inserat', 'Singular name', 'wptheme.smartfarming'),
                'menu_name'          => _x('Inserate', 'Menu name', 'wptheme.smartfarming'),
                'parent_item_colon'  => _x('Übergeordnetes Inserat', 'Parent item with colon', 'wptheme.smartfarming'),
                'all_items'          => _x('Alle Inserate anzeigen', 'All items', 'wptheme.smartfarming'),
                'view_item'          => _x('Inserat anzeigen', 'View item', 'wptheme.smartfarming'),
                'add_new_item'       => _x('Inserat hinzufügen', 'Add new item', 'wptheme.smartfarming'),
                'add_new'            => _x('Inserat hinzufügen', 'Add new', 'wptheme.smartfarming'),
                'edit_item'          => _x('Inserat bearbeiten', 'Edit item', 'wptheme.smartfarming'),
                'update_item'        => _x('Inserat aktualisieren', 'Update item', 'wptheme.smartfarming'),
                'search_items'       => _x('Inserat suchen', 'Search items', 'wptheme.smartfarming'),
                'not_found'          => _x('Keine Inserate gefunden.', 'Not found', 'wptheme.smartfarming'),
                'not_found_in_trash' => _x('Keine Inserate im Papierkorb gefunden.', 'Not found in trash', 'wptheme.smartfarming'),
            ),
            'description'         => _x('Inserat Informationen', 'Description', 'wptheme.vernissage4u'),
            'supports'            => ['title', 'thumbnai', 'author', 'thumbnail'],
            'hierarchical'        => true,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'map_meta_cap'        => true,
            'rewrite'             => ['slug' => _x('inserate', 'Slug for posttype Inserat', 'wptheme.vernissage4u')],
            'menu_icon'           => 'dashicons-images-alt2',
        )
    );
}
add_action('init', 'insertion_custom_post_type');


?>