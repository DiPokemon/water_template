<?php
class WaterPriceModel {

public $id;     		// (int)
public $city;   		// Город (tinytext)
public $price_apparts;  // Цена квартира (smallint)
public $price_house;   	// Цена дом (smallint)
public $price_well;   	// Цена колодец (smallint)
public $benefit_apparts;// Льгота квартира (smallint)
public $benefit_house;  // Льгота дом (smallint)
public $benefit_well;  	// Льгота колодец (smallint)


/**
 * Run
 */
public function __construct(){

}

public function get($id){
	global $wpdb;

	$query = "SELECT * FROM `" . WATER_PRICE_DB_TABLE_NAME . "` WHERE id = '" . $id . "' LIMIT 1";
	$row = $wpdb->get_row($query, 'OBJECT');

	$this->id 		= $id;
	$this->city	= is_null($row->city)   ? '' : $row->city;
	$this->price_apparts	= is_null($row->price_apparts)   ? '' : $row->price_apparts;
	$this->price_house	= is_null($row->price_house)   ? '' : $row->price_house;
	$this->price_well	= is_null($row->price_well)   ? '' : $row->price_well;
	$this->benefit_apparts	= is_null($row->benefit_apparts)   ? '' : $row->benefit_apparts;
	$this->benefit_house	= is_null($row->benefit_house)   ? '' : $row->benefit_house;
	$this->benefit_well	= is_null($row->benefit_well)   ? '' : $row->benefit_well;

	return $this;
}

public function get_list(){
	global $wpdb;

	$query = "SELECT * FROM `" . WATER_PRICE_DB_TABLE_NAME . "`";
	$list = $wpdb->get_results($query, 'OBJECT_K');

	if ( $list )
		return $list;
	else
		return [];
}

public function save(){
	global $wpdb;

	if (is_null($this->id))
		$this->add();
	else
		$this->edit();

	return $this;
}

public function delete($id){
	global $wpdb;

	return  $wpdb->delete(
		WATER_PRICE_DB_TABLE_NAME,
				[
					'id' => $id
				]
			);
}

public function add(){
	global $wpdb;

	$rows_affected = $wpdb->insert(
		WATER_PRICE_DB_TABLE_NAME,
				[
					'city'   => $this->city,
					'price_apparts'   => $this->price_apparts,
					'price_house'   => $this->price_house,
					'price_well'   => $this->price_well,
					'benefit_apparts' 	=> $this->benefit_apparts,
					'benefit_house' 	=> $this->benefit_house,
					'benefit_well' 	=> $this->benefit_well,
									
				]
			);
	return $rows_affected;
}

public function edit(){
	global $wpdb;

	return 	$wpdb->update(
		WATER_PRICE_DB_TABLE_NAME,
				[
					'city'   => $this->city,
					'price_apparts'   => $this->price_apparts,
					'price_house'   => $this->price_house,
					'price_well'   => $this->price_well,
					'benefit_apparts' 	=> $this->benefit_apparts,
					'benefit_house' 	=> $this->benefit_house,
					'benefit_well' 	=> $this->benefit_well,
				],
				[
					'id' => $this->id
				]
			);
}

}