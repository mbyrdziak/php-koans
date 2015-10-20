<?php
DEFINE('__','FILL ME IN');

class ParentClass {
	public function doStuff() { return "parent"; }
	public function doDifferentStuff() { return "parent"; }
}
class ChildClass extends ParentClass {
	public function doStuff() { return "child"; }
	
	public function doDifferentStuff() {
		$result = parent::doDifferentStuff();
		return "child " . $result; 
	}
}

class AboutEqualityTest extends PHPUnit_Framework_TestCase {

	/**
	 * @test
	 */
	public function methodOverriding() {
		$this->assertEquals((new ParentClass())->doStuff(), __);
		$this->assertEquals((new ChildClass())->doStuff(), __);
	}
	
	/**
	 * @test
	 */
	public function parentMethodInvoking() {
		$this->assertEquals((new ChildClass())->doDifferentStuff(), __);
	}
}
