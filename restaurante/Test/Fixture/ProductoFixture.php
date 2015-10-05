<?php
/**
 * ProductoFixture
 *
 */
class ProductoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'binary', 'null' => false, 'default' => null, 'length' => 36, 'key' => 'primary'),
		'marca_id' => array('type' => 'binary', 'null' => false, 'default' => null, 'length' => 36),
		'descripcion' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 256, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'unidad' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 15, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'codigo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'precio_unitario' => array('type' => 'float', 'null' => false, 'default' => '0', 'unsigned' => false),
		'stock' => array('type' => 'float', 'null' => false, 'default' => '0', 'unsigned' => false),
		'img' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 256, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '55f087ed-a850-4152-9e19-1538651aef06',
			'marca_id' => 'Lorem ipsum dolor sit amet',
			'descripcion' => 'Lorem ipsum dolor sit amet',
			'unidad' => 'Lorem ipsum d',
			'codigo' => 'Lorem ipsum dolor sit amet',
			'precio_unitario' => 1,
			'stock' => 1,
			'img' => 'Lorem ipsum dolor sit amet',
			'created' => '2015-09-09 14:26:37',
			'modified' => '2015-09-09 14:26:37'
		),
	);

}
