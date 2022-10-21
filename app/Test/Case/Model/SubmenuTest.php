<?php
App::uses('Submenu', 'Model');

/**
 * Submenu Test Case
 *
 */
class SubmenuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.submenu',
		'app.menu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Submenu = ClassRegistry::init('Submenu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Submenu);

		parent::tearDown();
	}

}
