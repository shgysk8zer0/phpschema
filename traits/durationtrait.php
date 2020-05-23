<?php
namespace shgysk8zer0\PHPSchema\Traits;

use \shgysk8zer0\PHPSchema\{Duration};
use \shgysk8zer0\PHPSchema\Interfaces\{DurationInterface};
use \DateTimeInterface;
use \DateInterval;

trait DurationTrait
{
	final public function getDurationFromDateRange(
		?DateTimeInterface $from = null,
		?DateTimeInterface $to   = null
	):? DurationInterface
	{
		return $this->getDurationFromDateInterval($from->diff($to));
	}

	final public function getDurationStringFromDateRange(
		?DateTimeInterface $from = null,
		?DateTimeInterface $to   = null
	):? string
	{
		if ($dur = $this->getDurationFromDateRange($from, $to)) {
			return $dur->getDateIntervalAsString();
		} else {
			return null;
		}
	}

	final public function getDurationFromDateInterval(?DateInterval $val): DurationInterface
	{
		if (isset($val)) {
			$dur = new Duration();
			$dur->setDateInterval($val);
			return $dur;
		} else {
			return null;
		}
	}

	final public function getDurationStringFromDateInterval(?DateInterval $diff):? string
	{
		if ($dur = $this->getDurationFromDateInterval($diff)) {
			return $dur->getDateIntervalAsString();
		} else {
			return null;
		}
	}
}
