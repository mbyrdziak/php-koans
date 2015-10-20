<?php
DEFINE('__','FILL ME IN');

class AboutLoopsTest extends PHPUnit_Framework_TestCase {

	/**
	 * @test
	 */
	public function basicForLoop() {
		$s = '';
		for ($i = 0; $i < 5; $i++) {
			$s .= $i . ' ';
		}
		$this->assertEquals($s, __);
	}
	
	/**
	 * @test
	 */
	public function basicForLoopWithTwoVariables() {
		$s = '';
		for ($i = 0, $j = 10; $i < 5 && $j > 5; $i++, $j--) {
			$s .= $i . ' ' . $j . ' ';
		}
		$this->assertEquals($s, __);
	}
	
	/**
	 * @test
	 */
	public function extendedForLoop() {
		$is = array(1, 2, 3, 4);
		$s = '-';
		foreach ($is as $j) {
			$s .= '.' . $j;
		}
		$this->assertEquals($s, __);
	}

	/**
	 * @test
	 */
	public function whileLoop() {
		$result = 0;
		while ($result < 3) {
			$result++;
		}
		$this->assertEquals($result, __);
	}

	/**
	 * @test
	 */
	public function doLoop() {
		$result = 0;
		do {
			$result++;
		} while (false);
		$this->assertEquals($result, __);
	}

	/**
	 * @test
	 */
	public function extendedForLoopBreak() {
		$sa = array("Dog", "Cat", "Tiger");
		$count = 0;
		foreach ($sa as $current) {
			if ("Cat" == $current) {
				break;
			}
			$count++;
		}
		$this->assertEquals($count, __);
	}

	/**
	 * @test
	 */
	public function extendedForLoopContinue() {
		$sa = array("Dog", "Cat", "Tiger");
		$count = 0;
		foreach ($sa as $current) {
			if ("Cat" == $current) {
				continue;
			} else {
				$count++;
			}
		}
		$this->assertEquals($count, __);
	}
}