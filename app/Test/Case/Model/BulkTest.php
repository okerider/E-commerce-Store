<?php
App::uses('Bulk', 'Model');

/**
 * Bulk Test Case
 *
 */
class BulkTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.bulk',
		'app.product',
		'app.type',
		'app.brand',
		'app.retail',
		'app.wholesale'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Bulk = ClassRegistry::init('Bulk');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Bulk);

		parent::tearDown();
	}

}
