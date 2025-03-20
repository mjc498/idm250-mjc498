<?php
// THEME SETUP
function my_theme_setup() {
    load_theme_textdomain('mytheme', get_template_directory() . '/languages'); 

    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'mytheme'),
        'footer-menu' => __('Footer Menu', 'mytheme'),
    ));

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'my_theme_setup');

// WIDGETS 
function my_theme_widgets_init() {
    register_sidebar(array(
        'name'          => 'Footer Widget Area',
        'id'            => 'footer_widget',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'my_theme_widgets_init');

// CSS & JS
function theme_scripts_and_styles() {
    wp_enqueue_style('main-stylesheet', get_template_directory_uri() . '/main.css', array(), wp_get_theme()->get('Version'));
    wp_enqueue_script('main-js', get_template_directory_uri() . '/script.js', array('jquery'), wp_get_theme()->get('Version'), true);
}
add_action('wp_enqueue_scripts', 'theme_scripts_and_styles');

// PROJECT LISTING TEMPLATE
function add_project_listing_body_class($classes) {
    if (is_page_template('template-project-listing.php')) {
        $classes[] = 'project-listing-template';
    }
    return $classes;
}
add_filter('body_class', 'add_project_listing_body_class');
?>
