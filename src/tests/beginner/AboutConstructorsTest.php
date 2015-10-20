<?php
DEFINE('__','FILL ME IN');

class A {
	public $someString = "a";
	public function __construct() { $this->someString .= "x"; }

}

class B extends A {
	public function __construct() {$this->someString .= "g"; }
}

class Aa {
	public $someString = "a";
	public function __construct() { $this->someString .= "x"; }
}

class Bb extends Aa {
	public function __construct() { parent::__construct(); $this->someString .= "g"; }
}

class AboutConstructorsTest extends PHPUnit_Framework_TestCase {
	
	/**
	 * @test
	 */
	public function simpleConstructorOrder() {
		$this->assertEquals((new B())->someString, __);
	}
	
	/**
	 * @test
	 */
	public function complexConstructorOrder() {
		$this->assertEquals((new Bb())->someString, __);
	}
}
