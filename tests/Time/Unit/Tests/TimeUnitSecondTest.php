<?php
namespace Time\Unit\Tests;

use PHPUnit\Framework\TestCase;
use Time\Unit\TimeUnitSecond;

class TimeUnitSecondTest extends TestCase
{
	/**
	 * @test
	 */
	public function testToNanos()
	{
		$this->assertEquals( pow(10, 9), TimeUnitSecond::toNanos( 1 ) );
	}

	/**
	 * @test
	 */
	public function testSleep()
	{
		TimeUnitSecond::sleep( 1 );
		$this->assertTrue( true );
	}
}