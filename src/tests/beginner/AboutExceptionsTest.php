<?php
DEFINE('__','FILL ME IN');

class ParentException extends Exception {}

class ChildException extends ParentException {}

class AboutExceptionsTest extends PHPUnit_Framework_TestCase {

	/**
	 * @test
	 */
	public function catchExceptions() {
		$s = '';
		try {
			throw new Exception();
			$s = 'code run normally';
		} catch(Exception $e) { 
			$s = "exception thrown";
		}
		$this->assertEquals($s, __);
	}

	/**
	 * @test
	 */
	public function catchOrder() {
		$s = '';
		try {
			throw new ChildException();
		} catch(ParentException $e) {
			$s = "ParentException";
		} catch(ChildException $e) {
			$s = "ChildException";
		}
		$this->assertEquals($s, __);
	}
}