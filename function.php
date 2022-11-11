<?php
//включаем поддержку кастомного лога из настроек
add_theme_support( 'custom-logo' );

//правильное подключение CSS
function water_load_styles()
{
  wp_enqueue_style('style', get_template_directory_uri().'/static/css/style.css');
  wp_enqueue_style('slick', get_template_directory_uri().'/static/libs/slick/slick.css');
  wp_enqueue_style('slick-theme', get_template_directory_uri().'/static/libs/slick/slick-theme.css');
}; 
add_action('wp_enqueue_scripts', 'water_load_styles', 10);

//правильное подключение JS
function water_load_scripts()
{  
  wp_enqueue_script('script', get_template_directory_uri() . '/static/js/script.js', array(), NULL, true);
  wp_deregister_script( 'jquery' );
  wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.6.1.min.js');
  wp_enqueue_script( 'jquery' , array(), NULL, true);
  wp_enqueue_script('slick', get_template_directory_uri() . '/static/libs/slick/slick.min.js', array('jquery'), NULL, true);
  //wp_enqueue_script('init_main_slider', get_template_directory_uri().'/static/js/init_main_slider.js', array('slick'), NULL, true);
} 
add_action('wp_enqueue_scripts', 'water_load_scripts', 10);