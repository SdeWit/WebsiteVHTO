<?php

function template_post_types(){
    //flush_rewrite_rules();

    // Agenda Item Post Type
    register_post_type('agenda', array(
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
        'rewrite' => array(
            'with_front' => false),
        'has_archive' => false,
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Agenda Items',
            'add_new_item' => 'Add New Agenda item',
            'edit_item' => 'Edit Agenda item',
            'all_items' => 'All Agenda items',
            'singular_name' => 'Agenda item'
        ),
        'menu_icon' => 'dashicons-calendar'
    ));

    register_post_type('news', array(
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
        'rewrite' => array(
            'slug' => 'nieuws',
            'with_front' => false),
        'has_archive' => false,
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'News',
            'add_new_item' => 'Add New News',
            'edit_item' => 'Edit News',
            'all_items' => 'All News',
            'singular_name' => 'News'
        ),
        'menu_icon' => 'dashicons-megaphone'
    ));

    register_post_type('activities', array(
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
        'rewrite' => array(
            'slug' => 'aanbod',
            'with_front' => false),
        'has_archive' => false,
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Activities',
            'add_new_item' => 'Add New Activity',
            'edit_item' => 'Edit Activity',
            'all_items' => 'All Activities',
            'singular_name' => 'Activity'
        ),
        'menu_icon' => 'dashicons-buddicons-activity',
    ));

    register_post_type('profiles', array(
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
        'rewrite' => array(
            'with_front' => false),
        'has_archive' => false,
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Profiles',
            'add_new_item' => 'Add New Profile',
            'edit_item' => 'Edit Profile',
            'all_items' => 'All Profiles',
            'singular_name' => 'Profile'
        ),
        'menu_icon' => 'dashicons-businesswoman'
    ));

    register_post_type('vacancies', array(
        'supports' => array('title', 'editor', 'excerpt'),
        'rewrite' => array(
            'with_front' => false),
        'has_archive' => false,
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Vacancies',
            'add_new_item' => 'Add New Vacancy',
            'edit_item' => 'Edit Vacancy',
            'all_items' => 'All Vacancies',
            'singular_name' => 'Vacancy'
        ),
        'menu_icon' => 'dashicons-format-chat'
    ));

    register_post_type('network-publications', array(
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
        'rewrite' => array(
            'slug' => 'network-gender-and-stem/publications',
            'with_front' => false),
        'has_archive' => false,
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Network Publications',
            'add_new_item' => 'Add New Network Publication',
            'edit_item' => 'Edit Network Publication',
            'all_items' => 'All Network Publications',
            'singular_name' => 'Network publication'
        ),
        'menu_icon' => 'dashicons-media-document'
    ));

}

add_action('init', 'template_post_types');
add_post_type_support('page', 'excerpt');

?>