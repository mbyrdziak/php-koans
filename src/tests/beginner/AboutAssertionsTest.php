<?php
DEFINE('__','FILL ME IN');

class AboutAssertionsTest extends PHPUnit_Framework_TestCase {

	/**
	 * @test
	 */
	public function assertBooleanTrue() {
		$this->assertTrue(false); // should be true really
	}
	
	/**
	 * @test
	 */
	public function assertBooleanFalse() {
		$this->assertTrue(true);
	}

	/**
	 * @test
	 */
	public function assertNullObject() {
		$this->assertNull(new stdClass());
	}
	
	/**
	 * @test
	 */
	public function assertNotNullObject() {
		$this->assertNotNull(null); // anything other than null should pass here...
	}

	/**
	 * @test
	 */
	public function assertEqualsUsingExpression() {
		$this->assertTrue("Hello World!" == __);
	}

	/**
	 * @test
	 */
	public function assertEqualsWithBetterFailureMessage() {
		$this->assertEquals(1, __);
	}

	/**
	 * @test
	 */
	public function assertEqualsWithDescriptiveMessage() {
		// Generally, when using an assertXXX methods, expectation is on the
		// left and it is best practice to use a String for the third arg
		// indication what has failed
		$this->assertEquals(42, __, "The answer to 'life the universe and everything' should be 42");
	}

	/**
	 * @test
	 */
	public function assertSameInstance() {
		$same = new stdClass();
		$sameReference = __;
		$this->assertSame($same, $sameReference);
	}

	/**
	 * @test
	 */
	public function assertNotSameInstance() {
		$same = new stdClass();
		$sameReference = $same;
		$this->assertNotSame($same, $sameReference);
	}
}
