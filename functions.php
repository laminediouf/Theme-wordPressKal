<?php
/**
 * Created by PhpStorm.
 * User: stagiaire
 * Date: 28/11/2018
 * Time: 10:37
 */
?>
<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'hover-style-css', get_stylesheet_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css' );
}

function theme_js(){
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/vendor/jquery/jquery.min.js');
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js');
}
add_action( 'wp_enqueue_scripts', 'theme_js' );

if ( function_exists('register_sidebar') ) register_sidebar(2);
?>
