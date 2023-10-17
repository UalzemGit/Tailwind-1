<?php

/**
 * ILI functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Ili
 */



function load_scripts()
{


  wp_enqueue_style('google-fonts2', 'https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;800;900&display=swap');



  /*
  wp_enqueue_style('template', get_stylesheet_uri(), array(), filemtime(get_template_directory() . 'dist/output.css'), 'all'); // load theme css
*/

  wp_enqueue_style('tailwindcss_output', get_template_directory_uri() . '/dist/output.css', array(), 'all'); // load theme css


}
add_action('wp_enqueue_scripts', 'load_scripts');


function ili_site_config()
{


  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'ili_site_config', 0);
