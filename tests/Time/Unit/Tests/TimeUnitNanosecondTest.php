<?php
namespace Time\Unit\Tests;

use PHPUnit\Framework\TestCase;
use Time\Unit\TimeUnitNanosecond;

class TimeUnitNanosecondTest extends TestCase
{
	/**
	 * @test
	 */
	public function testToNanos()
	{
		$this->assertEquals( 1, TimeUnitNanosecond::toNanos( 1 ) );
	}

	/**
	 * @test
	 */
	public function testSleep()
	{
		TimeUnitNanosecond::sleep( 1 );
		$this->assertTrue( true );
	}
}