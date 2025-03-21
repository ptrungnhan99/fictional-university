<?php
function university_files()
{
    // Add CSS
    wp_enqueue_style('font-goole', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('university_main_style', get_theme_file_uri() . '/build/index.css');
    wp_enqueue_style('university_index_style', get_theme_file_uri() . '/build/style-index.css');
    // Add JS
    wp_enqueue_script("university_main_js", get_theme_file_uri() . '/build/index.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'university_files');
function university_features()
{
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'university_features');
function university_post_types()
{
    register_post_type('event', array(
        // 'show_in_rest' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Events',
            'singular_name' => 'Event',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events'
        ),
        'menu_icon' => 'dashicons-calendar',
        'supports' => array('title', 'editor'),
        'rewrite'     => array('slug' => 'events'), // my custom slug
        'has_archive' => true,
    ));
}
add_action('init', 'university_post_types');
