<?php

function themelintang_theme_support()
{
    add_theme_support('custom-logo', array(
        "height" => 50
    ));
}
add_action('after_setup_theme','themelintang_theme_support');

function lintang_menus()
{
    $location = array(
        'primary' => "Desktop Primary Left Sidebar",
        'footer' => "Footer Menus Items"
    );

    register_nav_menus($location);
}
add_action( 'init', 'lintang_menus' );

?>
