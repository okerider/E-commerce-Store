<?php
App::uses('Retail', 'Model');

/**
 * Retail Test Case
 *
 */
class RetailTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.retail',
		'app.product',
		'app.type',
		'app.brand',
		'app.bulk',
		'app.wholesale'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Retail = ClassRegistry::init('Retail');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Retail);

		parent::tearDown();
	}

}
