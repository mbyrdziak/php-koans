<?php
DEFINE('__','FILL ME IN');

class AboutClosuresTest extends PHPUnit_Framework_TestCase {

	/**
	 * @test
	 */
	public function simpleAnonymousFunction() {
		$func = function () {
			return 'anonymous function';
		};
		$this->assertEquals($func(), __);
	}

	/**
	 * @test
	 */
	public function anonymousFunctionWithArgs() {
		$func = function ($arg) {
			return $arg .= ' anonymous function';
		};
		$this->assertEquals($func('arg in'), __);
	}

	/**
	 * @test
	 */
	public function variableInheritanceFromParentScope() {
		$message = ' anonymous function';
		$func = function ($arg) use($message) {
			return $arg .= $message;
		};
		$this->assertEquals($func('arg in'), __);
	}
}