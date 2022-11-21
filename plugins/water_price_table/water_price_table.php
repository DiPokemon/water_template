<?php
/*
Plugin Name: WATER Цены на главной
Description: Таблица с ценами на главной
Version: 1.0
*/

global $wpdb;

if ( ! defined( 'ABSPATH' ) ) exit;

/**************
 * Константы
 **************/
define( 'WATER_PRICE_PLUGIN_DB_VERSION', '1.1' );
define( 'WATER_PRICE_PLUGIN_NAME',       'water_price' );
define( 'WATER_PRICE_PLUGIN_NAME_RU',    'Цены' );
define( 'WATER_PRICE_DB_TABLE_NAME',     $wpdb->prefix . WATER_PRICE_PLUGIN_NAME );
define( 'WATER_PRICE_PLUGIN_DIR',        plugin_dir_path( __FILE__ ) );
define( 'WATER_PRICE_PLUGIN_ADMIN_URL',  admin_url('?page=' . WATER_PRICE_PLUGIN_NAME) );

/**************
 * Class
 **************/
require_once dirname(__FILE__) . '/inc/class-main.php';
require_once dirname(__FILE__) . '/inc/class-model.php';
$water_main_class = new WaterPrice( __FILE__ );


/**************
 * Run
 **************/

// Правила активации:
// register_activation_hook() должен вызываться из основного файла плагина, из того где расположена директива Plugin Name
register_activation_hook(__FILE__, array($water_main_class, 'activate'));

add_action( 'wp_enqueue_scripts', 'water_price_script' );
function water_price_script(){
	wp_enqueue_script( 'water_price_slider-init', '/wp-content/plugins/water_price_table/static/js/water_price.js', array('slick'), null, true);
}