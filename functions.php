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

// POSTS 
function rename_posts_to_portfolio() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Portfolio'; 
    $submenu['edit.php'][5][0] = 'All Portfolio Items';
    $submenu['edit.php'][10][0] = 'Add Portfolio Item';
}
add_action('admin_menu', 'rename_posts_to_portfolio');

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
function my_theme_enqueue_assets() {
    wp_enqueue_style('main-stylesheet', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get('Version'));

    wp_enqueue_script('main-js', get_template_directory_uri() . '/script.js', array('jquery'), wp_get_theme()->get('Version'), true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_assets');

// FAVICON 
function my_theme_favicon() {
    echo '<link rel="icon" type="image/png" href="' . get_template_directory_uri() . '/favicon.png">';
}
add_action('wp_head', 'my_theme_favicon');
?>
