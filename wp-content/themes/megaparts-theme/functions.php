<?php 


function megaparts_theme_support(){
    //Adds dynamic title support
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','megaparts_theme_support');


function megaparts_menus(){
   $locations = array(
    'primary' => 'Top NavBar',
    'secondary' => 'LeftSideBar'
   );

   register_nav_menus($locations);
};
add_action('init','megaparts_menus');

function development_styles(){
    $version = wp_get_theme()->get(' Version ');
    wp_enqueue_style('bootstrap-icon', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">');
    wp_enqueue_style('style.css', get_stylesheet_uri(), array('bootstrap-icon'), $version);
}
add_action('wp_enqueue_scripts','development_styles');

function development_scripts() {
    // Enqueue your custom JavaScript file with jQuery as a dependency
    wp_enqueue_script('myjsfile', get_template_directory_uri() . '/js/app.js', array('jquery-core-js'), '1.0.0', true);
    // Enqueue jQuery
    wp_enqueue_script('jquery-core-js', 'https://code.jquery.com/jquery-3.7.1.min.js', array(), '3.7.1', true);
}
add_action('wp_enqueue_scripts', 'development_scripts');


function megaparts_widget_area(){
    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<ul>', 
            'after_widget' => '</ul>', 
            'name' => 'Sidebar Area',
            'id' => 'sidebar-1',
            'description' => 'Sidebar Widget Area', 
        )
    );

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<div class="social-links">', 
            'after_widget' => '</div>', 
            'name' => 'Footer Area',
            'id' => 'footer-1',
            'description' => 'Footer Widget Area', 
        )
    );
}
add_action('widgets_init', 'megaparts_widget_area');