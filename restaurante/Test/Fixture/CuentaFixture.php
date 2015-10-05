<?php
/**
 * CuentaFixture
 *
 */
class CuentaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'binary', 'null' => false, 'default' => null, 'length' => 36, 'key' => 'primary'),
		'nombres' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'apellido_paterno' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 128, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'apellido_materno' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 128, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'email' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 256, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'password' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 256, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'telefono' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'validado' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
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
			'id' => '55f08762-a0b4-42e4-803f-1538651aef06',
			'nombres' => 'Lorem ipsum dolor sit amet',
			'apellido_paterno' => 'Lorem ipsum dolor sit amet',
			'apellido_materno' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'telefono' => '',
			'validado' => 1,
			'img' => 'Lorem ipsum dolor sit amet',
			'created' => '2015-09-09 14:24:18',
			'modified' => '2015-09-09 14:24:18'
		),
	);

}
