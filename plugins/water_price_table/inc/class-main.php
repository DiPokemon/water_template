<?php
class WaterPrice {

private static $plugin_url;
protected static $plugin_basename;

protected static $file;
protected static $model;

/**
 * Run
 */
public function __construct( $file ){

	// Vars
	self::$plugin_url = plugins_url( '/', $file );
	self::$plugin_basename = plugin_basename( $file );
	self::$file = $file;

	// Model
	self::$model = new WaterPriceModel();

	// Подключаем в админке
	if (is_admin()) {
		// Hooks
		add_action('admin_menu', array(__CLASS__, 'register_plugin_button_in_admin_menu'));

		// Подключаем в админке текущего плагина
		if (self::is_this_plugin_admin_page()) {
		  	// Handlers (add, edit, delete)
			$this->routing_handlers();
		}
	}

	// Shortcodes
    add_shortcode('water_price', array(__CLASS__, 'replace_shortcode') );
}



/**
 * Активация плагина
 */
function activate(){
	// Добавить таблицу в БД при активации плагина
	// Источник: https://wp-kama.ru/function/register_activation_hook
	global $wpdb;

	if ($wpdb->get_var("SHOW TABLES LIKE '" . WATER_PRICE_DB_TABLE_NAME . "'") !=WATER_PRICE_DB_TABLE_NAME)
	{
		$sql = "CREATE TABLE " . WATER_PRICE_DB_TABLE_NAME . " (
			id int(11) NOT NULL AUTO_INCREMENT,
			city tinytext NULL,
			price_apparts SMALLINT NULL,
			price_house SMALLINT NULL,
			price_well SMALLINT NULL,
			benefit_apparts SMALLINT NULL,
			benefit_house SMALLINT NULL,
			benefit_well SMALLINT NULL,
			UNIQUE KEY id (id)
		);";

		require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		// dbDelta содержится в ABSPATH . 'wp-admin/includes/upgrade.php'
		// Назначение dbDelta: создание и обновление таблицы
      	dbDelta($sql);

      	// Добавить в таблицу options инфу о версии таблицы бд
      	add_option(WATER_PRICE_PLUGIN_NAME . "_db_version", WATER_PRICE_PLUGIN_DB_VERSION);
	}
}



/**
 * Добавить кнопку в меню админки
 */
static function register_plugin_button_in_admin_menu(){
	// Источник 1: https://wp-kama.ru/function/add_menu_page
	// Источник 2: https://truemisha.ru/blog/wordpress/administration-menus.html
	add_menu_page(
		WATER_PRICE_PLUGIN_NAME_RU, 							// содержимое <title>
		WATER_PRICE_PLUGIN_NAME_RU,							// название пункта в меню
		'manage_options',												// уровень доступа (взял из примера)
		WATER_PRICE_PLUGIN_NAME,								// URL страницы с плагином
		array(__CLASS__, 'render_admin_page'), 							// функция, генерирующая страницу
		plugins_url( WATER_PRICE_PLUGIN_NAME . '/static/images/admin_menu_button.png' ) // адрес иконки
	);
}



/**
 * Генерация админской страницы
 */
static function render_admin_page(){
	if (is_admin()) {
		if ( (isset($_GET['page'])) && ($_GET['page'] == WATER_PRICE_PLUGIN_NAME) ) {
			switch ((isset($_GET['view']) ? $_GET['view'] : '')) {
				case 'add':
				    include dirname(self::$file) . '/views/form.php';
				    break;

				case 'edit':
					if (isset($_GET['data_id'])) {
						self::$model->get( $_GET['data_id'] );
						include dirname(self::$file) . '/views/form.php';
					}
				    break;

				default:
				    include dirname(self::$file) . '/views/index.php';
			}
		}
	}
}



/**
 * Обработчик событий (add, edit, delete)
 */
function routing_handlers(){
	if (is_admin()) {
		if ( (isset($_GET['page'])) && ($_GET['page'] == WATER_PRICE_PLUGIN_NAME) ) {
			// Начальные данные
			$id = null;
			$city = null;
			$price_apparts = null;
			$price_house = null;
			$price_well = null;
			$benefit_apparts = null;	
			$benefit_house = null;	
			$benefit_well = null;	
			

			// Обработка $_POST и $_GET
			if (isset($_GET['data_id']))
				$id = $_GET['data_id'];		
				
			if (isset($_POST['data_id']))
				$id = $_POST['data_id'];	
			
			if (isset($_POST['data_city']))
				$city = $_POST['data_city'];	

			if (isset($_POST['data_price_apparts']))
				$price_apparts = $_POST['data_price_apparts'];
			
			if (isset($_POST['data_price_house']))
				$price_house = $_POST['data_price_house'];
			
			if (isset($_POST['data_price_well']))
				$price_well = $_POST['data_price_well'];

			if (isset($_POST['data_benefit_apparts']))
				$benefit_apparts = $_POST['data_benefit_apparts'];	
			
			if (isset($_POST['data_benefit_house']))
				$benefit_house = $_POST['data_benefit_house'];	
				
			if (isset($_POST['data_benefit_well']))
				$benefit_well = $_POST['data_benefit_well'];	
				
			

			// Понять какое событие и выполнить его
			switch ((isset($_GET['action']) ? $_GET['action'] : '')) {
			case 'add':
				self::$model->city		= $city;
				self::$model->price_apparts 	= $price_apparts;
				self::$model->price_house  	= $price_house;
				self::$model->price_well	= $price_well;
				self::$model->benefit_apparts  	= $benefit_apparts;		
				self::$model->benefit_house  	= $benefit_house ;	
				self::$model->benefit_well 	= $benefit_well ;	
				self::$model->add();
				print('<script>window.location = "/wp-admin/?page=' . WATER_PRICE_PLUGIN_NAME . '"</script>');
				break;
			case 'edit':
				self::$model->get( $id );
				self::$model->city		= $city;
				self::$model->price_apparts 	= $price_apparts;
				self::$model->price_house  	= $price_house;
				self::$model->price_well	= $price_well;
				self::$model->benefit_apparts  	= $benefit_apparts;		
				self::$model->benefit_house  	= $benefit_house ;	
				self::$model->benefit_well 	= $benefit_well ;		
				self::$model->edit();
				print('<script>window.location = "/wp-admin/?page=' . WATER_PRICE_PLUGIN_NAME . '"</script>');
				break;
			case 'delete':
				self::$model->delete( $id );
				print('<script>window.location = "/wp-admin/?page=' . WATER_PRICE_PLUGIN_NAME . '"</script>');
				break;
			}

		}
	}
}

/**
 * Заменить шорткод
 */
static function replace_shortcode() {
	include dirname(self::$file) . '/views/replace_shortcode.php';
}



/**
 * Вспомогательная функция: пользователь в панели управления и в текущем плагине?
 */
static function is_this_plugin_admin_page() {
	return is_admin() && ((isset($_GET['page'])) && ($_GET['page'] == WATER_PRICE_PLUGIN_NAME));
}

}
