<?php
App::uses('Wholesale', 'Model');

/**
 * Wholesale Test Case
 *
 */
class WholesaleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.wholesale',
		'app.product',
		'app.type',
		'app.subcategory',
		'app.category',
		'app.brand',
		'app.bulk',
		'app.retail',
		'app.image'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Wholesale = ClassRegistry::init('Wholesale');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Wholesale);

		parent::tearDown();
	}

}
