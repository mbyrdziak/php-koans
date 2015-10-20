<?php
DEFINE('__','FILL ME IN');

class AboutArraysTest extends PHPUnit_Framework_TestCase {

	/**
	 * @test
	 */
	public function arraysConsiderElementsWhenEvaluatingEquality() {
		$array = array(1, 2);
		$sameArray = array(1, 2);

		$this->assertEquals($array == $sameArray, __);
		$this->assertEquals($array === $sameArray, __);
	}

	/**
	 * @test
	 */
	public function arraysAreIndexedAtZero() {
		$array = array(1, 2);
	
		$this->assertEquals($array[0], __);
		$this->assertEquals($array[1], __);
	}
	
	/**
	 * @test
	 */
	public function arraysAreMutable() {
		$array = array(1, 2);
		$array[0] = 5;

		$this->assertEquals($array[0], __);
	}

	/**
	 * @test
	 */
	public function arrayIndexOutOfBounds() {
		$array = array(1);
		$array[1]; // remember 0 based indexes, 1 is the 2nd element (which doesn't exist)
	}

	/**
	 * @test
	 */
	public function arrayLengthCanBeChecked() {
		$array = array(1, 2);
		$this->assertEquals(count($array), __);
	}
	
	
}