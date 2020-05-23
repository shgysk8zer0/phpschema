<?php
namespace shgysk8zer0\PHPSchema\Interfaces;

use \DateTimeInterface;
use \DateInterval;

interface DurationInterface extends QuantityInterface
{
	// @see https://schema.org/Duration

	public function getDateInterval():? DateInterval;

	public function getDateIntervalAsString():? string;

	public function setDateInterval(?DateInterval $val): void;

	public function setDateRange(DateTimeInterface $start, DateTimeInterface $end): void;
}
