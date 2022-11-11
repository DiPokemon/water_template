<?php
//включаем поддержку кастомного лога из настроек
add_theme_support( 'custom-logo' );

//поддержка миниатюр
add_theme_support('post-thumbnails');

//регистрация областей меню
register_nav_menus([
    'main_menu' => 'Main menu',
    'footer_menu' => 'Footer menu'
]);

//добавление класса к li в меню
function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

//добавление класса к <a> в меню
function add_menu_link_class( $atts, $item, $args ) {
  if (property_exists($args, 'link_class')) {
    $atts['class'] = $args->link_class;
  }
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );

// добавление класса к логотипу
add_filter( 'get_custom_logo', 'change_logo_class' );
function change_logo_class( $html ) {
       $html = str_replace( 'custom-logo-link', 'header__logo_img', $html );
    return $html;
};

//правильное подключение CSS
function water_load_styles()
{
  wp_enqueue_style('custom-style', get_template_directory_uri().'/static/css/custom-style.css');
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
