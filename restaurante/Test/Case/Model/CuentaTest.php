<?php
App::uses('Cuenta', 'Model');

/**
 * Cuenta Test Case
 *
 */
class CuentaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cuenta',
		'app.cliente'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Cuenta = ClassRegistry::init('Cuenta');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Cuenta);

		parent::tearDown();
	}

}
