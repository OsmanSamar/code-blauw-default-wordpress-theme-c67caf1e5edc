<?php

// Require Bootstrap navbar walker
require_once('class-wp-bootstrap-navwalker.php');

// Require ACF functions
require_once('functions-acf.php');

// Include js and css
function enqueue_scripts()
{
    if (!is_admin()) {
        wp_enqueue_style('style', get_stylesheet_directory_uri() . '/css/styles.min.css', array(), '1.0');

        wp_enqueue_script('script', get_stylesheet_directory_uri() . '/js/script.min.js', array('jquery'), '1.0', true);
    }
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');
add_action('login_enqueue_scripts', 'enqueue_scripts');

// Added  Bootstrap CSS
function theme_enqueue_scripts()
{
    // Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css');

    // Bootstrap JS
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.bundle.min.js', array('jquery'), null, true);

    // Your Theme's Styles
    wp_enqueue_style('theme-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');


// Register navbar
function register_menu()
{
    register_nav_menu('header-menu', __('Header Menu'));
}
add_action('init', 'register_menu');

// Return images directory
function get_images_url($filename = '')
{
    if (strlen($filename) > 0 && $filename[0] != '/')
        $filename = '/' . $filename;
    return get_stylesheet_directory_uri() . '/images' . $filename;
}

// Remove admin menu items
function remove_menus()
{
    remove_menu_page('edit.php');
    remove_menu_page('link-manager.php');
    remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'remove_menus');
//add_filter('acf/settings/show_admin', '__return_false');

// Add thumbnail support
function thumbnails()
{
    add_theme_support('post-thumbnails', array('post', 'page'));
}
add_action('init', 'thumbnails');


// Our custom Events post type function
function create_onze_expertises_post_type()
{

    register_post_type(
        'onze_expertises',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Onze_Expertises'),
                'singular_name' => __('Onze_Expertises')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'onze_expertises'),
            'show_in_rest' => true,

            'supports' => ['title', 'editor', 'thumbnail']
        )
    );


}

// Hooking up our function to theme setup
add_action('init', 'create_onze_expertises_post_type');






// Rename thumbnails
function change_featured_image_labels($labels)
{
    $labels->featured_image = 'Header afbeelding';
    $labels->set_featured_image = 'Header afbeelding instellen';
    $labels->remove_featured_image = 'Verwijder header afbeelding';
    $labels->use_featured_image = 'Gebruik als header afbeelding';

    return $labels;
}
add_filter('post_type_labels_page', 'change_featured_image_labels', 10, 1);

function new_excerpt_more($more)
{
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');
?>