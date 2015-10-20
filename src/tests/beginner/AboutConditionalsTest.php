<?php
DEFINE('__','FILL ME IN');

class AboutConditionalsTest extends PHPUnit_Framework_TestCase {

	/**
	 * @test
	 */
	public function basicIfWithoutCurly() {
		// Ifs without curly braces are ugly and not recommended but still valid:
		$x = 1;
		if (true)
			$x++;

		$this->assertEquals($x, __);
	}

	/**
	 * @test
	 */
	public function basicIfElseWithoutCurly() {
		// Ifs without curly braces are ugly and not recommended but still valid:
		$x = 1;
		$secretBoolean = false;
		if ($secretBoolean)
			$x++;
		else
			$x--;

		$this->assertEquals($x, __);
	}

	/**
	 * @test
	 */
	public function basicIfElseIfElseWithoutCurly() {
		$x = 1;
		$secretBoolean = false;
		$otherBooleanCondition = true;
		// Ifs without curly braces are ugly and not recommended but still valid:
		if ($secretBoolean)
			$x++;
		else if ($otherBooleanCondition)
			$x = 10;
		else 
			$x--;
		
		$this->assertEquals($x, __);
	}

	/**
	 * @test
	 */
	public function nestedIfsWithoutCurlysAreReallyMisleading() {
		// Why are these ugly you ask? Well, try for yourself
		$x = 1;
		$secretBoolean = false;
		$otherBooleanCondition = true;
		// Ifs without curly braces are ugly and not recommended but still valid:
		if ($secretBoolean) $x++;
			if ($otherBooleanCondition) $x = 10;
		else $x--;
		// Where does this else belong to!?
		$this->assertEquals($x, __);
	}

	/**
	 * @test
	 */
	public function ifAsIntended() {
		$x = 1;
		$secretBoolean = false;
		if ($secretBoolean) {
			$x++;
		} else {
			$x = 0;
		}
		// There are different opinions on where the curly braces go...
		// But as long as you put them here. You avoid problems as seen above.
		$this->assertEquals($x, __);
	}

	/**
	 * @test
	 */
	public function basicSwitchStatement() {
		$i = 1;
		$result = 'Basic ';
		switch ($i) {
			case 1:
				$result .= 'One';
				break;
			case 2:
				$result .= 'Two';
				break;
			default:
				$result .= 'Nothing';
		}
		$this->assertEquals($result, __);
	}

	/**
	 * @test
	 */
	public function switchStatementFallThrough() {
		$i = 1;
		$result = 'Basic ';
		switch ($i) {
			case 1:
				$result .= 'One';
			case 2:
				$result .= 'Two';
			default:
				$result .= 'Nothing';
		}
		$this->assertEquals($result, __);
	}

	/**
	 * @test
	 */
	public function switchStatementCrazyFallThrough() {
		$i = 5;
		$result = 'Basic ';
		switch ($i) {
			case 1:
				$result .= 'One';
			default:
				$result .= 'Nothing';
			case 2:
				$result .= 'Two';
		}
		$this->assertEquals($result, __);
	}
}
