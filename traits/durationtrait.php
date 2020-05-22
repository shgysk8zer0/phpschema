<?php
namespace shgysk8zer0\PHPSchema\Traits;

use \DateTimeInterface;
use \DateInterval;

trait DurationTrait
{
	final public function calculateDuration(?DateTimeInterface $from, DateTimeInterface $to):? DateInterval
	{
		if (isset($from, $to)) {
			return $from->diff($to);
		} else {
			return null;
		}
	}

	final public function calculateDurationAsString(
		?DateTimeInterface $from,
		?DateTimeInterface $to,
		string             $format = 'P%yY%mM%dDT%hH%iM%sS'
		):? string
	{
		if ($diff = $this->calculateDuration($from, $to)) {
			return rtrim(str_replace(
				['S0F', 'M0S', 'H0M', 'DT0H', 'M0D', 'Y0M', 'P0Y', 'Y0M', 'P0M'],
				['S', 'M', 'H', 'DT', 'M', 'Y0M', 'P', 'Y', 'P'],
				$diff->format($format)
			));
		} else {
			return null;
		}
	}
}
