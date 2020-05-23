<?php
namespace shgysk8zer0\PHPSchema;

use \shgysk8zer0\PHPSchema\Interfaces\{DurationInterface};
use \DateTimeInterface;
use \DateInterval;

/**
 * @see https://schema.org/Duration
 *
 * Note: This class must call `getDateIntervalAsString` when jsonifying.
 * For compatibility reasons with parent classes, `jsonSerialize` cannot be
 * made to return the formatted string, so its `jsonSerialize` returns an array
 * containing the return of `getDateIntervalAsString`.
 */
class Duration extends Quantity implements DurationInterface
{
	public const TYPE = 'Duration';

	public const ISO8601DURATION = 'P%yY%mM%dDT%hH%iM%sS';

	public function jsonSerialize(): array
	{
		return [$this->getDateIntervalAsString()];
	}

	public function getDateInterval():? DateInterval
	{
		if ($ident = $this->getIdentifier()) {
			return new DateInterval($ident);
		} else {
			return null;
		}
	}

	final public function getDateIntervalAsString():? string
	{
		return $this->_getFormatttedInterval($this->getDateInterval());
	}

	public function setDateInterval(?DateInterval $val): void
	{
		$this->setIdentifier($this->_getFormatttedInterval($val));
	}

	final public function setDateRange(DateTimeInterface $start, DateTimeInterface $end): void
	{
		$this->setDateInterval($start->diff($end));
	}

	public static function fromDateRange(?DateTimeInterface $start, ?DateTimeInterface $end):? DurationInterface
	{
		if (isset($start, $end)) {
			$dur = new self();
			$dur->setDateRange($start, $end);
			return $dur;
		} else {
			return null;
		}
	}

	public function fromDateInterval(?DateInterval $val):? DurationInterface
	{
		if (isset($val)) {
			$dur = new self();
			$dur->setDateInterval($val);
			return $dur;
		} else {
			return null;
		}
	}

	final protected function _getFormatttedInterval(?DateInterval $val):? string
	{
		if (isset($val)) {
			return rtrim(str_replace(
				['S0F', 'M0S', 'H0M', 'DT0H', 'M0D', 'Y0M', 'P0Y', 'Y0M', 'P0M'],
				['S', 'M', 'H', 'DT', 'M', 'Y0M', 'P', 'Y', 'P'],
				$val->format(self::ISO8601DURATION)
			));
		} else {
			return null;
		}
	}
}
