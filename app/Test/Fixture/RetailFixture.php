<?php
/**
 * RetailFixture
 *
 */
class RetailFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'product_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'price' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => '10,2', 'unsigned' => false),
		'packaging' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'in_stock' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'date_created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'date_modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'product_id' => 1,
			'price' => '',
			'packaging' => 1,
			'in_stock' => 'Lorem ip',
			'date_created' => '2015-08-16 14:12:57',
			'date_modified' => '2015-08-16 14:12:57'
		),
	);

}
