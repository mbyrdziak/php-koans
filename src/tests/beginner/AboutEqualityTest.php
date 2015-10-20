<?php
DEFINE('__','FILL ME IN');

class AboutEqualityTest extends PHPUnit_Framework_TestCase {

	/**
	 * @test
	 */
	public function doubleEqualsTestsIfTwoObjectsAreEqual() {
		$object = new stdClass();
		$sameObject = $object;
		
		$this->assertEquals($object == $sameObject, __);
		$this->assertEquals($object == new stdClass(), __);
	}
	
	/**
	 * @test
	 */
	public function tripleEqualsTestsIfTwoObjectsAreIdentical() {
		$object = new stdClass();
		$sameObject = $object;
	
		$this->assertEquals($object === $sameObject, __);
		$this->assertEquals($object === new stdClass(), __);
	}
}