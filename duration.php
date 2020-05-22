<?php
namespace shgysk8zer0\PHPSchema;

use \shgysk8zer0\PHPSchema\Interfaces\{DurationInterface};
use \DateTimeInterface;
use \DateInterval;

class Duration extends Quantity implements DurationInterface
{
	// @see https://schema.org/Duration

	public const TYPE = 'Duration';

	public const ISO8601DURATION = 'P%yY%mM%dDT%hH%iM%sS';

	public function getDateInterval():? DateInterval
	{
		$ident = $this->getIdentifier();

		if (isset($ident)) {
			return new DateInterval($ident);
		} else {
			return null;
		}
	}

	public function getDateIntervalAsString():? string
	{
		if ($interval = $this->getDateInterval()) {
			return rtrim(str_replace(
				['S0F', 'M0S', 'H0M', 'DT0H', 'M0D', 'Y0M', 'P0Y', 'Y0M', 'P0M'],
				['S', 'M', 'H', 'DT', 'M', 'Y0M', 'P', 'Y', 'P'],
				$interval->format(self::ISO8601DURATION)
			));
		}
	}

	public function setDateInterval(?DateInterval $val): void
	{
		if (isset($val)) {
			$this->setIdentifier(rtrim(str_replace(
				['S0F', 'M0S', 'H0M', 'DT0H', 'M0D', 'Y0M', 'P0Y', 'Y0M', 'P0M'],
				['S', 'M', 'H', 'DT', 'M', 'Y0M', 'P', 'Y', 'P'],
				$val->format(self::ISO8601DURATION)
			)));
		}
	}

	public static function fromDateTimes(DateTimeInterface $start, DateTimeInterface $end): DurationInterface
	{
		$dur = new self();
		$dur->setDateInterval($start->diff($end));
		return $dur;
	}
}
