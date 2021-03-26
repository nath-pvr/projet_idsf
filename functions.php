<?php

//Functions

function idsfTheme_supports_init()
{

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');

    register_nav_menu('header', "menu principal");
    register_nav_menu('footer', "menu secondaire");

    add_image_size('card-header', 200, 200);
    add_image_size('carousel-header', 1296, 320);

    /*
    * Create custom post type
    */

    $labelsIdsf = array(
        'singular_name'     => _x('IDSF', 'Post Type Singular Name'),
        'menu_name'         => __('IDSF'),
        'all_items'         => __("Tous sur l'IDSF"),
        'view_item'         => __("Voir l'IDSF"),
        'add_new'           => __('Ajouter'),
        'update_item'       => __('Modifier'),
    );

    $argsIdsf = array(
        'label'             => __('IDSF'),
        'labels'            => $labelsIdsf,
        'menu_icon'         => 'dashicons-groups',
        'supports'          => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        'show_in_rest'      => true,
        'hierarchical'      => false,
        'public'            => true,
        'has_archive'       => true,
        'rewrite'           => array('slug' => 'idsf'),
        'show_in_nav_menus' => true,

    );

    $labelsFormation = array(
        'singular_name'     => _x('formation', 'Post Type Singular Name'),
        'menu_name'         => __('Formation'),
        'all_items'         => __("Toutes les formations"),
        'view_item'         => __("Voir les formations"),
        'add_new'           => __('Ajouter'),
        'update_item'       => __('Modifier'),
    );

    $argsFormation = array(
        'label'             => __('formation'),
        'labels'            => $labelsFormation,
        'menu_icon'         => 'dashicons-awards',
        'supports'          => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        'show_in_rest'      => true,
        'hierarchical'      => false,
        'public'            => true,
        'has_archive'       => true,
        'rewrite'           => array('slug' => 'formation'),
        'show_in_nav_menus' => true,

    );

    $labelsFinancement = array(
        'singular_name'     => _x('financement', 'Post Type Singular Name'),
        'menu_name'         => __('Financement'),
        'all_items'         => __("Tous sur le financement"),
        'view_item'         => __("Voir les financements"),
        'add_new'           => __('Ajouter'),
        'update_item'       => __('Modifier'),
    );

    $argsFinancement = array(
        'label'             => __('financement'),
        'labels'            => $labelsFinancement,
        'menu_icon'         => 'dashicons-money-alt',
        'supports'          => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        'show_in_rest'      => true,
        'hierarchical'      => false,
        'public'            => true,
        'has_archive'       => true,
        'rewrite'           => array('slug' => 'financement'),
        'show_in_nav_menus' => true,

    );

    $labelsEmplois = array(
        'singular_name'     => _x('emplois', 'Post Type Singular Name'),
        'menu_name'         => __('Emplois'),
        'all_items'         => __("Tous sur l' emplois"),
        'view_item'         => __("Voir les emplois"),
        'add_new'           => __('Ajouter'),
        'update_item'       => __('Modifier'),
    );

    $argsEmplois = array(
        'label'             => __('emplois'),
        'labels'            => $labelsEmplois,
        'menu_icon'         => 'dashicons-buddicons-buddypress-logo',
        'supports'          => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        'show_in_rest'      => true,
        'hierarchical'      => false,
        'public'            => true,
        'has_archive'       => true,
        'rewrite'           => array('slug' => 'emplois'),
        'show_in_nav_menus' => true,

    );

    $labelsRessources = array(
        'singular_name'     => _x('ressource', 'Post Type Singular Name'),
        'menu_name'         => __('Ressources'),
        'all_items'         => __("Toutes les ressources"),
        'view_item'         => __("Voir les ressources"),
        'add_new'           => __('Ajouter'),
        'update_item'       => __('Modifier'),
    );

    $argsRessources = array(
        'label'             => __('ressource'),
        'labels'            => $labelsRessources,
        'menu_icon'         => 'dashicons-open-folder',
        'supports'          => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        'show_in_rest'      => true,
        'hierarchical'      => false,
        'public'            => true,
        'has_archive'       => true,
        'rewrite'           => array('slug' => 'ressources'),
        'show_in_nav_menus' => true,

    );

    $labelsMoocs = array(
        'singular_name'     => _x('mooc', 'Post Type Singular Name'),
        'menu_name'         => __('Moocs'),
        'all_items'         => __("Tous les Moocs"),
        'view_item'         => __("Voir les Moocs"),
        'add_new'           => __('Ajouter'),
        'update_item'       => __('Modifier'),
    );

    $argsMoocs = array(
        'label'             => __('moocs'),
        'labels'            => $labelsMoocs,
        'menu_icon'         => 'dashicons-welcome-widgets-menus',
        'supports'          => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        'show_in_rest'      => true,
        'hierarchical'      => false,
        'public'            => true,
        'has_archive'       => true,
        'rewrite'           => array('slug' => 'moocs'),
        'show_in_nav_menus' => true,

    );

    $labelsTemoignages = array(
        'singular_name'     => _x('temoignage', 'Post Type Singular Name'),
        'menu_name'         => __('Temoignages'),
        'all_items'         => __("Tous les temoignages"),
        'view_item'         => __("Voir les temoignages"),
        'add_new'           => __('Ajouter'),
        'update_item'       => __('Modifier'),
    );

    $argsTemoignages = array(
        'label'             => __('Temoignages'),
        'labels'            => $labelsTemoignages,
        'menu_icon'         => 'dashicons-format-chat',
        'supports'          => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        'show_in_rest'      => true,
        'hierarchical'      => false,
        'public'            => true,
        'has_archive'       => true,
        'show_in_nav_menus' => true,

    );

    register_post_type('idsf', $argsIdsf);
    register_post_type('formation', $argsFormation);
    register_post_type('financement', $argsFinancement);
    register_post_type('emplois', $argsEmplois);
    register_post_type('ressources', $argsRessources);
    register_post_type('mooc', $argsMoocs);
    register_post_type('temoignage', $argsTemoignages);
}

function idsfTheme_register_assets()
{
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css');
    wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js', [], false, true);
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
}

function idsfTheme_menu_class($classes)
{
    $classes[] = 'nav-item';
    return $classes;
}

function idsfTheme_menu_link_class($attrs)
{
    $attrs['class'] = 'nav-link';
    return $attrs;
}

// function idsfTheme_remove_autop(){
    
//     remove_filter('the_content', 'wpautop');
//     remove_filter('the_excerpt', 'wpautop');
// }



// Actions

add_action('init', 'idsfTheme_supports_init');
add_action('wp_enqueue_scripts', 'idsfTheme_register_assets');


// filters

add_filter('nav_menu_css_class', 'idsfTheme_menu_class');
add_filter('nav_menu_link_attributes', 'idsfTheme_menu_link_class');
// add_filter('the_content', 'idsfTheme_remove_autop');
