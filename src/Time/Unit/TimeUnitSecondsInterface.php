<?php
namespace Time\Unit;

interface TimeUnitSecondsInterface
{
	/**
	 * @param int $delay
	 * @return int
	 */
	static function toSeconds( $delay );

	/**
	 * @param int $timeout
	 */
	static function sleep( $timeout );
}