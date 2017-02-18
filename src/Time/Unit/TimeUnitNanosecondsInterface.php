<?php
namespace Time\Unit;

interface TimeUnitNanosecondsInterface
{
	/**
	 * @param int $delay
	 * @return int
	 */
	static function toNanos( $delay );

	/**
	 * @param int $timeout
	 */
	static function sleep( $timeout );
}