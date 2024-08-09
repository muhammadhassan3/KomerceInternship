<?php

function themelintang_theme_support()
{
    add_theme_support('custom-logo', array(
        "height" => 50
    ));
    add_theme_support('post-thumbnails', array('post', 'page'));
}
add_action('after_setup_theme','themelintang_theme_support');

function theme_initScript(){
    $version = wp_get_theme()->get("Version");
    wp_enqueue_script("main-css", get_template_directory_uri().'/main.js', array(), $version, true);
}

function lintang_menus()
{
    $location = array(
        'primary' => "Desktop Primary Left Sidebar",
        'footer' => "Footer Menus Items"
    );

    register_nav_menus($location);
}

function initStyle(){
    $version = wp_get_theme()->get("Version");
    wp_enqueue_style("custom-css", get_template_directory_uri().'/style.css', array(), $version, "all");
}

$args = array(
    'numberposts' => 3, 
    'post_type'   => 'post', 
    'post_status' => 'publish'
);
$custom_posts = get_posts($args);

add_action( 'init', 'lintang_menus' );
add_action("wp_enqueue_scripts", 'initStyle');
add_action('wp_enqueue_scripts', 'theme_initScript');
?>
