<?php
namespace Time\Unit\Tests;

use PHPUnit\Framework\TestCase;
use Time\Unit\TimeUnitMillisecond;

class TimeUnitMillisecondTest extends TestCase
{
	/**
	 * @test
	 */
	public function testToNanos()
	{
		$this->assertEquals( pow(10, 6), TimeUnitMillisecond::toNanos( 1 ) );
	}

	/**
	 * @test
	 */
	public function testSleep()
	{
		TimeUnitMillisecond::sleep( 1 );
		$this->assertTrue( true );
	}
}