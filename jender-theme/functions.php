<?php

function add_css() {
   wp_register_style('first', get_template_directory_uri() . '/assets/css/style.css', false,'1.1','all');
   wp_enqueue_style( 'first');

   wp_register_style('noto',"https://fonts.googleapis.com/css2?family=Noto+Serif:wght@400;700&display=swap", false,'1.1','all');
   wp_enqueue_style( 'noto');

   wp_register_style('lato',"https://fonts.googleapis.com/css2?family=Lato&display=swap", false,'1.1','all');
   wp_enqueue_style( 'lato');

}

add_action('wp_enqueue_scripts', 'add_css');

function add_script() {
   wp_register_script('js-script', get_template_directory_uri() . '/assets/js/scripts.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'js-script');
}
add_action('wp_enqueue_scripts', 'add_script');

add_theme_support( 'menus' );