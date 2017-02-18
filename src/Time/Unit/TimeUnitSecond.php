<?php
namespace Time\Unit;

class TimeUnitSecond extends TimeUnit implements TimeUnitNanosecondsInterface
{
	/**
	 * @param int $delay
	 * @return int
	 */
	public static function toNanos( $delay )
	{
		return self::handleOverflow( $delay, self::C3 / self::C0, PHP_INT_MAX / ( self::C3 / self::C0 ) );
	}

	/**
	 * @param int $timeout
	 */
	public static function sleep( $timeout )
	{
		self::sleepFor( 0, self::toNanos( $timeout ) );
	}
}